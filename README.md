[![Xibo - Digital Signage](web/theme/default/img/192x192.png)](https://xibosignage.com)

[![Github All Releases](https://img.shields.io/github/downloads/xibosignage/xibo-cms/total.svg)]()

# Ước Lượng Cấu Hình Server Cho 100 Player

Dựa trên kinh nghiệm thực tế và tài liệu từ **diễn đàn Xibo**, có thể tham khảo:

## Tài Nguyên & Khuyến Nghị

| **Tài nguyên** | **Mức khuyến nghị cho 100 player** |
|--------------|----------------------------------|
| **CPU** | 4 - 8 vCPU (Intel Xeon hoặc AMD EPYC) |
| **RAM** | 16 - 32GB |
| **Băng thông** | 50 - 200 Mbps (tùy nội dung) |
| **Storage** | SSD NVMe, tối thiểu 500GB (nếu nhiều video thì >=1TB) |

## Giải Thích

- **CPU**: Xibo CMS chủ yếu dùng PHP/MySQL, nếu có nhiều request từ player thì cần CPU mạnh để xử lý.
- **RAM**: Nếu nhiều player tải dữ liệu cùng lúc, cần RAM đủ để MySQL và PHP-FPM hoạt động tốt.
- **Băng thông**: Nếu mỗi player tải **100MB nội dung/ngày**, thì tổng băng thông là **10GB/ngày (~120KB/s trung bình)**.  
  Nhưng nếu phát video Full HD liên tục, băng thông có thể tăng rất cao.
- **Storage**: Nếu lưu video, nên dùng **SSD** để tăng tốc độ đọc dữ liệu.

See [https://xibosignage.com](https://xibosignage.com) for more information.

Our first open source release 1.0.0-rc1 landed in 2009, and we're committed to keeping everything you need to run a
digital signage network, or single screen, open source and free to use.


## Điều kiện tiên quyết

Các container Docker phát triển không tự động xây dựng các tệp nhà cung cấp cho PHP hoặc JS, điều này được giao cho trách nhiệm của nhà phát triển. Do đó, bạn sẽ cần các công cụ sau:

 - Git
 - [Composer](http://getcomposer.org)
 - NodeJS version 12
 - npm
 - Docker


## Clone the repository

Tạo một thư mục trong không gian làm việc phát triển của bạn và sao chép kho lưu trữ. Nếu bạn có ý định thực hiện thay đổi và gửi
yêu cầu kéo, vui lòng Fork chúng tôi trước và tạo một nhánh mới.

```shell
git clone https://github.com/tlamabc/sstorage-digital-Signage
```


## Install dependencies
Đi đến folder của source

```sh
cd ./sstorage-digital-Signage
```

We recommend installing the dependencies via Docker, so that you are guarenteed consistent dependencies across 
different development machines.

### PHP dependencies

```shell
docker run --interactive --tty --volume $PWD:/app --volume ~/.composer:/tmp composer install
```

This command also mounts the Composer `/tmp` folder into your home directory so that you can take advantage of
Composer caching.

### Website dependencies (webpack)

If you have installed node locally:

```shell
npm install webpack -g
npm install
npm run build
```

Alternatively you can use a Docker container:

```shell
docker run -it --volume $PWD:/app --volume ~/.npm:/root/.npm -w /app node:22 sh -c "npm install webpack -g; npm install; npm run build;"
```

### Mapped Volumes

The development version of Xibo expects the code base to be mapped into the container such that changes on the host
are reflected in the container.

However, the container itself creates some files, such as the twig cache and library uploads. These locations will need
to be created and the container given access to them.

The easiest way to do this is to make the `cache` and `library` folders and `chmod 777` them. Obviously this is not
suitable for production, but you shouldn't be using these files for production (we have containers for that).

### API Keys
The API requires a pub/private RSA keypair and an encryption key to be provided. The docker entrypoint will create 
these in `/library/certs`.

You can override the generated keys paths and encryption key by providing an alternative in `settings-custom.php`.
For example: 

```php
$apiKeyPaths = [
    'publicKeyPath' => '/var/www/cms/custom/public.key',
    'privateKeyPath' => '/var/www/cms/custom/private.key',
    'encryptionKey' => ''
];
```

### OpenOOH specification
Xibo can present the OpenOOH venue classifications in the display edit form. For this functionality to work in 
development, it is necessary 
to [download the latest file](https://raw.githubusercontent.com/openooh/venue-taxonomy/main/specification.json) and 
place it in here: `openooh/specification.json`

The production/CI containers add this file during the build process so that it is already available in the Docker
image.


## Bring up the Containers

Use Docker Compose to bring up the containers.

```sh
docker-compose up --build -d
```

## Login
After the containers have come up you should be able to login with the details:

U: `admin`
P: `password`


## Translations
To parse the translations:

```shell
docker-compose exec web sh -c "cd /var/www/cms; rm -R ./cache"
docker-compose exec web sh -c "cd /var/www/cms; php bin/locale.php"
```

```shell
find ./locale ./cache ./lib ./web  -iname "*.php" -print0 | xargs -0 xgettext --from-code=UTF-8 -k_e -k_x -k__ -o locale/default.pot
```

To import translations:

```shell
bzr pull lp:~dangarner/xibo/holmes-translations
```

Convert to `mo` format:

```shell
for i in *.po; do msgfmt "$i" -o $(echo $i | sed s/po/mo/); done
```

Move the resulting `mo` files into your `locale` folder.

## Swagger API Docs
To generate a `swagger.json` file, with the dev containers running:

```shell
docker-compose exec web sh -c "cd /var/www/cms; vendor/bin/swagger lib -o web/swagger.json"
```
## Licence

[![Licence](https://img.shields.io/github/license/xibosignage/xibo-cms)]()

Copyright (C) 2006-2024 Xibo Signage Ltd and Contributors.

Xibo is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public
License as published by the Free Software Foundation, either version 3 of the License, or any later version.

Xibo is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License along with Xibo. 
If not, see <http://www.gnu.org/licenses/>.


# Installation

We recommend installing an official release via Docker. Instructions for doing so can be found in our 
[documentation](https://xibosignage.com/docs/setup/cms-installation-guides).

