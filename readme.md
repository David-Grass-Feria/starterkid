## Only for a fresh Laravel with Jetstream installation

# install predis
```shell
composer require predis/predis
```

# install horizon
```shell
composer require laravel/horizon
```
```shell
php artisan horizon:install 
```

# install spatie medialibary
```shell
composer require "spatie/laravel-medialibrary:^11.0.0"
```
```shell
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="medialibrary-migrations"
```

# install spatie backup
```shell
composer require spatie/laravel-backup
```

# install debugbar
```shell
composer require barryvdh/laravel-debugbar --dev
```

```shell
php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
```


# sftp filesystem
```shell
composer require league/flysystem-sftp-v3
```

# add this line in /composer.json
```shell
"grass-feria/starterkid": "dev-main",
```

```code
"repositories": [
        
        {
            "type": "vcs",
            "url": "https://github.com/David-Grass-Feria/starterkid",
            "options": {
                "symlink": true
            }
        }
        
        
    ]
```

# run the command
```shell
composer update
```

# migrate database and publish assets
```shell
php artisan starterkid:install
```

# register locale middleware in kernel web
```shell
\App\Http\Middleware\GetLocaleAdmin::class,
```


# storage link
```shell
php artisan storage:link
```

# scheduler
```shell
php8.2 /home/davidgrassferia/laravel/starterkid/artisan schedule:run
```

# forms
```shell
php8.2 /home/davidgrassferia/laravel/starterkid/artisan schedule:run
```







