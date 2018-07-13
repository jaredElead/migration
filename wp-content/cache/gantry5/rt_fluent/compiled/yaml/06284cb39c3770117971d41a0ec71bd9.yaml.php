<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/automail.rzn8.com/wp-content/themes/rt_fluent/particles/verticalslider.yaml',
    'modified' => 1524692598,
    'data' => [
        'name' => 'Vertical Slider',
        'description' => 'Background slider with thumbs',
        'type' => 'particle',
        'icon' => 'fa-image',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_settings' => [
                            'label' => 'Settings',
                            'overridable' => false,
                            'fields' => [
                                'source' => [
                                    'type' => 'select.select',
                                    'label' => 'Content Source',
                                    'description' => 'Choose if the content should be loaded from the WordPress posts or particle itself.',
                                    'default' => 'particle',
                                    'options' => [
                                        'particle' => 'Particle',
                                        'wordpress' => 'WordPress'
                                    ]
                                ],
                                'presets' => [
                                    'type' => 'select.select',
                                    'label' => 'Presets Sync',
                                    'description' => 'Enable or disable presets synchronization (Demo only).',
                                    'default' => 'disabled',
                                    'options' => [
                                        'enabled' => 'Enabled',
                                        'disabled' => 'Disabled'
                                    ]
                                ],
                                'speed' => [
                                    'type' => 'input.number',
                                    'label' => 'Speed',
                                    'description' => 'Transition duration (in ms).',
                                    'default' => 400
                                ],
                                'auto' => [
                                    'type' => 'select.select',
                                    'label' => 'Autoplay',
                                    'description' => 'If enabled, the Slider will automatically start to play.',
                                    'default' => 'disabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'pause' => [
                                    'type' => 'input.number',
                                    'label' => 'Pause Duration',
                                    'description' => 'The time (in ms) between each auto transition.',
                                    'default' => 2000,
                                    'min' => 0
                                ],
                                'loop' => [
                                    'type' => 'select.select',
                                    'label' => 'Loop',
                                    'description' => 'Enable or disable looping of the slides.',
                                    'default' => 'disabled',
                                    'options' => [
                                        'enabled' => 'Enabled',
                                        'disabled' => 'Disabled'
                                    ]
                                ],
                                'controls' => [
                                    'type' => 'select.select',
                                    'label' => 'Controls',
                                    'description' => 'If disabled, prev/next buttons will not be displayed.',
                                    'default' => 'enabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'pager' => [
                                    'type' => 'select.select',
                                    'label' => 'Pager',
                                    'description' => 'Enable pager option',
                                    'default' => 'enabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'height' => [
                                    'type' => 'input.number',
                                    'label' => 'Height',
                                    'description' => 'Slider height in px.',
                                    'default' => 580
                                ],
                                'mobileheight' => [
                                    'type' => 'input.number',
                                    'label' => 'Mobile Height',
                                    'description' => 'Slider height in px for mobile view.',
                                    'default' => 380
                                ]
                            ]
                        ],
                        '_tab_collection' => [
                            'label' => 'Particle Items',
                            'overridable' => false,
                            'fields' => [
                                'items' => [
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Images',
                                    'description' => 'Create slideshow items.',
                                    'value' => 'title',
                                    'ajax' => true,
                                    'fields' => [
                                        '.image' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Image',
                                            'description' => 'Select image for slideshow',
                                            'placeholder' => 'Pick an image'
                                        ],
                                        '.small_title' => [
                                            'type' => 'input.text',
                                            'label' => 'Small Title',
                                            'description' => 'Customize the small Title.',
                                            'placeholder' => 'Enter the item Title'
                                        ],
                                        '.title' => [
                                            'type' => 'input.text',
                                            'label' => 'Title',
                                            'description' => 'Customize the Title.',
                                            'placeholder' => 'Enter the item Title'
                                        ],
                                        '.desc' => [
                                            'type' => 'textarea.textarea',
                                            'label' => 'Description',
                                            'description' => 'Customize the description.',
                                            'placeholder' => 'Enter short description'
                                        ],
                                        '.buttontext' => [
                                            'type' => 'input.text',
                                            'label' => 'Button Label',
                                            'description' => 'Specify the button label.'
                                        ],
                                        '.buttonlink' => [
                                            'type' => 'input.text',
                                            'label' => 'Button Link',
                                            'description' => 'Specify the button link.'
                                        ],
                                        '.buttontarget' => [
                                            'type' => 'select.selectize',
                                            'label' => 'Target',
                                            'description' => 'Target browser window when item is clicked.',
                                            'placeholder' => 'Select...',
                                            'default' => '_self',
                                            'options' => [
                                                '_self' => 'Self',
                                                '_blank' => 'New Window'
                                            ]
                                        ],
                                        '.buttonclass' => [
                                            'type' => 'input.selectize',
                                            'label' => 'Button Classes',
                                            'description' => 'CSS class names for the button.'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        '_tab_posts' => [
                            'label' => 'Posts',
                            'fields' => [
                                'post.filter.categories' => [
                                    'type' => 'wordpress.categories',
                                    'label' => 'Categories',
                                    'description' => 'Select the categories the posts should be taken from.',
                                    'overridable' => false
                                ],
                                'post.filter.posts' => [
                                    'type' => 'input.text',
                                    'label' => 'Posts',
                                    'description' => 'Enter the WordPress posts that should be shown. It should be a list of post IDs separated with a comma (i.e. 1,2,3,4,5).',
                                    'overridable' => false
                                ],
                                'post.filter.sticky' => [
                                    'type' => 'select.select',
                                    'label' => 'Sticky Posts',
                                    'description' => 'Shows sticky posts at the top of other posts.',
                                    'default' => '',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ],
                                    'overridable' => false
                                ],
                                'post.limit.total' => [
                                    'type' => 'input.text',
                                    'label' => 'Number of Posts',
                                    'description' => 'Enter the maximum number of posts to display.',
                                    'default' => 5,
                                    'pattern' => '-?\\d{1,2}',
                                    'overridable' => false
                                ],
                                'post.limit.start' => [
                                    'type' => 'input.text',
                                    'label' => 'Start From',
                                    'description' => 'Enter offset specifying the first post to return. The default is \'0\' (the first post).',
                                    'default' => 0,
                                    'pattern' => '\\d{1,2}',
                                    'overridable' => false
                                ],
                                'post.sort.orderby' => [
                                    'type' => 'select.select',
                                    'label' => 'Order By',
                                    'description' => 'Select how the posts should be ordered by.',
                                    'default' => 'date',
                                    'options' => [
                                        'date' => 'Published Date',
                                        'modified' => 'Last Modified Date',
                                        'name' => 'Post Name (Slug)',
                                        'title' => 'Title',
                                        'author' => 'Author',
                                        'comment_count' => 'Comment Count',
                                        'type' => 'Post Type',
                                        'ID' => 'ID',
                                        'parent' => 'Parent ID',
                                        'rand' => 'Random',
                                        'none' => 'None'
                                    ],
                                    'overridable' => false
                                ],
                                'post.sort.ordering' => [
                                    'type' => 'select.select',
                                    'label' => 'Ordering Direction',
                                    'description' => 'Select the direction the posts should be ordered by.',
                                    'default' => 'DESC',
                                    'options' => [
                                        'ASC' => 'Ascending',
                                        'DESC' => 'Descending'
                                    ],
                                    'overridable' => false
                                ]
                            ]
                        ],
                        '_tab_display' => [
                            'label' => 'Posts Display',
                            'overridable' => false,
                            'fields' => [
                                'post.display.image.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Image',
                                    'description' => 'Select if the featured image of the post should be shown.',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'post.display.text.type' => [
                                    'type' => 'select.select',
                                    'label' => 'Content Type',
                                    'description' => 'Choose if you want to display posts content or excerpt.',
                                    'options' => [
                                        'content' => 'Content',
                                        'excerpt' => 'Excerpt',
                                        '' => 'Hide'
                                    ]
                                ],
                                'post.display.text.limit' => [
                                    'type' => 'input.text',
                                    'label' => 'Content Limit',
                                    'description' => 'Type in the number of characters the post content/excerpt should be limited to.',
                                    'pattern' => '\\d+'
                                ],
                                'post.display.text.formatting' => [
                                    'type' => 'select.select',
                                    'label' => 'Content Formatting',
                                    'description' => 'Select the formatting you want to use to display the post content.',
                                    'options' => [
                                        'text' => 'Plain Text',
                                        'html' => 'HTML'
                                    ]
                                ],
                                'post.display.title.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Title',
                                    'description' => 'Select if the post title should be shown.',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'post.display.title.limit' => [
                                    'type' => 'input.text',
                                    'label' => 'Title Limit',
                                    'description' => 'Enter the maximum number of characters the post title should be limited to.',
                                    'pattern' => '\\d+(\\.\\d+){0,1}'
                                ],
                                'post.display.read_more.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Read More',
                                    'description' => 'Select if the post \'Read More\' button should be shown.',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'post.display.read_more.label' => [
                                    'type' => 'input.text',
                                    'label' => 'Read More Label',
                                    'description' => 'Type in the label for the \'Read More\' button.',
                                    'placeholder' => 'Read More...'
                                ],
                                'post.display.read_more.css' => [
                                    'type' => 'input.selectize',
                                    'label' => 'Button CSS Classes',
                                    'description' => 'CSS class name for the \'Read More\' button.'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
