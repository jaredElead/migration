<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/blueprints/styles/showcase.yaml',
    'modified' => 1524692592,
    'data' => [
        'name' => 'Showcase Styles',
        'description' => 'Showcase styles for the Fluent theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#1f2126'
                ]
            ]
        ]
    ]
];
