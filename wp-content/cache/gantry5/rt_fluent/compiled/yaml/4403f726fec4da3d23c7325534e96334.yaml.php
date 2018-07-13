<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/automail.rzn8.com/wp-content/themes/rt_fluent/particles/testimonialslider.yaml',
    'modified' => 1524692598,
    'data' => [
        'name' => 'Testimonial Slider',
        'description' => 'Vertical scrolling testimonials',
        'type' => 'particle',
        'icon' => 'fa-users',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particles.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'extra' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'Tag Attributes',
                    'description' => 'Extra Tag attributes.',
                    'key_placeholder' => 'Key (data-*, style, ...)',
                    'value_placeholder' => 'Value',
                    'exclude' => [
                        0 => 'id',
                        1 => 'class'
                    ]
                ],
                'fixedheight' => [
                    'type' => 'input.number',
                    'label' => 'Fixed Height',
                    'description' => 'Enter custom height in pixels for slider (enables scrolling)'
                ],
                'speed' => [
                    'type' => 'input.number',
                    'label' => 'Speed',
                    'description' => 'Scrolling speed - higher is faster.'
                ],
                'matchheight' => [
                    'type' => 'select.select',
                    'label' => 'Match Height',
                    'description' => 'Auto adjusts height to match particles .g-block height. This overrides the Fixed Height value.',
                    'placeholder' => 'Select...',
                    'options' => [
                        'enabled' => 'Enabled',
                        'disabled' => 'Disabled'
                    ]
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Testimonials',
                    'description' => 'Create each testimonial to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.avatar' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Avatar',
                            'description' => 'Select desired avatar.'
                        ],
                        '.author' => [
                            'type' => 'input.text',
                            'label' => 'Author',
                            'description' => 'Customize the Author.'
                        ],
                        '.authortitle' => [
                            'type' => 'input.text',
                            'label' => 'Author Title',
                            'description' => 'Customize the Author title.'
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description',
                            'description' => 'Customize the description.'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
