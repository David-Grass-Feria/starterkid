## Only for a fresh Laravel with Jetstream installation

# install predis
```shell
composer require predis/predis
```

# install telescope
```shell
composer require laravel/telescope
```
```shell
php artisan telescope:install
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

# publish all assets
```shell
php artisan vendor:publish --provider="GrassFeria\Starterkid\Providers\AppServiceProvider" --force
```

# migrate database
```shell
php artisan starterkid:install
```

# storage link
```shell
php artisan storage:link
```

# scheduler
```shell
php8.2 /home/davidgrassferia/laravel/starterkid/artisan schedule:run
```







