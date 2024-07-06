<?php

return [
    'baseUrl' => 'https://your-awesome-blog.com',
    'production' => true,

    // Collections
    'collections' => [
        'posts' => [
            'filter' => function ($item) {
                return $item->published;
            },
        ],
        'categories' => [
            //
        ],
    ],
];
