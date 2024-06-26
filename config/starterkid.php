<?php

return [
    'global_admin'                              => 'superadmin',
    'backup_mail_address'                       => env('BACKUP_MAIL_ADDRESS',''),
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

    'image_conversions' => [
        'thumb' => [
            'width'         => env('IMAGE_CONVERSIONS_THUMB_WIDTH',200),
            'sharpen'       => env('IMAGE_CONVERSIONS_THUMB_SHARPEN',10),
            'quality'       => env('IMAGE_CONVERSIONS_THUMB_QUALITY',80),
        ],
        'medium' => [
            'width'         => env('IMAGE_CONVERSIONS_MEDIUM_WIDTH',500),
            'sharpen'       => env('IMAGE_CONVERSIONS_MEDIUM_SHARPEN',10),
            'quality'       => env('IMAGE_CONVERSIONS_MEDIUM_QUALITY',80),
        ],
        'large' => [
            'width'         => env('IMAGE_CONVERSIONS_LARGE_WIDTH',700),
            'sharpen'       => env('IMAGE_CONVERSIONS_LARGE_SHARPEN',10),
            'quality'       => env('IMAGE_CONVERSIONS_LARGE_QUALITY',80),
        ],    
    ],

    'image_width_height_attributes'    => [
        
        'medium'            => [
            'width'             => env('IMAGE_WIDTH_HEIGHT_ATTRIBUTES_MEDIUM.WIDTH',500),
            'height'            => env('IMAGE_WIDTH_HEIGHT_ATTRIBUTES_MEDIUM.HEIGHT',300),
        ],
        
        'large'            => [
            'width'             => env('IMAGE_WIDTH_HEIGHT_ATTRIBUTES_LARGE.WIDTH',700),
            'height'            => env('IMAGE_WIDTH_HEIGHT_ATTRIBUTES_LARGE.HEIGHT',300),
        ]
        
    ],

    

    

];
