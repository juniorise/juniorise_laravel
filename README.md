## Run this project a project
1. and execute `composer install`
2. then run project `php artisan serve`

if there is any problem then delete "/vendor" folder, and run above command again.

## Run migration
```
heroku run php artisan migrate
```

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
