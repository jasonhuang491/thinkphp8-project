<?php
// config/cache.php
return [
    // 默认缓存驱动
    'default' => env('CACHE_DRIVER', 'file'),

    'stores'  => [
        'file' => [
            'type'       => 'File',
            'path'       => runtime_path('cache'),
            'prefix'     => '',
            'expire'     => 0,
        ],

        // 如果以后想用 redis，可以在这里添加
        // 'redis' => [
        //     'type'   => 'redis',
        //     'host'   => '127.0.0.1',
        //     'port'   => 6379,
        // ],
    ],
];