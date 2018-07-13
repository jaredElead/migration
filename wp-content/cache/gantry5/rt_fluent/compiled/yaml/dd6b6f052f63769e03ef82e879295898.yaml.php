<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/particles/newsslider.yaml',
    'modified' => 1524692598,
    'data' => [
        'name' => 'News Slider',
        'description' => 'Background slider with thumbs',
        'type' => 'particle',
        'icon' => 'fa-newspaper-o',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particles.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_settings' => [
                            'label' => 'Settings',
                            'overridable' => false,
                            'fields' => [
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
                                    'description' => 'Enter custom height in pixels for slider (enables scrolling)',
                                    'overridable' => false
                                ],
                                'source' => [
                                    'type' => 'select.select',
                                    'label' => 'Content Source',
                                    'description' => 'Choose if the content should be loaded from the WordPress articles or particle itself.',
                                    'default' => 'particle',
                                    'options' => [
                                        'particle' => 'Particle',
                                        'wordpress' => 'WordPress'
                                    ]
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
                                    'label' => 'Particle Items',
                                    'description' => 'Create each item to appear in the content row.',
                                    'value' => 'title',
                                    'ajax' => true,
                                    'fields' => [
                                        '.avatar' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Avatar',
                                            'description' => 'Select desired avatar.'
                                        ],
                                        '.image' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Image',
                                            'description' => 'Select desired image.'
                                        ],
                                        '.author' => [
                                            'type' => 'input.text',
                                            'label' => 'Author',
                                            'description' => 'Customize the Author.'
                                        ],
                                        '.date' => [
                                            'type' => 'input.date',
                                            'label' => 'Date',
                                            'description' => 'Customize the date.'
                                        ],
                                        '.date_format' => [
                                            'type' => 'select.date',
                                            'label' => 'Date Format',
                                            'description' => 'Select preferred date format.',
                                            'default' => 'l, F d, Y',
                                            'placeholder' => 'Select...',
                                            'selectize' => [
                                                'allowEmptyOption' => true
                                            ],
                                            'options' => [
                                                '' => 'None',
                                                'l, F d, Y' => 'Date1',
                                                'F d' => 'Date2',
                                                'd M' => 'Date3',
                                                'D, M d, Y' => 'Date4',
                                                'D, M d, y' => 'Date5',
                                                'l' => 'Date6',
                                                'l j F Y' => 'Date7'
                                            ]
                                        ],
                                        '.link' => [
                                            'type' => 'input.text',
                                            'label' => 'Link',
                                            'description' => 'Input the item link.'
                                        ],
                                        '.categoryname' => [
                                            'type' => 'input.text',
                                            'label' => 'Category Name',
                                            'description' => 'Input the item category name.'
                                        ],
                                        '.categorylink' => [
                                            'type' => 'input.text',
                                            'label' => 'Category Link',
                                            'description' => 'Input the item category link.'
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
                                'post.display.date.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Date',
                                    'description' => 'Select if the post date should be shown.',
                                    'default' => 'published',
                                    'options' => [
                                        'published' => 'Show Published Date',
                                        'modified' => 'Show Modified Date',
                                        '' => 'Hide'
                                    ]
                                ],
                                'post.display.date.format' => [
                                    'type' => 'select.date',
                                    'label' => 'Date Format',
                                    'description' => 'Select preferred date format. Leave empty not to display a date.',
                                    'default' => 'l, F d, Y',
                                    'selectize' => [
                                        'allowEmptyOption' => true
                                    ],
                                    'options' => [
                                        'l, F d, Y' => 'Date1',
                                        'l, d F' => 'Date2',
                                        'D, d F' => 'Date3',
                                        'F d' => 'Date4',
                                        'd F' => 'Date5',
                                        'd M' => 'Date6',
                                        'D, M d, Y' => 'Date7',
                                        'D, M d, y' => 'Date8',
                                        'l' => 'Date9',
                                        'l j F Y' => 'Date10',
                                        'j F Y' => 'Date11',
                                        'F d, Y' => 'Date12'
                                    ]
                                ],
                                'post.display.author.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Author',
                                    'description' => 'Select if the article author should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'post.display.category.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Category',
                                    'description' => 'Select if and how the article category should be shown.',
                                    'default' => 'link',
                                    'options' => [
                                        'show' => 'Show',
                                        'link' => 'Show with Link',
                                        '' => 'Hide'
                                    ]
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
