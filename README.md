# アプリケーション名

choachtechフリマ

## 環境構築

```
$ cd coachtech/laravel
$ git clone git@github.com:coachtech-material/laravel-docker-template.git
$ mv laravel-docker-template hurima
$ cd hurima
$ git remote set-url origin git@github.com:sakaki839/hurihuri.git
$ git remote -v
$ git commit -m "リモートリポジトリの変更"
$ docker-co pose up -d --build
$ docker-co pose exec php bash

# composer install
#  cp .env.example .env
# exit

$ docker-compose run php bash
# php artisan make:controller ItemController
# php artisan make:controller RegisterController
# php artisan make:controller LoginController
# php artisan make:controller CommentController
# php artisan make:controller PurchaseController
# php artisan make:controller AddressController
# php artisan make:controller ProfileController
# php artisan make:controller ExhibitionController
# php artisan key:generate

# php artisan make:request LoginRequest
# php artisan make:request CommentRequest
# php artisan make:request PurchaseRequest
# php artisan make:request AddressRequest
# php artisan make:request ProfileRequest
# php artisan make:request ExhibitionRequest
# exit


```


## 使用技術（実行環境）
- Dockerバージョン 27.3.1
- laravelバージョン  8.83.8
- gitバージョン　 2.43.0

## ER図

## URL
- phpmyadmin: http://localhost:8080/
- 開発環境: http://localhost/