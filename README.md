# docker-laravel-templete

## クローン

`git clone git@github.com:ucan-lab/docker-laravel-handson.git`

## コンテナ起動

`docker-compose up`

## ログを保存できるように権限設定

`docker-compose exec app chmod -R 777 storage bootstrap/cache`

## ライブラリのインストール

`docker-compose exec app composer install`

## env ファイルの生成

`docker-compose exec app cp .env.example .env`

## アプリケーションキーの作成

`docker-compose exec app php artisan key:generate`

## migration の実行

`docker-compose exec app php artisan migrate`

## コンテナの削除

`docker-compose down -v`
