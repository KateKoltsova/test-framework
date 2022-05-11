<?php

return [
    'app_name' => 'Test framework',
    'components' => [
        'router' => [
            'factory' => \Koltsova\Router\RouterFactory::class,
        ],
        'cache' => [
            'factory' => \Aigletter\Framework\Components\Caching\CacheFactory::class,
            'arguments' => [
                'filename' => __DIR__ . '/../data/cache/cache.json'
            ]
        ],
        'test' => [
            'factory' => \Aigletter\App\Components\Test\TestFactory::class,
        ]
    ]
];