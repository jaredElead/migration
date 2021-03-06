<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/particles/popupmodule.yaml',
    'modified' => 1524692598,
    'data' => [
        'name' => 'Popup Widget',
        'description' => 'Display Popup Widget items.',
        'type' => 'particle',
        'icon' => 'fa-clone',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
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
                'widget_id' => [
                    'type' => 'gantry.widget',
                    'label' => 'Widget',
                    'class' => 'g-urltemplate input-small',
                    'picker_label' => 'Pick a Widget',
                    'description' => 'Choose a widget to use.',
                    'pattern' => '\\d+',
                    'overridable' => false
                ],
                'guestbuttonicon' => [
                    'type' => 'input.icon',
                    'label' => 'Guest Button Icon',
                    'description' => 'Choose the Button Icon for guest.'
                ],
                'guestbuttontext' => [
                    'type' => 'input.text',
                    'label' => 'Guest Text',
                    'description' => 'Specify the button text for guest.'
                ],
                'userbuttonicon' => [
                    'type' => 'input.icon',
                    'label' => 'Guest Button Icon',
                    'description' => 'Choose the Button Icon for logged in user.'
                ],
                'userbuttontext' => [
                    'type' => 'input.text',
                    'label' => 'User Text',
                    'description' => 'Specify the button text for logged in user.'
                ],
                'buttonclass' => [
                    'type' => 'input.selectize',
                    'label' => 'Button Classes',
                    'description' => 'CSS class names for the button.'
                ]
            ]
        ]
    ]
];
