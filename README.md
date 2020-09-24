## Install application:<br/>
- cp .env.example .env (Please edit your .env file. Add db connection and APP_URL)
- php artisan key:gen
- set .env values
- composer install
- npm install
- php artisan migrate
- php artisan voyager:install --with-dummy

## Other commands:<br/>
- php artisan db:seed 
- php artisan cache:clear

## Voyager admin URL:<br/>
http://localhost/laravel/public/admin<br/>
<strong>email</strong>: admin@admin.com<br/>
<strong>password</strong>: password<br/>

## Voyager admin docs:<br/>
https://voyager-docs.devdojo.com/<br/>

## Установлен пакет 301 редиректов
https://github.com/spatie/laravel-missing-page-redirector<br/>
настрока пакета в файле конфигурации config/missing-page-redirector.php<br/>

## Установлен пакет Spatie sitemap
https://github.com/spatie/laravel-sitemap<br/>
https://www.digitalocean.com/community/questions/how-to-automatically-generate-sitemap-with-laravel<br/>
php artisan sitemap:generate

## README.md markdown:<br/>
https://github.com/OlgaVlasova/markdown-doc/blob/master/README.md<br/>

## Errors fixing:
<strong>Error</strong>: The stream or file "*/storage/logs/laravel.log" could not be opened: failed to open stream: Permission denied<br/>
<strong>Fix</strong>: ``` sudo chmod -R 777 storage ```

## Установлен laravel-debugbar
https://github.com/barryvdh/laravel-debugbar
composer require barryvdh/laravel-debugbar --dev
php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
php artisan config:cache

## Установлен SEO Tools for Laravel
https://github.com/artesaos/seotools

## Добавлена библиотека Bootstrap 4.5 
https://getbootstrap.com/docs/4.5/getting-started/introduction/#starter-template

## Установлен Laravel Localization
https://github.com/mcamara/laravel-localization

## HTML Template
https://startbootstrap.com/themes/grayscale/

## ошибка Allowed memory size
Fatal error: Allowed memory size of 1610612736 bytes exhausted (tried to allocate 67108864 bytes) in phar:///usr/local/bin/composer/src/Composer/DependencyResolver/Solver.php on line 223
```
COMPOSER_MEMORY_LIMIT=-1 composer update 
```