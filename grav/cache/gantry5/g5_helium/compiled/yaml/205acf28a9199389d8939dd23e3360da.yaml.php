<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/animated-counter.yaml',
    'modified' => 1524404430,
    'data' => [
        'name' => 'Animated Counter',
        'description' => 'Display features.',
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
                    'description' => 'Globally enable Animated Counter particles.',
                    'default' => true
                ],
                'mainheading' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Type in the title.',
                    'placeholder' => 'Enter Title',
                    'default' => ''
                ],
                'introtext' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Intro Text',
                    'description' => 'Type in the intro text.',
                    'placeholder' => 'Enter Intro Text',
                    'default' => ''
                ],
                'style' => [
                    'type' => 'select.select',
                    'label' => 'Style',
                    'description' => 'Select the style which defines the particle layout on the frontend.',
                    'placeholder' => 'Select...',
                    'default' => 'style1',
                    'options' => [
                        'style1' => 'Style 1',
                        'style2' => 'Style 2'
                    ]
                ],
                'commas' => [
                    'type' => 'select.select',
                    'label' => 'Comma Separator',
                    'description' => 'Select if comma separator should be added for thousands.',
                    'placeholder' => 'Select...',
                    'default' => 0,
                    'options' => [
                        1 => 'Enable',
                        0 => 'Disable'
                    ]
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
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Animated Counter Items',
                    'description' => 'Create each Animated Counter item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image'
                        ],
                        '.fromnumber' => [
                            'type' => 'input.text',
                            'label' => 'Start Number',
                            'description' => 'The number to start counting from (default: 0).',
                            'placeholder' => '0'
                        ],
                        '.tonumber' => [
                            'type' => 'input.text',
                            'label' => 'End Number',
                            'description' => 'The number to stop counting at (default: 100).',
                            'placeholder' => '100'
                        ],
                        '.duration' => [
                            'type' => 'input.text',
                            'label' => 'Duration',
                            'description' => 'The number of milliseconds it should take to finish counting (default: 1000).',
                            'placeholder' => '1000'
                        ],
                        '.refresh' => [
                            'type' => 'input.text',
                            'label' => 'Refresh',
                            'description' => 'The number of milliseconds to wait between refreshing the counter (default: 100).',
                            'placeholder' => '100'
                        ],
                        '.decimal' => [
                            'type' => 'select.select',
                            'label' => 'Decimal',
                            'description' => 'The number of digits after the decimal point (default: 0).',
                            'placeholder' => 'Select...',
                            'default' => '0',
                            'options' => [
                                0 => 0,
                                1 => 1,
                                2 => 2,
                                3 => 3
                            ]
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Class'
                        ],
                        '.extra' => [
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
        ]
    ]
];
