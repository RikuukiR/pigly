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
  7.ファクトリの実行

    <!-- php artisan db:seedphp artisan storage:link -->
  8.シンボリックリンクの作成

    php artisan storage:link

## 使用技術

・PHP 8.3.9

・Laravel 8.83.27

・mysql 8.0.26

##　　テーブル設計

<img width="641" alt="スクリーンショット 2024-10-29 18 35 57" src="https://github.com/user-attachments/assets/3c2a2f80-be63-4aa5-863c-0106890fb0a1">
<img width="776" alt="スクリーンショット 2024-10-29 18 36 07" src="https://github.com/user-attachments/assets/39e26a43-dce5-485b-9abc-9b17c42ecfc1">


## ER図

<img src="/src/public/img/スクリーンショット 2024-11-20 13.53.56.png>

## URL

・開発環境 : http://localhost/login

・phpMyAdmin : http://localhost:8080/