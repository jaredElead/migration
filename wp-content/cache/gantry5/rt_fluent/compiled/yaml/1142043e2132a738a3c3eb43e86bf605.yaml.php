<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/particles/search.yaml',
    'modified' => 1524692598,
    'data' => [
        'name' => 'Search',
        'description' => 'Display search icon with link to search page.',
        'type' => 'particle',
        'icon' => 'fa-search',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.'
                ],
                'placeholder' => [
                    'type' => 'input.text',
                    'label' => 'Placeholder',
                    'description' => 'Input your custom placeholder',
                    'placeholder' => 'Your keyword...'
                ]
            ]
        ]
    ]
];
