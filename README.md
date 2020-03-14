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

## URL to admin panell:<br/>
http://localhost/laravel/public/admin<br/>
email: admin@admin.com<br/>
password: password<br/>

## Voyager admin docs:<br/>
https://voyager-docs.devdojo.com/<br/>

## README.md markdown:<br/>
https://github.com/OlgaVlasova/markdown-doc/blob/master/README.md<br/>

## Errors fixing:
<strong>Error</strong>: The stream or file "*/storage/logs/laravel.log" could not be opened: failed to open stream: Permission denied<br/>
<strong>Fix</strong>: sudo chmod -R 7777 storage
