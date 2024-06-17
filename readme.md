## Only for a fresh Laravel with Jetstream installation
# env
```shell
APP_NAME=Sharepusher
APP_ENV=dev
APP_KEY=base64:xwwqWFIgS8+64gEeo3UJT8v9d62CopTzrU2FzhPneUM=
APP_DEBUG=true
APP_URL=http://localhost:8000
DEBUGBAR_ENABLED=true

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sharepusher
DB_USERNAME=root
DB_PASSWORD=

QUEUE_CONNECTION=sync
REDIS_CLIENT=predis
CACHE_STORE=file

MAIL_MAILER=smtp
MAIL_HOST=mail.your-server.de
MAIL_PORT=465
MAIL_USERNAME="admin@teamspusher.com"
MAIL_PASSWORD="4WiH3RGeVC52GXHXPuJZ"
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS="admin@teamspusher.com"
MAIL_FROM_NAME="${APP_NAME}"

MAX_FILE_SIZE_KB=300000 #300MB
MAX_FILE_SIZE_MB=300 #300MB
```
# install predis
```shell
composer require predis/predis
```

# install horizon
```shell
composer require laravel/horizon --ignore-platform-reqs
```
```shell
php artisan horizon:install 
```

# install spatie medialibary
```shell
composer require "spatie/laravel-medialibrary" --ignore-platform-reqs
```
```shell
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="medialibrary-migrations"
```

# install spatie backup
```shell
composer require spatie/laravel-backup --ignore-platform-reqs
```

# install debugbar
```shell
composer require barryvdh/laravel-debugbar --dev --ignore-platform-reqs
```

```shell
php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
```


# sftp filesystem
```shell
composer require league/flysystem-sftp-v3 --ignore-platform-reqs
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

# dotenv for tailwind
```shell
npm install dotenv --save-dev
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







