<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/plugins/gantry5/engines/nucleus/particles/position.yaml',
    'modified' => 1524692616,
    'data' => [
        'name' => 'Widget Position',
        'description' => 'Display a widget position.',
        'type' => 'position',
        'icon' => 'fa-object-group',
        'hidden' => false,
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable widget positions.',
                    'default' => true
                ],
                'key' => [
                    'type' => 'input.text',
                    'label' => 'Position Id',
                    'description' => 'Widget position id.',
                    'pattern' => '[a-z0-9-]+',
                    'overridable' => false
                ],
                'chrome' => [
                    'type' => 'input.text',
                    'label' => 'Chrome',
                    'description' => 'Module chrome in this widget position.',
                    'placeholder' => 'gantry'
                ]
            ]
        ]
    ]
];
