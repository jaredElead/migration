<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/particles/testimonials.yaml',
    'modified' => 1524692598,
    'data' => [
        'name' => 'Testimonials',
        'description' => 'Display testimonials.',
        'type' => 'particle',
        'icon' => 'fa-id-badge',
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
                'animateOut' => [
                    'type' => 'select.select',
                    'label' => 'Out Animation',
                    'description' => 'Customize the Out Animation from animate css class.',
                    'default' => 'fadeOut',
                    'options' => [
                        'default' => 'default',
                        'bounce' => 'bounce',
                        'flash' => 'flash',
                        'pulse' => 'pulse',
                        'rubberBand' => 'rubberBand',
                        'shake' => 'shake',
                        'swing' => 'swing',
                        'tada' => 'tada',
                        'wobble' => 'wobble',
                        'jello' => 'jello',
                        'bounceIn' => 'bounceIn',
                        'bounceInDown' => 'bounceInDown',
                        'bounceInLeft' => 'bounceInLeft',
                        'bounceInRight' => 'bounceInRight',
                        'bounceInUp' => 'bounceInUp',
                        'bounceOut' => 'bounceOut',
                        'bounceOutDown' => 'bounceOutDown',
                        'bounceOutLeft' => 'bounceOutLeft',
                        'bounceOutRight' => 'bounceOutRight',
                        'bounceOutUp' => 'bounceOutUp',
                        'fadeIn' => 'fadeIn',
                        'fadeInDown' => 'fadeInDown',
                        'fadeInDownBig' => 'fadeInDownBig',
                        'fadeInLeft' => 'fadeInLeft',
                        'fadeInLeftBig' => 'fadeInLeftBig',
                        'fadeInRight' => 'fadeInRight',
                        'fadeInRightBig' => 'fadeInRightBig',
                        'fadeInUp' => 'fadeInUp',
                        'fadeInUpBig' => 'fadeInUpBig',
                        'fadeOut' => 'fadeOut',
                        'fadeOutDown' => 'fadeOutDown',
                        'fadeOutDownBig' => 'fadeOutDownBig',
                        'fadeOutLeft' => 'fadeOutLeft',
                        'fadeOutLeftBig' => 'fadeOutLeftBig',
                        'fadeOutRight' => 'fadeOutRight',
                        'fadeOutRightBig' => 'fadeOutRightBig',
                        'fadeOutUp' => 'fadeOutUp',
                        'fadeOutUpBig' => 'fadeOutUpBig',
                        'flip' => 'flip',
                        'flipInX' => 'flipInX',
                        'flipInY' => 'flipInY',
                        'flipOutX' => 'flipOutX',
                        'flipOutY' => 'flipOutY',
                        'lightSpeedIn' => 'lightSpeedIn',
                        'lightSpeedOut' => 'lightSpeedOut',
                        'rotateIn' => 'rotateIn',
                        'rotateInDownLeft' => 'rotateInDownLeft',
                        'rotateInDownRight' => 'rotateInDownRight',
                        'rotateInUpLeft' => 'rotateInUpLeft',
                        'rotateInUpRight' => 'rotateInUpRight',
                        'rotateOut' => 'rotateOut',
                        'rotateOutDownLeft' => 'rotateOutDownLeft',
                        'rotateOutDownRight' => 'rotateOutDownRight',
                        'rotateOutUpLeft' => 'rotateOutUpLeft',
                        'rotateOutUpRight' => 'rotateOutUpRight',
                        'slideInUp' => 'slideInUp',
                        'slideInDown' => 'slideInDown',
                        'slideInLeft' => 'slideInLeft',
                        'slideInRight' => 'slideInRight',
                        'slideOutUp' => 'slideOutUp',
                        'slideOutDown' => 'slideOutDown',
                        'slideOutLeft' => 'slideOutLeft',
                        'slideOutRight' => 'slideOutRight',
                        'zoomIn' => 'zoomIn',
                        'zoomInDown' => 'zoomInDown',
                        'zoomInLeft' => 'zoomInLeft',
                        'zoomInRight' => 'zoomInRight',
                        'zoomInUp' => 'zoomInUp',
                        'zoomOut' => 'zoomOut',
                        'zoomOutDown' => 'zoomOutDown',
                        'zoomOutLeft' => 'zoomOutLeft',
                        'zoomOutRight' => 'zoomOutRight',
                        'zoomOutUp' => 'zoomOutUp',
                        'hinge' => 'hinge',
                        'rollIn' => 'rollIn',
                        'rollOut' => 'rollOut'
                    ]
                ],
                'animateIn' => [
                    'type' => 'select.select',
                    'label' => 'In Animation',
                    'description' => 'Customize the In Animation from animate css class.',
                    'default' => 'fadeIn',
                    'options' => [
                        'default' => 'default',
                        'bounce' => 'bounce',
                        'flash' => 'flash',
                        'pulse' => 'pulse',
                        'rubberBand' => 'rubberBand',
                        'shake' => 'shake',
                        'swing' => 'swing',
                        'tada' => 'tada',
                        'wobble' => 'wobble',
                        'jello' => 'jello',
                        'bounceIn' => 'bounceIn',
                        'bounceInDown' => 'bounceInDown',
                        'bounceInLeft' => 'bounceInLeft',
                        'bounceInRight' => 'bounceInRight',
                        'bounceInUp' => 'bounceInUp',
                        'bounceOut' => 'bounceOut',
                        'bounceOutDown' => 'bounceOutDown',
                        'bounceOutLeft' => 'bounceOutLeft',
                        'bounceOutRight' => 'bounceOutRight',
                        'bounceOutUp' => 'bounceOutUp',
                        'fadeIn' => 'fadeIn',
                        'fadeInDown' => 'fadeInDown',
                        'fadeInDownBig' => 'fadeInDownBig',
                        'fadeInLeft' => 'fadeInLeft',
                        'fadeInLeftBig' => 'fadeInLeftBig',
                        'fadeInRight' => 'fadeInRight',
                        'fadeInRightBig' => 'fadeInRightBig',
                        'fadeInUp' => 'fadeInUp',
                        'fadeInUpBig' => 'fadeInUpBig',
                        'fadeOut' => 'fadeOut',
                        'fadeOutDown' => 'fadeOutDown',
                        'fadeOutDownBig' => 'fadeOutDownBig',
                        'fadeOutLeft' => 'fadeOutLeft',
                        'fadeOutLeftBig' => 'fadeOutLeftBig',
                        'fadeOutRight' => 'fadeOutRight',
                        'fadeOutRightBig' => 'fadeOutRightBig',
                        'fadeOutUp' => 'fadeOutUp',
                        'fadeOutUpBig' => 'fadeOutUpBig',
                        'flip' => 'flip',
                        'flipInX' => 'flipInX',
                        'flipInY' => 'flipInY',
                        'flipOutX' => 'flipOutX',
                        'flipOutY' => 'flipOutY',
                        'lightSpeedIn' => 'lightSpeedIn',
                        'lightSpeedOut' => 'lightSpeedOut',
                        'rotateIn' => 'rotateIn',
                        'rotateInDownLeft' => 'rotateInDownLeft',
                        'rotateInDownRight' => 'rotateInDownRight',
                        'rotateInUpLeft' => 'rotateInUpLeft',
                        'rotateInUpRight' => 'rotateInUpRight',
                        'rotateOut' => 'rotateOut',
                        'rotateOutDownLeft' => 'rotateOutDownLeft',
                        'rotateOutDownRight' => 'rotateOutDownRight',
                        'rotateOutUpLeft' => 'rotateOutUpLeft',
                        'rotateOutUpRight' => 'rotateOutUpRight',
                        'slideInUp' => 'slideInUp',
                        'slideInDown' => 'slideInDown',
                        'slideInLeft' => 'slideInLeft',
                        'slideInRight' => 'slideInRight',
                        'slideOutUp' => 'slideOutUp',
                        'slideOutDown' => 'slideOutDown',
                        'slideOutLeft' => 'slideOutLeft',
                        'slideOutRight' => 'slideOutRight',
                        'zoomIn' => 'zoomIn',
                        'zoomInDown' => 'zoomInDown',
                        'zoomInLeft' => 'zoomInLeft',
                        'zoomInRight' => 'zoomInRight',
                        'zoomInUp' => 'zoomInUp',
                        'zoomOut' => 'zoomOut',
                        'zoomOutDown' => 'zoomOutDown',
                        'zoomOutLeft' => 'zoomOutLeft',
                        'zoomOutRight' => 'zoomOutRight',
                        'zoomOutUp' => 'zoomOutUp',
                        'hinge' => 'hinge',
                        'rollIn' => 'rollIn',
                        'rollOut' => 'rollOut'
                    ]
                ],
                'nav' => [
                    'type' => 'select.select',
                    'label' => 'Prev / Next',
                    'description' => 'Enable or disable the Prev / Next navigation.',
                    'default' => 'disabled',
                    'options' => [
                        'enabled' => 'Enable',
                        'disabled' => 'Disable'
                    ]
                ],
                'dots' => [
                    'type' => 'select.select',
                    'label' => 'Dots',
                    'description' => 'Enable or disable the Dots navigation.',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enable',
                        'disabled' => 'Disable'
                    ]
                ],
                'loop' => [
                    'type' => 'select.select',
                    'label' => 'Loop',
                    'description' => 'Enable or disable the Inifnity loop. Duplicate last and first items to get loop illusion. This option <strong>won\'t work</strong> in Showcase mode.',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enable',
                        'disabled' => 'Disable'
                    ]
                ],
                'autoplay' => [
                    'type' => 'select.select',
                    'label' => 'Autoplay',
                    'description' => 'Enable or disable the Autoplay.',
                    'default' => 'disabled',
                    'options' => [
                        'enabled' => 'Enable',
                        'disabled' => 'Disable'
                    ]
                ],
                'autoplaySpeed' => [
                    'type' => 'input.text',
                    'label' => 'Autoplay Speed',
                    'description' => 'Set the speed of the Autoplay, in milliseconds.',
                    'placeholder' => 5000
                ],
                'pauseOnHover' => [
                    'type' => 'select.select',
                    'label' => 'Pause on Hover',
                    'description' => 'Pause the slideshow when hovering over slider, then resume when no longer hovering.',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enable',
                        'disabled' => 'Disable'
                    ]
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Testimonials',
                    'description' => 'Create testimonials.',
                    'value' => 'author',
                    'ajax' => true,
                    'fields' => [
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select desired image.'
                        ],
                        '.author' => [
                            'type' => 'input.text',
                            'label' => 'Author',
                            'description' => 'Enter testimonial author name'
                        ],
                        '.position' => [
                            'type' => 'input.text',
                            'label' => 'Position',
                            'description' => 'Enter author position'
                        ],
                        '.testimonial' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Testimonial',
                            'description' => 'Customize testimonial text.',
                            'placeholder' => 'Customize testimonial text'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
