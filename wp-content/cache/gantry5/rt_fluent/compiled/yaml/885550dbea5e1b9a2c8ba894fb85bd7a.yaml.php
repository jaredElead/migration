<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/blueprints/content/single/featured-image.yaml',
    'modified' => 1524692591,
    'data' => [
        'name' => 'Featured Image',
        'description' => 'Options for displaying featured image',
        'type' => 'single',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Display featured image on the single post page.',
                    'default' => 1
                ],
                'width' => [
                    'type' => 'input.text',
                    'label' => 'Image Width',
                    'description' => 'Image width in pixels.',
                    'default' => ''
                ],
                'height' => [
                    'type' => 'input.text',
                    'label' => 'Image Height',
                    'description' => 'Image height in pixels.',
                    'default' => ''
                ],
                'position' => [
                    'type' => 'select.select',
                    'label' => 'Image Position',
                    'description' => 'Choose if the image should be aligned to left, right or none.',
                    'default' => 'none',
                    'options' => [
                        'left' => 'Left',
                        'right' => 'Right',
                        'none' => 'None'
                    ]
                ]
            ]
        ]
    ]
];
