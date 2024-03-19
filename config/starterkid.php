<?php

return [
    'global_admin'                              => 'superadmin',             
    'max_file_size_mb'                          => env('MAX_FILE_SIZE_MB',12), //12MB
    'search_on_dashboard'                       => env('SEARCH_ON_DASHBOARD', false),
    'enable_notifications'                      => env('ENABLE_NOTIFICATIONS', false),
    'temp_folder'                               => env('TEMP_FOLDER', 'temp'),
    'primary_color'                             => env('PRIMARY_COLOR', '#F9322C'),
    'secondary_color'                           => env('SECONDARY_COLOR', '#ffffff'),
    'font_color'                                => env('FONT_COLOR', '#2e2e2e'),
    'font_color_on_dark_background'             => env('FONT_COLOR_ON_DARK_BACKGROUND', '#ffffff'),
    'font_familiy'                              => env('FONT_FAMILIY', 'Open Sans'),
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

    'spatie_conversions' => [
        'small' => [
            'name'  => 'thumb',
            'size'  => 100,

        ],

        'medium'  => [
            'name' => 'medium',
            'size' => 600,
        ],

        'large'   => [
            'name' => 'large',
            'size' => 1000,
        ],
    ],

    

];
