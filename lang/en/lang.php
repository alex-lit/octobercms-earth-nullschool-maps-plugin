<?php

return [
    'plugin'                    => [
            'name'              => 'Hyper Comments',
            'description'       => 'Tailored comment system for your site'
    ],
    'stream'                    => [
        'name'                  => 'Comments widget',
        'description'           => 'Display HyperComments widget',
        'widgetId'              => [
            'title'             => 'Your widget ID',
            'description'       => 'You can get your widget code when you are registering in HyperComments or you can take it in the admin panel "Settings"-"Main"',
            'validationMessage' => 'ID must be a number!'
        ]
    ],
    'mixstream'                 => [
        'name'                  => 'Mini-widgets',
        'description'           => 'Recent comments and most commented pages',
        'widgetId'              => [
            'title'             => 'Your widget ID',
            'description'       => 'You can get your widget code when you are registering in HyperComments or you can take it in the admin panel "Settings"-"Main"',
            'validationMessage' => 'ID must be a number!'
        ],
        'type'                  => [
            'title'             => 'Modification of the widget',
            'options'           => [
                'last'          => 'Recent comments',
                'popular'       => 'Popular articles'
            ],
            'description'       => 'Allows to set modification of the widget "Recent comments" - widget of last comments, "Popular articles" - widget of popular articles'
        ],
        'limit'                 => [
            'title'             => 'Count',
            'description'       => 'Allows to set the number of comments or articles to be displayed in the widget (1-100)',
            'placeholder'       => 'Count',
            'validationMessage' => 'Count must be a number!'
        ],
        'combine'               => [
            'title'             => 'Combined',
            'description'       => 'Display last comments and popular pages in widget tabs'
        ]
    ]
];

?>
