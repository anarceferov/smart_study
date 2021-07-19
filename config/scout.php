<?php

return [

    'driver' => env('SCOUT_DRIVER', 'algolia'),

    'prefix' => env('SCOUT_PREFIX', ''),

    'queue' => env('SCOUT_QUEUE', true),

    'after_commit' => true,

    'chunk' => [
        'searchable' => 500,
        'unsearchable' => 500,
    ],

    'soft_delete' => false,

    'identify' => env('SCOUT_IDENTIFY', true),

    'algolia' => [
        'id' => env('ALGOLIA_APP_ID', '2CFOTGYR16'),
        'secret' => env('ALGOLIA_SECRET', 'f29a0c6a911b90c85502e859d77f4e4e'),
    ],

    'meilisearch' => [
        'host' => env('MEILISEARCH_HOST', 'http://localhost:7700'),
        'key' => env('MEILISEARCH_KEY', null),
    ],

];
