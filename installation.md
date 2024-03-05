## Only for a fresh Laravel with Jetstream installation

# install predis
composer require predis/predis

# install telescope
composer require laravel/telescope
php artisan telescope:install

# install spatie medialibary
composer require "spatie/laravel-medialibrary:^11.0.0"
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="medialibrary-migrations"

# install spatie backup
composer require spatie/laravel-backup

# install debugbar
composer require barryvdh/laravel-debugbar --dev

# sftp filesystem
composer require league/flysystem-sftp-v3

# add this line in /composer.json/autoload/psr-4
"Modules\\": "Modules/",
"Plugins\\": "Plugins/"

# run the command
composer dump-autoload

# add the provider in /config/app.php
GrassFeria\Starterkid\Providers\AppServiceProvider::class,
GrassFeria\StarterkidSetting\Providers\AppServiceProvider::class,
GrassFeria\StarterkidUser\Providers\AppServiceProvider::class,
GrassFeria\StarterkidDashboard\Providers\AppServiceProvider::class,


# publish all assets
php artisan vendor:publish --provider="GrassFeria\Starterkid\Providers\AppServiceProvider" --force

# migrate database
php artisan migrate:fresh


# generate app key
php artisan key:generate

# storage link
php artisan storage:link


# scheduler
php8.2 /home/davidgrassferia/laravel/starterkid/artisan schedule:run






