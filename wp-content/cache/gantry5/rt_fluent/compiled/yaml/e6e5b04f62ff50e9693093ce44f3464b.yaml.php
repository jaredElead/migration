<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/automail.rzn8.com/wp-content/themes/rt_fluent/blueprints/content/single/meta-categories.yaml',
    'modified' => 1524692591,
    'data' => [
        'name' => 'Categories Meta',
        'description' => 'Options for displaying categories meta',
        'type' => 'single',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Categories',
                    'description' => 'Display categories that the post has been assigned to.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Categories',
                    'description' => 'Link categories to their category page.',
                    'default' => 1
                ],
                'prefix' => [
                    'type' => 'input.text',
                    'label' => 'Categories Prefix',
                    'description' => 'Display text directly before the category name.',
                    'default' => 'Categories:'
                ]
            ]
        ]
    ]
];
