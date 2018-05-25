<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/offcanvas-toggle.yaml',
    'modified' => 1524404422,
    'data' => [
        'name' => 'Offcanvas Toggle',
        'description' => 'Display Offcanvas Toggle button.',
        'type' => 'particle',
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
                    'description' => 'Globally enable Offcanvas Toggle particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Displays the Offcanvas Toggle Button.<br />This particle is designed to be used in the Menu only.<br /><br />Once you publish this particle, it hides the original toggle button for the viewport size specified under "Styles" tab -> "Breakpoints" -> "Mobile Menu".'
                ],
                'icon' => [
                    'type' => 'input.icon',
                    'label' => 'Icon',
                    'description' => 'Select the icon for the Offcanvas Toggle button.',
                    'default' => 'fa fa-bars'
                ]
            ]
        ]
    ]
];
