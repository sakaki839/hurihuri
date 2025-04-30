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
$ php artisan make:controller ItemController
$ php artisan key:generate

# php artisan make:request LoginReques
t
# php artisan make:request CommentRequ
est
# php artisan make:request PurchaseReq
uest
# php artisan make:request AddressRequ
est
# php artisan make:request ProfileRequ
est
# php artisan make:request ExhibitionR
equest
# exit
```


## 使用技術（実行環境）
- Dockerバージョン 27.3.1
- laravelバージョン  8.83.8
- gitバージョン　 2.43.0

## ER図

## URL
- phpmyadmin: http://localhost:8080/