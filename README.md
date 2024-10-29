# PiGLy

## 環境構築

Dockerビルド
  1.`git clone git@github.com:差し替えます
  2.DockerDesktopアプリを立ち上げる
  3.docker-compose up -d --build

  mysql:
    platform: platform: linux/amd64
    image: mysql:8.0.26
    environment:　MYSQL_ROOT_PASSWORD: root
                  MYSQL_DATABASE: laravel_db
                  MYSQL_USER: laravel_user
                  MYSQL_PASSWORD: laravel_pass

laravel環境構築

  1.docker-compose exec php bash
  2.composer install
  3.「.env.example」ファイルを 「.env」ファイルに命名を変更
  4.envに以下の環境変数を追加

      DB_HOST=mysql
      DB_DATABASE=laravel_db
      DB_USERNAME=laravel_user
      DB_PASSWORD=laravel_pass

  5.アプリケーションキーの作成
    php artisan key:generate
  6.マイグレーションの実行
    php artisan migrate
  7.シーディングの実行
    php artisan db:seedphp artisan storage:link
  8.シンボリックリンクの作成
    php artisan storage:link

## 使用技術

・PHP 8.3.9
・Laravel 8.83.27
・mysql 8.0.26

##　　テーブル設計

## ER図
## URL
