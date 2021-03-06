<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/automail.rzn8.com/wp-content/themes/rt_fluent/particles/casestudies.yaml',
    'modified' => 1524692598,
    'data' => [
        'name' => 'Case Studies',
        'description' => 'Display testimonials.',
        'type' => 'particle',
        'icon' => 'fa-address-book',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
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
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'cols' => [
                    'type' => 'select.select',
                    'label' => 'Grid Column',
                    'description' => 'Select the grid column amount',
                    'placeholder' => 'Select...',
                    'default' => '2cols',
                    'options' => [
                        'cols-2' => '2 Columns',
                        'cols-3' => '3 Columns',
                        'cols-4' => '4 Columns',
                        'cols-5' => '5 Columns'
                    ]
                ],
                'cases' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Cases',
                    'description' => 'Create case studies.',
                    'overridable' => false,
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'description' => 'Enter case title'
                        ],
                        '.items' => [
                            'type' => 'collection.list',
                            'array' => true,
                            'label' => 'Items',
                            'description' => 'Create case studies items.',
                            'value' => 'title',
                            'ajax' => true,
                            'fields' => [
                                '.layout' => [
                                    'type' => 'select.select',
                                    'label' => 'Layout',
                                    'description' => 'Select desired layout.',
                                    'placeholder' => 'Select...',
                                    'default' => 'default-top',
                                    'options' => [
                                        'default-top' => 'Default - Top',
                                        'default-bottom' => 'Default - Bottom',
                                        'alt-top' => 'Alternative Top',
                                        'alt-bottom' => 'Alternative Bottom'
                                    ]
                                ],
                                '.variation' => [
                                    'type' => 'select.select',
                                    'label' => 'Variation',
                                    'description' => 'Select desired variation.',
                                    'placeholder' => 'Select...',
                                    'default' => 'dark',
                                    'options' => [
                                        'dark' => 'Dark',
                                        'light' => 'Light'
                                    ]
                                ],
                                '.image' => [
                                    'type' => 'input.imagepicker',
                                    'label' => 'Image',
                                    'description' => 'Select desired image.'
                                ],
                                '.title' => [
                                    'type' => 'input.text',
                                    'label' => 'Title',
                                    'description' => 'Enter case title'
                                ],
                                '.subtitle' => [
                                    'type' => 'input.text',
                                    'label' => 'Subtitle',
                                    'description' => 'Enter case subtitle'
                                ],
                                '.url' => [
                                    'type' => 'input.text',
                                    'label' => 'Url',
                                    'description' => 'Customize case url.'
                                ],
                                '.target' => [
                                    'type' => 'select.select',
                                    'label' => 'Target',
                                    'description' => 'Target browser window when item is clicked.',
                                    'placeholder' => 'Select...',
                                    'default' => '_blank',
                                    'options' => [
                                        '_self' => 'Self',
                                        '_blank' => 'New Window'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
