<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/automail.rzn8.com/wp-content/themes/rt_fluent/blueprints/content/archive/meta-tags.yaml',
    'modified' => 1524692590,
    'data' => [
        'name' => 'Tags Meta',
        'description' => 'Options for displaying tags meta',
        'type' => 'archive',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Tags',
                    'description' => 'Display post tags.',
                    'default' => 0
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Tags',
                    'description' => 'Link tags to their tag page.',
                    'default' => 1
                ],
                'prefix' => [
                    'type' => 'input.text',
                    'label' => 'Tags Prefix',
                    'description' => 'Display text directly before the tags list.',
                    'default' => 'Tags:'
                ]
            ]
        ]
    ]
];
