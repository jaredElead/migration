<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/automail.rzn8.com/wp-content/themes/rt_fluent/custom/config/offer_builder/layout.yaml',
    'modified' => 1530049864,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1524692597
        ],
        'layout' => [
            '/top/' => [
                0 => [
                    0 => 'system-messages-9828'
                ]
            ],
            '/container-top/' => [
                0 => [
                    0 => [
                        'navigation 90' => [
                            
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
            '/showcase/' => [
                
            ],
            '/utility/' => [
                
            ],
            '/feature/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'sidebar 5' => [
                            0 => [
                                0 => 'spacer-5486'
                            ]
                        ]
                    ],
                    1 => [
                        'mainbar 55' => [
                            0 => [
                                0 => 'system-content-1120'
                            ]
                        ]
                    ],
                    2 => [
                        'aside 40' => [
                            0 => [
                                0 => 'tabs-7226'
                            ]
                        ]
                    ]
                ]
            ],
            '/expanded/' => [
                
            ],
            '/extension/' => [
                
            ],
            '/bottom/' => [
                
            ],
            '/footer/' => [
                
            ],
            '/copyright/' => [
                0 => [
                    0 => 'branding-4688'
                ]
            ],
            'offcanvas' => [
                0 => [
                    0 => 'mobile-menu-7951'
                ]
            ]
        ],
        'structure' => [
            'top' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'g-default-top section-horizontal-paddings'
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'slideshow' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => 'g-default-slideshow section-horizontal-paddings'
                ]
            ],
            'sidebar-top' => [
                'type' => 'section',
                'attributes' => [
                    'class' => 'blurred'
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
                    'class' => 'g-default-header section-horizontal-paddings section-vertical-paddings-small'
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'g-default-above'
                ]
            ],
            'showcase' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'g-default-showcase section-horizontal-paddings section-vertical-paddings'
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'g-default-utility section-horizontal-paddings section-vertical-paddings'
                ]
            ],
            'feature' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'g-default-feature section-horizontal-paddings section-vertical-paddings'
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'attributes' => [
                    'class' => ''
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main',
                'title' => 'Main',
                'attributes' => [
                    'class' => ''
                ]
            ],
            'aside' => [
                'attributes' => [
                    'class' => ''
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => 'g-default-main',
                    'extra' => [
                        
                    ]
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'g-default-expanded'
                ]
            ],
            'extension' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'g-default-extension'
                ]
            ],
            'bottom' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'g-default-bottom section-horizontal-paddings section-vertical-paddings'
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings section-vertical-paddings'
                ]
            ],
            'copyright' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings'
                ]
            ],
            'offcanvas' => [
                'attributes' => [
                    'swipe' => '0'
                ]
            ]
        ],
        'content' => [
            'tabs-7226' => [
                'attributes' => [
                    'mainheading' => '',
                    'layout' => 'top',
                    'justify' => 'no',
                    'items' => [
                        0 => [
                            'icon' => '',
                            'title' => 'Sales',
                            'description' => '[list_offers type="sales"]',
                            'class' => 'sales',
                            'name' => 'Sales'
                        ],
                        1 => [
                            'icon' => '',
                            'title' => 'Service',
                            'description' => '[list_offers type="service"]',
                            'class' => 'service',
                            'name' => 'Service'
                        ]
                    ]
                ]
            ],
            'branding-4688' => [
                'attributes' => [
                    'content' => '&copy; 2018 by <a href="http://www.eleadcrm.com/" title="Elead CRM" class="g-powered-by">Elead CRM</a>. All rights reserved.'
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ]
        ]
    ]
];
