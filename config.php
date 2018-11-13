<?php

return [
    'baseUrl' => 'http://localhost:3000',
    'production' => false,

    'collections' => [
        // the key of the collection is used for layout file _layouts.{collection key}
        'posts' => [
            'content_model' => 'blogPost',  // refers to the id of the content model in Contentful
            'sort' => '-publishDate',
        ],
    ],

    'contentful' => [
        'space_id' => getenv('CONTENTFUL_SPACE_ID'),
        'access_token' => getenv('CONTENTFUL_ACCESS_TOKEN'),
    ],

    /*
     * Helper methods
     */
    'tags' => function ($page) {
        return explode(', ', $page->tag);
    },
];
