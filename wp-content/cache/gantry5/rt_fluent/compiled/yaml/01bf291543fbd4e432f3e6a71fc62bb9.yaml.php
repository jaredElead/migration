<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/automail.rzn8.com/wp-content/themes/rt_fluent/blueprints/styles/menustyle.yaml',
    'modified' => 1524692592,
    'data' => [
        'name' => 'Menu Styles',
        'description' => 'Set menu style options.',
        'type' => 'core',
        'form' => [
            'fields' => [
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_toplevel' => [
                            'label' => 'Top Level',
                            'fields' => [
                                'text-color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Text',
                                    'default' => '#1f2126'
                                ],
                                'text-color-alt' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Text Alt',
                                    'default' => '#3b83db'
                                ],
                                'text-color-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover & Active Text',
                                    'default' => '#3b83db'
                                ],
                                'background-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Active Background',
                                    'default' => 'rgba(255,255,255, 0)'
                                ]
                            ]
                        ],
                        '_tab_sublevel' => [
                            'label' => 'Sub Level',
                            'fields' => [
                                'sublevel-text-color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Text',
                                    'default' => '#ffffff'
                                ],
                                'sublevel-text-color-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover & Active Text',
                                    'default' => '#ffffff'
                                ],
                                'sublevel-background' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Background',
                                    'default' => 'rgba(175, 185, 205, 0.85)'
                                ],
                                'sublevel-background-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover & Active Bg',
                                    'default' => '#ffffff'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
