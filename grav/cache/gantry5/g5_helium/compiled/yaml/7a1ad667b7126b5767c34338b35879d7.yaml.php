<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/keypoints.yaml',
    'modified' => 1524404430,
    'data' => [
        'name' => 'KeyPoints',
        'description' => 'Display key points.',
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
                    'description' => 'Globally enable KeyPoints particles.',
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
                'itemsleft' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Left Items',
                    'description' => 'Create each key point item to display on the left.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
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
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Center Image',
                    'description' => 'Select an image.'
                ],
                'alt' => [
                    'type' => 'input.text',
                    'label' => 'Image Alt Tag',
                    'description' => 'Type in the image alt tag.',
                    'placeholder' => 'Enter alt tag'
                ],
                'imagebottom' => [
                    'type' => 'select.select',
                    'label' => 'Image at the bottom',
                    'description' => 'Set the image at the bottom of the section. Recommended for an image of a person.',
                    'placeholder' => 'Select...',
                    'default' => 'yes',
                    'options' => [
                        'yes' => 'Yes',
                        'no' => 'No'
                    ]
                ],
                'itemsright' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Right Items',
                    'description' => 'Create each key point item to display on the right.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
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
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'General CSS Classes',
                    'description' => 'CSS class name for the whole particle.',
                    'default' => NULL
                ],
                'extra' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'General Tag Attributes',
                    'description' => 'Extra Tag attributes for the whole particle.',
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
