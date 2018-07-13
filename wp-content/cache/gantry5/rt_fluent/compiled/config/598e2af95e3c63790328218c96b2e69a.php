<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1529519237,
    'checksum' => 'e27386c6c0927ae1083181a19071fc07',
    'files' => [
        'wp-content/themes/rt_fluent/custom/config/web_specials_builder' => [
            'assignments' => [
                'file' => 'wp-content/themes/rt_fluent/custom/config/web_specials_builder/assignments.yaml',
                'modified' => 1529095491
            ],
            'index' => [
                'file' => 'wp-content/themes/rt_fluent/custom/config/web_specials_builder/index.yaml',
                'modified' => 1529507645
            ],
            'layout' => [
                'file' => 'wp-content/themes/rt_fluent/custom/config/web_specials_builder/layout.yaml',
                'modified' => 1529507645
            ]
        ]
    ],
    'data' => [
        'assignments' => [
            'context' => [
                
            ],
            'menu' => [
                
            ],
            'language' => [
                
            ],
            'post' => [
                'page' => [
                    1151 => true
                ]
            ],
            'taxonomy' => [
                
            ],
            'archive' => [
                
            ]
        ],
        'index' => [
            'name' => 'web_specials_builder',
            'timestamp' => 1529507645,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1524692597
            ],
            'positions' => [
                
            ],
            'sections' => [
                'top' => 'Top',
                'navigation' => 'Navigation',
                'slideshow' => 'Slideshow',
                'sidebar-top' => 'Sidebar-top',
                'above' => 'Above',
                'showcase' => 'Showcase',
                'utility' => 'Utility',
                'feature' => 'Feature',
                'expanded' => 'Expanded',
                'extension' => 'Extension',
                'bottom' => 'Bottom',
                'copyright' => 'Copyright',
                'header' => 'Header',
                'sidebar' => 'Sidebar',
                'aside' => 'Aside',
                'mainbar' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'content' => [
                    'system-content-5907' => 'Content'
                ],
                'spacer' => [
                    'spacer-8479' => 'Spacer',
                    'spacer-5199' => 'Spacer'
                ],
                'messages' => [
                    'system-messages-6411' => 'System Messages'
                ],
                'branding' => [
                    'branding-5432' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-7700' => 'Mobile-menu'
                ],
                'logo' => [
                    'logo-8277' => 'Logo'
                ],
                'menu' => [
                    'menu-2720' => 'Menu'
                ],
                'search' => [
                    'search-7983' => 'Search'
                ]
            ],
            'inherit' => [
                'offer_builder' => [
                    'top' => 'top',
                    'slideshow' => 'slideshow',
                    'sidebar-top' => 'sidebar-top',
                    'header' => 'header',
                    'above' => 'above',
                    'showcase' => 'showcase',
                    'utility' => 'utility',
                    'feature' => 'feature',
                    'sidebar' => 'sidebar',
                    'expanded' => 'expanded',
                    'extension' => 'extension',
                    'bottom' => 'bottom',
                    'footer' => 'footer',
                    'copyright' => 'copyright',
                    'offcanvas' => 'offcanvas',
                    'system-messages-6411' => 'system-messages-9828',
                    'spacer-5199' => 'spacer-5486',
                    'branding-5432' => 'branding-4688',
                    'mobile-menu-7700' => 'mobile-menu-7951'
                ],
                'default' => [
                    'navigation' => 'navigation',
                    'logo-8277' => 'logo-5992',
                    'menu-2720' => 'menu-2350',
                    'search-7983' => 'search-8428'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1524692597
            ],
            'layout' => [
                'top' => [
                    
                ],
                '/container-top/' => [
                    0 => [
                        0 => [
                            'navigation 90' => [
                                
                            ],
                            'slideshow' => [
                                
                            ]
                        ],
                        1 => [
                            'sidebar-top 10' => [
                                
                            ]
                        ]
                    ]
                ],
                'header' => [
                    
                ],
                'above' => [
                    
                ],
                'showcase' => [
                    
                ],
                'utility' => [
                    
                ],
                'feature' => [
                    
                ],
                '/container-main/' => [
                    0 => [
                        0 => [
                            'sidebar 5' => [
                                
                            ]
                        ],
                        1 => [
                            'mainbar 70' => [
                                0 => [
                                    0 => 'system-content-5907'
                                ]
                            ]
                        ],
                        2 => [
                            'aside 25' => [
                                0 => [
                                    0 => 'spacer-8479'
                                ]
                            ]
                        ]
                    ]
                ],
                'expanded' => [
                    
                ],
                'extension' => [
                    
                ],
                'bottom' => [
                    
                ],
                'footer' => [
                    
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
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
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
                    'inherit' => [
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'sidebar-top' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
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
                    'inherit' => [
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'above' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'showcase' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'utility' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'sidebar' => [
                    'type' => 'section',
                    'subtype' => 'aside',
                    'inherit' => [
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
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
                    'inherit' => [
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'extension' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'bottom' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'copyright' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'offer_builder',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'system-content-5907' => [
                    'title' => 'Content'
                ]
            ]
        ]
    ]
];
