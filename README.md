# Clone src về:

# Tạo database trong phpmyadmin
+ user: root
+ databasename: laravel
+ password: (empty)

# NodeJS: sử dụng các tính năng của nodeJS cho việc build src
+ npm i
+ npm i laravel-echo pusher-js

# Cài đặt mix: sử dụng tính năng generate js ra public
+ npm i laravel-mix

# Cài đặt laravel socket package
+ composer require beyondcode/laravel-websockets
+ php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="migrations"
+ php artisan migrate
+ php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="config"
+ php artisan migrate

# Chạy laravel websocket
- php artisan websockets:serve
- Mở trình duyệt: http://localhost/laravel-websockets

# Chạy build mix
- npx mix