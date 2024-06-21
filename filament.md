You need a fresh laravel app

#### install livewire

```shell
composer require livewire/livewire
```

```shell
php artisan livewire:publish --config
```

#### edit the livewire config file

```shell
'temporary_file_upload' => [
        'disk' => null,        // Example: 'local', 's3'              | Default: 'default'
        'rules'   => 'max:' . env('MAX_FILE_SIZE_KB', 12288),  //max:1000MB
        'directory' => null,   // Example: 'tmp'                      | Default: 'livewire-tmp'
        'middleware' => null,  // Example: 'throttle:5,1'             | Default: 'throttle:60,1'
        'preview_mimes'   => [
            'png', 'gif', 'bmp', 'svg', 'wav', 'mp4',
            'mov', 'avi', 'wmv', 'mp3', 'm4a',
            'jpg', 'jpeg', 'mpga', 'webp', 'wma', 'zip', 'pdf',
        ],
        'max_upload_time' => 5, // Max duration (in minutes) before an upload is invalidated...
    ],
```

#### create starterkid.php config
```shell
<?php

return

[
    'max_file_size_mb'                          => env('MAX_FILE_SIZE_MB',12), //12MB
    'max_file_size_kb'                          => env('MAX_FILE_SIZE_KB',12288), //12MB
];
```

#### install filament (Die letzte version nummer, sonst Fehler wegen Windows)
```shell
composer require filament/filament:"^3.2.92" -W
```

#### install filament spatie media libary (Die letzte version nummer, sonst Fehler wegen Windows)
```shell
composer require filament/spatie-laravel-media-library-plugin:"^3.2.92" -W
```

```shell
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="medialibrary-migrations"
```

```shell
php artisan migrate
```

```shell
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="medialibrary-config"
```

#### Edit Spatie Config File
```shell
'max_file_size' => 1024 * 1024 * env('MAX_FILE_SIZE_MB',12), // 12MB
```

#### Install SFTP
```shell
composer require league/flysystem-sftp-v3
```

#### This is for Complete SFTP
#### SFTP Filesystems
```shell
 'storagebox' => [
            'driver' => 'sftp',
            'root' => '/',
            'host' => 'u338438-sub1.your-storagebox.de',
            'username' => 'u338438-sub1',
            'password' => '7Fw7UVzA6SjrHDej',
            'directory_visibility' => 'public',
            'visibility' => 'public',
            'throw' => false,
        ],
```
#### Create new Model CustomMedia.php
```
<?php

namespace App\Models;

use Spatie\MediaLibrary\MediaCollections\Models\Media as BaseMedia;

class CustomMedia extends BaseMedia
{
    public function getUrl(string $conversionName = ''): string
    {
        return url('storagebox/' . $this->getPath($conversionName));
    }
}
```

#### Edit Spatie Config File for SFTP
```shell
'media_model' => App\Models\CustomMedia::class,
```

#### Wenn jeder Benutzer eine eigene Storagebox hat
#### Add this in app service provider
```
Storage::extend('storagebox', function ($app, $config) {
            $user = auth()->user(); // Beispiel für authentifizierten Benutzer

            // Hole die Zugangsdaten aus der Benutzerdatenbank
            $userStorageConfig = [
                'driver' => 'sftp',
                'root' => '/',
                'host' => $user->storagebox_host,
                'username' => $user->storagebox_username,
                'password' => $user->storagebox_password,
                'directory_visibility' => 'public',
                'visibility' => 'public',
                'throw' => false,
            ];

            return Storage::createSftpDriver($userStorageConfig);
        });
```
#### In config filesytems.php
```
'storagebox' => [
            'driver' => 'storagebox',

        ],

```
