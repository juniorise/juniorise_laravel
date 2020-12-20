## Create a project
```
$ composer create-project laravel/laravel --prefer-dist juniorise
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
## Install Font Awesome
```
$ npm i --save @fortawesome/fontawesome-free
```
And import font awesome scss in app.scss or your custom scss file
```
@import '~@fortawesome/fontawesome-free/scss/brands';
@import '~@fortawesome/fontawesome-free/scss/regular';
@import '~@fortawesome/fontawesome-free/scss/solid';
@import '~@fortawesome/fontawesome-free/scss/fontawesome';
```
Compile your assets npm run dev or npm run production and include your compiled css into layout


