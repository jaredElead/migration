<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1529511257,
    'checksum' => '24e064187ad665a2510daad9a7c0de97',
    'files' => [
        'wp-content/themes/rt_fluent/custom/config/home' => [
            'assignments' => [
                'file' => 'wp-content/themes/rt_fluent/custom/config/home/assignments.yaml',
                'modified' => 1524692698
            ],
            'index' => [
                'file' => 'wp-content/themes/rt_fluent/custom/config/home/index.yaml',
                'modified' => 1529507645
            ],
            'layout' => [
                'file' => 'wp-content/themes/rt_fluent/custom/config/home/layout.yaml',
                'modified' => 1529507645
            ]
        ]
    ],
    'data' => [
        'assignments' => [
            'context' => [
                0 => [
                    'is_front_page' => true
                ]
            ]
        ],
        'index' => [
            'name' => 'home',
            'timestamp' => 1529507645,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'home_-_particles',
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
                'feature' => 'Feature',
                'showcase' => 'Showcase',
                'expanded' => 'Expanded',
                'extension' => 'Extension',
                'utility' => 'Utility',
                'bottom' => 'Bottom',
                'copyright' => 'Copyright',
                'header' => 'Header',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'simplemenu' => [
                    'simplemenu-1401' => 'Simple Menu'
                ],
                'messages' => [
                    'system-messages-9217' => 'System Messages'
                ],
                'logo' => [
                    'logo-4820' => 'Logo'
                ],
                'menu' => [
                    'menu-8166' => 'Menu'
                ],
                'search' => [
                    'search-1322' => 'Search'
                ],
                'branding' => [
                    'branding-5601' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-5786' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'top' => 'top',
                    'navigation' => 'navigation',
                    'sidebar-top' => 'sidebar-top',
                    'copyright' => 'copyright',
                    'offcanvas' => 'offcanvas',
                    'system-messages-9217' => 'system-messages-9828',
                    'logo-4820' => 'logo-5992',
                    'menu-8166' => 'menu-2350',
                    'search-1322' => 'search-8428',
                    'branding-5601' => 'branding-4688',
                    'mobile-menu-5786' => 'mobile-menu-7951'
                ]
            ]
        ],
        'layout' => [
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
                    0 => [
                        0 => 'simplemenu-1401'
                    ]
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
                        'class' => 'fp-slideshow blurred'
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
                'simplemenu-1401' => [
                    'title' => 'Simple Menu',
                    'attributes' => [
                        'menus' => [
                            0 => [
                                'items' => [
                                    0 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Web Design'
                                    ],
                                    1 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Mobile App Design'
                                    ],
                                    2 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'User Experience Audits'
                                    ],
                                    3 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Product Pages'
                                    ]
                                ],
                                'title' => 'Services'
                            ],
                            1 => [
                                'items' => [
                                    0 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Knowledge Base'
                                    ],
                                    1 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Help Center'
                                    ],
                                    2 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Contact Support'
                                    ],
                                    3 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Ask us a Question'
                                    ]
                                ],
                                'title' => 'Useful'
                            ],
                            2 => [
                                'items' => [
                                    0 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Terms of Use'
                                    ],
                                    1 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Licensing'
                                    ],
                                    2 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Privacy Policy'
                                    ],
                                    3 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Cookies Policy'
                                    ]
                                ],
                                'title' => 'Legal'
                            ],
                            3 => [
                                'items' => [
                                    0 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Google Plus'
                                    ],
                                    1 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'YouTube'
                                    ],
                                    2 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Instagram'
                                    ],
                                    3 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Facebook'
                                    ]
                                ],
                                'title' => 'Social'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
