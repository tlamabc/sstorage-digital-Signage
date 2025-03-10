#!/bin/bash
# Đợi MySQL khởi động (nếu cần)
sleep 10

mysql -uroot -p"$MYSQL_ROOT_PASSWORD" "$MYSQL_DATABASE" <<'EOF'
-- Tạo trigger cho GLOBAL_THEME_NAME nếu chưa tồn tại
DELIMITER $$
CREATE TRIGGER IF NOT EXISTS enforce_global_theme_default_before_update
BEFORE UPDATE ON setting
FOR EACH ROW
BEGIN
  IF NEW.setting = 'GLOBAL_THEME_NAME' THEN
    SET NEW.value = 'default';
  END IF;
END$$
DELIMITER ;

-- Tạo trigger cho NAVIGATION_MENU_POSITION nếu chưa tồn tại
DELIMITER $$
CREATE TRIGGER IF NOT EXISTS enforce_navbar_horizontal_before_update
BEFORE UPDATE ON setting
FOR EACH ROW
BEGIN
  IF NEW.setting = 'NAVIGATION_MENU_POSITION' THEN
    SET NEW.value = 'horizontal';
  END IF;
END$$
DELIMITER ;
EOF
