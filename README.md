# アプリケーション名
フリマアプリ


## 環境構築

```
$ cd coachtech/laravel
$ git clone git@github.com:coachtech-material/laravel-docker-template.git
$ mv laravel-docker-template hurima
$ cd hurima
$ git remote set-url origin git@github.com:sakaki839/hurima.git
$ git remote -v
$ git commit -m "リモートリポジトリの変更"
$ docker-co pose up -d --build
$ docker-co pose exec php bash

# composer install
#  cp .env.example .env
# exit
```


## 使用技術（実行環境）
- Dockerバージョン 27.3.1
- laravelバージョン  8.83.8
- gitバージョン　 2.43.0

## ER図

## URL
- phpmyadmin: http://localhost:8080/