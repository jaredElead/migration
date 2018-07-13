<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/gantry/theme.yaml',
    'modified' => 1524692594,
    'data' => [
        'details' => [
            'name' => 'Fluent',
            'version' => '1.0.4',
            'icon' => 'paper-plane',
            'date' => 'March 29, 2018',
            'author' => [
                'name' => 'RocketTheme, LLC',
                'email' => 'support@rockettheme.com',
                'link' => 'http://www.rockettheme.com'
            ],
            'documentation' => [
                'link' => 'http://docs.gantry.org/gantry5'
            ],
            'support' => [
                'link' => 'https://gitter.im/gantry/gantry5'
            ],
            'updates' => [
                'link' => 'http://updates.rockettheme.com/themes/fluent.yaml'
            ],
            'copyright' => '(C) 2007 - 2018 RocketTheme, LLC. All rights reserved.',
            'license' => 'GPLv2',
            'description' => 'Fluent Theme',
            'images' => [
                'thumbnail' => 'admin/images/preset1.png',
                'preview' => 'admin/images/preset1.png'
            ]
        ],
        'configuration' => [
            'gantry' => [
                'platform' => 'wordpress',
                'engine' => 'nucleus'
            ],
            'theme' => [
                'parent' => 'rt_fluent',
                'base' => 'gantry-theme://common',
                'file' => 'gantry-theme://includes/theme.php',
                'class' => '\\Gantry\\Framework\\Theme',
                'textdomain' => 'g5_fluent'
            ],
            'fonts' => [
                'heebo' => [
                    400 => 'gantry-theme://fonts/heebo/heebo-regular/heebo-regular-webfont',
                    500 => 'gantry-theme://fonts/heebo/heebo-medium/heebo-medium-webfont',
                    700 => 'gantry-theme://fonts/heebo/heebo-bold/heebo-bold-webfont',
                    900 => 'gantry-theme://fonts/heebo/heebo-black/heebo-black-webfont'
                ]
            ],
            'css' => [
                'compiler' => '\\Gantry\\Component\\Stylesheet\\ScssCompiler',
                'target' => 'gantry-theme://css-compiled',
                'paths' => [
                    0 => 'gantry-theme://scss',
                    1 => 'gantry-engine://scss'
                ],
                'files' => [
                    0 => 'fluent',
                    1 => 'fluent-wordpress',
                    2 => 'custom'
                ],
                'persistent' => [
                    0 => 'fluent'
                ],
                'overrides' => [
                    0 => 'fluent-wordpress',
                    1 => 'custom'
                ]
            ],
            'dependencies' => [
                'gantry' => '5.4.*'
            ],
            'block-variations' => [
                'Title Variations' => [
                    'title1' => 'Title 1',
                    'title2' => 'Title 2',
                    'title3' => 'Title 3',
                    'title4' => 'Title 4',
                    'title5' => 'Title 5',
                    'title6' => 'Title 6',
                    'title-grey' => 'Title Grey',
                    'title-pink' => 'Title Pink',
                    'title-red' => 'Title Red',
                    'title-purple' => 'Title Purple',
                    'title-orange' => 'Title Orange',
                    'title-blue' => 'Title Blue',
                    'title-underline' => 'Title Underline',
                    'title-rounded' => 'Title Rounded'
                ],
                'Box Variations' => [
                    'box1' => 'Box 1',
                    'box2' => 'Box 2',
                    'box3' => 'Box 3',
                    'box4' => 'Box 4',
                    'box5' => 'Box 5',
                    'box6' => 'Box 6',
                    'box-white' => 'Box White',
                    'box-grey' => 'Box Grey',
                    'box-pink' => 'Box Pink',
                    'box-red' => 'Box Red',
                    'box-purple' => 'Box Purple',
                    'box-orange' => 'Box Orange',
                    'box-blue' => 'Box Blue'
                ],
                'Effects' => [
                    'spaced' => 'Spaced',
                    'bordered' => 'Bordered',
                    'shadow' => 'Shadow 1',
                    'shadow2' => 'Shadow 2',
                    'rounded' => 'Rounded',
                    'square' => 'Square'
                ],
                'Utility' => [
                    'equal-height' => 'Equal Height',
                    'g-outer-box' => 'Outer Box',
                    'disabled' => 'Disabled',
                    'align-right' => 'Align Right',
                    'align-left' => 'Align Left',
                    'title-center' => 'Centered Title',
                    'center' => 'Center',
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding'
                ]
            ]
        ],
        'chrome' => [
            'gantry' => [
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widgettitle g-title">',
                'after_title' => '</h3>'
            ]
        ],
        'admin' => [
            'styles' => [
                'core' => [
                    0 => 'base',
                    1 => 'accent',
                    2 => 'font'
                ],
                'section' => [
                    0 => 'top',
                    1 => 'navigation',
                    2 => 'header',
                    3 => 'above',
                    4 => 'main',
                    5 => 'showcase',
                    6 => 'slideshow',
                    7 => 'utility',
                    8 => 'feature',
                    9 => 'expanded',
                    10 => 'extension',
                    11 => 'bottom',
                    12 => 'footer',
                    13 => 'copyright',
                    14 => 'offcanvas'
                ],
                'configuration' => [
                    0 => 'breakpoints'
                ]
            ],
            'content' => [
                'general' => [
                    0 => 'wpautop'
                ],
                'blog' => [
                    0 => 'query',
                    1 => 'content',
                    2 => 'heading',
                    3 => 'featured-image',
                    4 => 'title',
                    5 => 'meta-date',
                    6 => 'meta-author',
                    7 => 'meta-comments',
                    8 => 'meta-categories',
                    9 => 'meta-tags',
                    10 => 'read-more'
                ],
                'single' => [
                    0 => 'featured-image',
                    1 => 'title',
                    2 => 'meta-date',
                    3 => 'meta-author',
                    4 => 'meta-comments',
                    5 => 'meta-categories',
                    6 => 'meta-tags'
                ],
                'page' => [
                    0 => 'featured-image',
                    1 => 'title',
                    2 => 'meta-date',
                    3 => 'meta-author'
                ],
                'archive' => [
                    0 => 'content',
                    1 => 'heading',
                    2 => 'featured-image',
                    3 => 'title',
                    4 => 'meta-date',
                    5 => 'meta-author',
                    6 => 'meta-comments',
                    7 => 'meta-categories',
                    8 => 'meta-tags',
                    9 => 'read-more'
                ]
            ]
        ]
    ]
];
