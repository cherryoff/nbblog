
# Laravel NBBlog

Simple blog for Laravel

- **Author:** Nick Wishnyakov
- **Version:** 0.1.0

## Composer

To install Nbblog as a Composer package to be used with Laravel 4, simply add this to your composer.json:

```json
"cherryoff/nbblog": "dev-master"
```

..and run `composer update`.

## Install

Once it's installed, you can register the service provider in `app/config/app.php` in the `providers` array:

```php
'providers' => array(
    'Cherryoff\Nbblog\NbblogServiceProvider',
)
```

Then publish the config file with `php artisan config:publish cherryoff/nbblog`. This will add the file `app/config/packages/cherryoff/nbblog/config.php`.

Migrate `php artisan migrate --package="cherryoff/nbblog"`

You can add `'NbblogSeeder' => 'Cherryoff\Nbblog\NbblogSeeder',` in `app/config/app.php` in the `aliases` array

And seed `php artisan db:seed --class="NbblogSeeder"`, for add initial data

Then finally you need to publish the package's assets with the `php artisan asset:publish cherryoff/nbblog` command
