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

    'image_conversions' => [
        'thumb' => [
            'width'         => env('IMAGE_CONVERSIONS_THUMB_WIDTH',200),
            'sharpen'       => env('IMAGE_CONVERSIONS_THUMB_SHARPEN',10),
            'quality'       => env('IMAGE_CONVERSIONS_THUMB_WIDTH',80),
        ],
        'medium' => [
            'width'         => env('IMAGE_CONVERSIONS_MEDIUM_WIDTH',400),
            'sharpen'       => env('IMAGE_CONVERSIONS_MEDIUM_SHARPEN',10),
            'quality'       => env('IMAGE_CONVERSIONS_MEDIUM_WIDTH',80),
        ],
        'large' => [
            'width'         => env('IMAGE_CONVERSIONS_LARGE_WIDTH',700),
            'sharpen'       => env('IMAGE_CONVERSIONS_LARGE_SHARPEN',10),
            'quality'       => env('IMAGE_CONVERSIONS_LARGE_WIDTH',80),
        ],    
    ],

    'image_width_height_attributes'    => [
        'width'             => env('IMAGE_WIDTH_HEIGHT_ATTRIBUTES_WIDTH',700),
        'height'            => env('IMAGE_WIDTH_HEIGHT_ATTRIBUTES_HEIGHT',500),
    ],

    

    

];
