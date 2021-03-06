<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/header-search.yaml',
    'modified' => 1524404436,
    'data' => [
        'name' => 'Header Search',
        'description' => 'Display header search.',
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
                    'description' => 'Globally enable Header Search particle.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong><br /><br />Displays header search in your layout.<br />This particle is designed to be used in the Menu only.<br /><br /><strong>Joomla:</strong> Go to the Module Manager and make sure your Search module is published in the "<strong>header-search</strong>" position.<br /><br /><strong>Grav CMS:</strong> Make sure you have installed the <a href="https://github.com/getgrav/grav-plugin-simplesearch" target="_blank"><strong>SimpleSearch</strong></a> plugin.'
                ],
                'menusection' => [
                    'type' => 'input.text',
                    'description' => 'Type in the ID of the section your Main Menu is placed in. It would usually be \'#g-header\' or \'#g-navigation\'.',
                    'label' => 'Menu Section ID',
                    'placeholder' => '#g-header',
                    'default' => '#g-header'
                ],
                'bgcolor' => [
                    'type' => 'input.colorpicker',
                    'description' => 'Select the Background Color for the Search element. You would usually want it to be the same as the background color of the section where the Menu is placed in.',
                    'label' => 'Background Color',
                    'default' => '#ffffff'
                ],
                'textcolor' => [
                    'type' => 'input.colorpicker',
                    'description' => 'Select the Text Color for the Search element. You would usually want it to be the same as the text color of the section where the Menu is placed in.',
                    'label' => 'Text Color',
                    'default' => '#818181'
                ]
            ]
        ]
    ]
];
