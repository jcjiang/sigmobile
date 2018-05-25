<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/features.yaml',
    'modified' => 1524404420,
    'data' => [
        'name' => 'Features',
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
                    'description' => 'Globally enable Features particles.',
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
                        'style2' => 'Style 2',
                        'style3' => 'Style 3',
                        'style4' => 'Style 4',
                        'style5' => 'Style 5',
                        'style6' => 'Style 6',
                        'style7' => 'Style 7',
                        'style8' => 'Style 8'
                    ]
                ],
                'columns' => [
                    'type' => 'select.select',
                    'label' => 'Items per Row',
                    'description' => 'Select the number of items per row.',
                    'placeholder' => 'Select...',
                    'default' => 3,
                    'options' => [
                        1 => 1,
                        2 => 2,
                        3 => 3,
                        4 => 4,
                        5 => 5,
                        6 => 6
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
                    'label' => 'Features Items',
                    'description' => 'Create each feature item to display.',
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
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Title Link'
                        ],
                        '.target' => [
                            'type' => 'select.select',
                            'label' => 'Target',
                            'description' => 'Target browser window when item is clicked.',
                            'placeholder' => 'Select...',
                            'default' => '_parent',
                            'options' => [
                                '_parent' => 'Self',
                                '_blank' => 'New Window'
                            ]
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description'
                        ],
                        '.subfeature1' => [
                            'type' => 'input.text',
                            'label' => 'Subfeature 1'
                        ],
                        '.subfeature2' => [
                            'type' => 'input.text',
                            'label' => 'Subfeature 2'
                        ],
                        '.subfeature3' => [
                            'type' => 'input.text',
                            'label' => 'Subfeature 3'
                        ],
                        '.subfeature4' => [
                            'type' => 'input.text',
                            'label' => 'Subfeature 4'
                        ],
                        '.subfeature5' => [
                            'type' => 'input.text',
                            'label' => 'Subfeature 5'
                        ],
                        '.buttontext' => [
                            'type' => 'input.text',
                            'label' => 'Button Text',
                            'description' => 'Enter the button text you want to be shown. The link is the URL you enter in the \'Title Link\' field above.'
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
