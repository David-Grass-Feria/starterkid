<?php

return [
    'global_admin'                              => 'superadmin',             
    'max_file_size_mb'                          => env('MAX_FILE_SIZE_MB',12), //12MB
    'search_on_dashboard'                       => env('SEARCH_ON_DASHBOARD', false),
    'enable_notifications'                      => env('ENABLE_NOTIFICATIONS', false),
    'temp_folder'                               => env('TEMP_FOLDER', 'temp'),
    'font_familiy'                              => env('FONT_FAMILIY', 'Nunito'),
    'time_format'                               => [

        'time_format'                           => 'H:i',
        'time_format_for_picker'                => 'H:i',
        'date_time_format'                      => 'd.m.y H:i',
        'date_time_format_for_picker'           => 'Y-m-d\TH:i',
        'date_format'                           => 'd.m.Y',
        'date_format_for_picker'                => 'Y-m-d',

    ],

    'locales' => [
        'en',
        'de'
    ],

    

    

];
