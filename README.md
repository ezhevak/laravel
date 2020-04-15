## Basic template for site:<br/>
https://myhtml.pro/imperial-besplatnyj-odnostranichnyj-bootstrap-shablon/


## Install application:<br/>
- composer install
- npm install
- cp .env.example .env (Please edit your .env file. Add db connection and APP_URL)
- php artisan key:gen
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
<strong>Fix</strong>: sudo chmod -R 777 storage
