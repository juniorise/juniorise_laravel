## Run this start a project
1. and execute `composer install`
2. and `composer require doctrine/dbal`
3. then run project `php artisan serve`

if there is any problem then delete "/vendor" folder, and run above command again.

## Run migration
Local: 
1. Normal: `php artisan migrate`
2. Reset database: `php artisan migrate:fresh`

Host: `heroku run php artisan migrate`

## Install Bootstrap
```
$ composer require laravel/ui
$ php artisan ui bootstrap
```
Finally, you need to install the bootstrap package and its dependencies from npm and compile the assets using the following commands:
```
$ npm install
$ npm run dev
```
