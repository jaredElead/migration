<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/rzn8.com/automail.rzn8.com/wp-content/themes/rt_fluent/particles/contactform.yaml',
    'modified' => 1524692598,
    'data' => [
        'name' => 'Contact Form',
        'description' => 'Display Contact Form.',
        'type' => 'particle',
        'icon' => 'fa-inbox',
        'form' => [
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
                    'description' => 'CSS class name for the form.'
                ],
                'header' => [
                    'type' => 'input.text',
                    'label' => 'Header',
                    'description' => 'Customize the header text that will appear above the contact form.',
                    'placeholder' => 'Enter header'
                ],
                'email' => [
                    'type' => 'input.text',
                    'label' => 'Email Address',
                    'description' => 'Instert your custom email address. If empty, WordPress admin email will be used instead.',
                    'placeholder' => 'your@email.com'
                ],
                'email_from' => [
                    'type' => 'input.text',
                    'label' => 'Form Sender',
                    'description' => 'Email address that will be used as the form sender. If empty, message author email address will be used.',
                    'placeholder' => 'no-reply@your-domain.com'
                ],
                'recaptcha.enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enable reCAPTCHA',
                    'description' => 'Renders the reCAPTCHA form to prevent SPAM bots.',
                    'default' => 0
                ],
                'recaptcha.sitekey' => [
                    'type' => 'input.text',
                    'label' => 'Site Key',
                    'description' => 'Site Key obtained from the reCAPTCHA site.'
                ],
                'recaptcha.secretkey' => [
                    'type' => 'input.text',
                    'label' => 'Secret Key',
                    'description' => 'Secret Key obtained from the reCAPTCHA site.'
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'To obtain the Site Key and Secret Key, please register your site at https://www.google.com/recaptcha/'
                ]
            ]
        ]
    ]
];
