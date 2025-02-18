#!/bin/bash
set -e

# --- 1. Cấu hình đường dẫn ---
# Thư mục chứa mã nguồn gốc (repository) của dự án, ví dụ: /var/www/sstorage-digital-Signage
PROJECT_DIR="/var/www/sstorage-digital-Signage"

# Thư mục sẽ chứa phiên bản "build" của CMS (điều này tương đương với /var/www/cms trong Dockerfile)
CMS_DIR="/var/www/cms"

# --- 2. Đảm bảo repository an toàn với Git ---
echo "Đang cấu hình safe.directory cho Git..."
git config --global --add safe.directory "$PROJECT_DIR"

# --- 3. Chạy Composer (stage Composer) ---
echo "Chạy Composer install..."
cd "$PROJECT_DIR"
composer install --no-interaction --no-dev --optimize-autoloader

# (Tùy chọn) Tidy up vendor: loại bỏ các thư mục không cần thiết (tests, doc, ... giống như Dockerfile)
echo "Dọn dẹp thư mục vendor..."
cd "$PROJECT_DIR/vendor"
find . -type d -name '.git' -exec rm -rf {} + 
find . -path "./twig/twig/lib/Twig" -prune -type d -name 'Test' -exec rm -rf {} + 
find . -type d -name 'tests' -depth -exec rm -rf {} + 
find . -type d -name 'benchmarks' -depth -exec rm -rf {} + 
find . -type d -name 'smoketests' -depth -exec rm -rf {} + 
find . -type d -name 'demo' -depth -exec rm -rf {} + 
find . -type d -name 'doc' -depth -exec rm -rf {} + 
find . -type d -name 'docs' -depth -exec rm -rf {} + 
find . -type d -name 'examples' -depth -exec rm -rf {} + 
find . -type f -name 'phpunit.xml' -exec rm -rf {} + 
find . -type f -name '*.md' -exec rm -rf {} +
cd "$PROJECT_DIR"

# --- 4. Chạy npm và build (stage webpack) ---
echo "Chạy npm install và build (webpack)..."
npm install
npm run publish

# --- 5. Chuẩn bị thư mục CMS ---
echo "Sao chép các file vào thư mục CMS..."
mkdir -p "$CMS_DIR"

# (a) Copy vendor (Composer) đã được build
cp -R "$PROJECT_DIR/vendor" "$CMS_DIR/"

# (b) Copy kết quả build webpack cho giao diện (web/dist)
mkdir -p "$CMS_DIR/web/dist"
cp -R "$PROJECT_DIR/web/dist" "$CMS_DIR/web/dist/"

# (c) Copy thư mục modules (bao gồm cả source và vendor của modules)
cp -R "$PROJECT_DIR/modules" "$CMS_DIR/"

# (d) Copy các file còn lại từ dự án sang CMS, loại trừ các thư mục/thành phần không cần thiết
rsync -av --exclude='.git' --exclude='vendor' --exclude='node_modules' "$PROJECT_DIR/" "$CMS_DIR/"

# --- 6. Cài đặt OpenOOH specification & Help Links ---
echo "Lấy file OpenOOH specification và help-links..."
mkdir -p "$CMS_DIR/openooh"
curl -s -o "$CMS_DIR/openooh/specification.json" https://raw.githubusercontent.com/openooh/venue-taxonomy/main/specification.json
curl -s -o "$CMS_DIR/help-links.yaml" https://raw.githubusercontent.com/xibosignage/xibo-manual/master/help-links.yaml || true

# --- 7. Ghi nhận git commit (fallback) ---
echo "Ghi nhận thông tin git commit..."
GIT_COMMIT=$(git -C "$PROJECT_DIR" rev-parse HEAD 2>/dev/null || echo "prod")
echo "$GIT_COMMIT" > "$CMS_DIR/commit.sha"

# --- 8. Loại bỏ các file không cần thiết (tương tự "tidy up" Dockerfile) ---
echo "Loại bỏ các file không cần thiết..."
rm -f "$CMS_DIR/composer.json" "$CMS_DIR/composer.lock" "$CMS_DIR/Dockerfile" "$CMS_DIR/Dockerfile.ci" "$CMS_DIR/Dockerfile.dev" "$CMS_DIR/docker-compose.yml" "$CMS_DIR/README.md"
# Bạn có thể bổ sung thêm các file/thư mục cần loại bỏ nếu cần

# --- 9. Tạo các thư mục cần thiết và phân quyền ---
echo "Tạo các thư mục cần thiết và thiết lập phân quyền..."
mkdir -p "$CMS_DIR/library/temp" "$CMS_DIR/cache" "$CMS_DIR/web/userscripts" /var/www/backup
chown -R www-data:www-data "$CMS_DIR"
chmod 777 /tmp

# (Nếu cần thiết, thiết lập quyền cho .gnupg)
mkdir -p /var/www/.gnupg
chown -R www-data:www-data /var/www/.gnupg

# --- 10. Khởi động các Service ---
echo "Khởi động Apache và các dịch vụ liên quan..."
# Khởi động Apache (đảm bảo Apache đã được cài đặt và cấu hình đúng)
service apache2 restart

# Khởi động cron (nếu dự án sử dụng cron)
service cron restart

# Nếu có MySQL, đảm bảo MySQL đã được khởi động
# service mysql restart

echo "CMS đã được triển khai và các dịch vụ đã khởi động thành công."
echo "Truy cập CMS qua Apache tại http://<địa_chỉ_máy_chủ>"

# Giữ script chạy (tùy chọn) để theo dõi logs, nếu cần:
# tail -f /var/log/apache2/error.log
