<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/blueprints/styles/menu.yaml',
    'modified' => 1524692592,
    'data' => [
        'name' => 'Menu',
        'description' => 'Set menu style configuration options.',
        'type' => 'configuration',
        'form' => [
            'fields' => [
                'animation' => [
                    'type' => 'select.selectize',
                    'label' => 'Dropdown Animation',
                    'description' => 'Select the dropdown animation.',
                    'default' => 'g-fade',
                    'options' => [
                        'g-no-animation' => 'No Animation',
                        'g-fade' => 'Fade',
                        'g-zoom' => 'Zoom',
                        'g-fade-in-up' => 'Fade In Up',
                        'g-dropdown-bounce-in-down' => 'Bounce In Down',
                        'g-dropdown-bounce-in-left' => 'Bounce In Left',
                        'g-dropdown-bounce-in-right' => 'Bounce In Right'
                    ]
                ]
            ]
        ]
    ]
];
