<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/scroll-to.yaml',
    'modified' => 1524404434,
    'data' => [
        'name' => 'Scroll To',
        'description' => 'Display a Scroll To particle.',
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
                    'description' => 'Globally enable Scroll To particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong>'
                ],
                'text' => [
                    'type' => 'input.text',
                    'label' => 'Text',
                    'description' => 'Enter the clickable text that will trigger the scroll.',
                    'placeholder' => 'Enter Text'
                ],
                'icon' => [
                    'type' => 'input.icon',
                    'label' => 'Icon',
                    'description' => 'Select an icon to be placed in front of the text.'
                ],
                'link' => [
                    'type' => 'input.text',
                    'label' => 'Scroll To (ID)',
                    'description' => 'Type in the ID of the corresponding part of the site (without \'#\').'
                ],
                'smoothscrolloffset' => [
                    'type' => 'input.text',
                    'label' => 'Smooth Scroll Offset',
                    'description' => 'Set the smooth scroll offset in pixels (the element top offset). Do NOT type in \'px\', enter just the digits.',
                    'default' => 0
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.',
                    'default' => NULL
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
                ]
            ]
        ]
    ]
];
