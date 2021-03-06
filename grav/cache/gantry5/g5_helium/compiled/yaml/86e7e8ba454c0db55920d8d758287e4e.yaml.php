<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/before-after.yaml',
    'modified' => 1524404430,
    'data' => [
        'name' => 'Before/After',
        'description' => 'Display Before/After.',
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
                    'description' => 'Globally enable Before/After particles.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_main' => [
                            'label' => 'Main Settings',
                            'fields' => [
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
                                'layout_ba' => [
                                    'type' => 'select.select',
                                    'label' => 'Layout',
                                    'description' => 'Select the Before/After layout.',
                                    'placeholder' => 'Select...',
                                    'default' => 'horizontal',
                                    'options' => [
                                        'horizontal' => 'Horizontal',
                                        'vertical' => 'Vertical'
                                    ]
                                ],
                                'offset' => [
                                    'type' => 'select.select',
                                    'label' => 'Slider Offset',
                                    'description' => 'Select how far from the left the slider should be by default.',
                                    'placeholder' => 'Select...',
                                    'default' => 0.5,
                                    'options' => [
                                        '0.1' => 0.10000000000000001,
                                        '0.2' => 0.20000000000000001,
                                        '0.3' => 0.29999999999999999,
                                        '0.4' => 0.40000000000000002,
                                        '0.5' => 0.5,
                                        '0.6' => 0.59999999999999998,
                                        '0.7' => 0.69999999999999996,
                                        '0.8' => 0.80000000000000004,
                                        '0.9' => 0.90000000000000002
                                    ]
                                ],
                                'overlay' => [
                                    'type' => 'select.select',
                                    'label' => 'Overlay',
                                    'description' => 'Enable or disable the Before/After overlay (the dark overlay on hover).',
                                    'placeholder' => 'Select...',
                                    'default' => 'enabled',
                                    'options' => [
                                        'enabled' => 'Enabled',
                                        'disabled' => 'Disabled'
                                    ]
                                ],
                                'beforeimage' => [
                                    'type' => 'input.imagepicker',
                                    'label' => 'Before Image',
                                    'description' => 'Select an image.'
                                ],
                                'beforealt' => [
                                    'type' => 'input.text',
                                    'label' => 'Before Image Alt Tag',
                                    'description' => 'Type in the Before Image alt tag.',
                                    'placeholder' => 'Enter alt tag'
                                ],
                                'afterimage' => [
                                    'type' => 'input.imagepicker',
                                    'label' => 'After Image',
                                    'description' => 'Select an image.'
                                ],
                                'afteralt' => [
                                    'type' => 'input.text',
                                    'label' => 'After Image Alt Tag',
                                    'description' => 'Type in the After Image alt tag.',
                                    'placeholder' => 'Enter alt tag'
                                ],
                                'beforetext' => [
                                    'type' => 'input.text',
                                    'label' => 'Before Text',
                                    'description' => 'Type in the \'Before\' text. You can use this field to translate the text in your language.',
                                    'default' => 'Before'
                                ],
                                'aftertext' => [
                                    'type' => 'input.text',
                                    'label' => 'After Text',
                                    'description' => 'Type in the \'After\' text. You can use this field to translate the text in your language.',
                                    'default' => 'After'
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
                        ],
                        '_tab_feature' => [
                            'label' => 'Feature Mode',
                            'fields' => [
                                'featuremode' => [
                                    'type' => 'enable.enable',
                                    'description' => 'Enable or disable the \'Feature\' mode (Title, Description and a Button next to the Before/After image).',
                                    'label' => 'Feature Mode',
                                    'default' => 0
                                ],
                                'layout' => [
                                    'type' => 'select.select',
                                    'label' => 'Layout',
                                    'description' => 'Select the layout for this particle.',
                                    'placeholder' => 'Select...',
                                    'default' => 'right',
                                    'options' => [
                                        'right' => 'Image on the right',
                                        'left' => 'Image on the left'
                                    ]
                                ],
                                'imagewidth' => [
                                    'type' => 'input.text',
                                    'label' => 'Image Width',
                                    'description' => 'Type in the width of the image block in percentage. It must be a digit between 0 and 100. The default is \'50\'.',
                                    'default' => 50
                                ],
                                'title' => [
                                    'type' => 'input.text',
                                    'label' => 'Title',
                                    'description' => 'Type in the title text.',
                                    'placeholder' => 'Enter title'
                                ],
                                'description' => [
                                    'type' => 'textarea.textarea',
                                    'label' => 'Description',
                                    'description' => 'Type in the description text.',
                                    'placeholder' => 'Enter description'
                                ],
                                'link' => [
                                    'type' => 'input.text',
                                    'label' => 'Button Link',
                                    'description' => 'Type in the URL.'
                                ],
                                'buttontext' => [
                                    'type' => 'input.text',
                                    'label' => 'Button Text',
                                    'description' => 'Type in the button text.'
                                ],
                                'buttonicon' => [
                                    'type' => 'input.icon',
                                    'label' => 'Button Icon',
                                    'description' => 'Select an icon for the button.'
                                ],
                                'target' => [
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
                                'css.left' => [
                                    'type' => 'input.selectize',
                                    'label' => 'Left CSS Classes',
                                    'description' => 'CSS class name for the left element.',
                                    'default' => NULL
                                ],
                                'css.right' => [
                                    'type' => 'input.selectize',
                                    'label' => 'Right CSS Classes',
                                    'description' => 'CSS class name for the right element.',
                                    'default' => NULL
                                ],
                                'extra_left' => [
                                    'type' => 'collection.keyvalue',
                                    'label' => 'Left Tag Attributes',
                                    'description' => 'Extra Tag attributes for the left element.',
                                    'key_placeholder' => 'Key (data-*, style, ...)',
                                    'value_placeholder' => 'Value',
                                    'exclude' => [
                                        0 => 'id',
                                        1 => 'class'
                                    ]
                                ],
                                'extra_right' => [
                                    'type' => 'collection.keyvalue',
                                    'label' => 'Right Tag Attributes',
                                    'description' => 'Extra Tag attributes for the right element.',
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
        ]
    ]
];
