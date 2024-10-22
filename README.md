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
    
## 使用技術
## ER図
## URL
