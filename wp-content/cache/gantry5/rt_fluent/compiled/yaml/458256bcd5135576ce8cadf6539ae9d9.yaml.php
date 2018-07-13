<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/automail.rzn8.com/wp-content/themes/rt_fluent/custom/config/home/layout.yaml',
    'modified' => 1529512346,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'home_-_particles',
            'timestamp' => 1524692597
        ],
        'layout' => [
            'top' => [
                
            ],
            '/container-top/' => [
                0 => [
                    0 => [
                        '/navigation/ 90' => [
                            
                        ],
                        '/slideshow/' => [
                            
                        ]
                    ],
                    1 => [
                        'sidebar-top 10' => [
                            
                        ]
                    ]
                ]
            ],
            '/header/' => [
                
            ],
            '/above/' => [
                
            ],
            '/feature/' => [
                
            ],
            '/showcase/' => [
                0 => [
                    0 => 'logo-2321'
                ]
            ],
            '/expanded/' => [
                
            ],
            '/extension/' => [
                
            ],
            '/utility/' => [
                
            ],
            '/bottom/' => [
                
            ],
            '/footer/' => [
                
            ],
            'copyright' => [
                
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'top' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => 'fp-navigation g-fluid-navigation'
                ],
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children'
                    ]
                ]
            ],
            'slideshow' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => 'fp-slideshow'
                ]
            ],
            'sidebar-top' => [
                'type' => 'section',
                'attributes' => [
                    'class' => 'fp-sidebartop black'
                ],
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'block',
                        1 => 'children'
                    ]
                ]
            ],
            'container-top' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'extra' => [
                        
                    ]
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => 'fp-header'
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'fp-above'
                ]
            ],
            'feature' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'fp-feature section-horizontal-paddings'
                ]
            ],
            'showcase' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'fp-showcase'
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'fp-expanded'
                ]
            ],
            'extension' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'fp-extension'
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-vertical-paddings'
                ]
            ],
            'bottom' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'fp-bottom section-horizontal-paddings section-vertical-paddings-small'
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings section-vertical-paddings fp-footer'
                ]
            ],
            'copyright' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ]
        ],
        'content' => [
            'logo-2321' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'image' => 'gantry-media://2018/06/Banner1.jpg'
                ]
            ]
        ]
    ]
];
