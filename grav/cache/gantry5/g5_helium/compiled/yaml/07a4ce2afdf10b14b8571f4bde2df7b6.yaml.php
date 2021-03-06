<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/room-page.yaml',
    'modified' => 1524404430,
    'data' => [
        'name' => 'Room Page',
        'description' => 'Display room page.',
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
                    'description' => 'Globally enable Room Page particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong>'
                ],
                'mainimage' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Main Image',
                    'description' => 'Select the main image.'
                ],
                'mainalt' => [
                    'type' => 'input.text',
                    'label' => 'Image Alt Tag'
                ],
                'galleryitems' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Gallery Items',
                    'description' => 'Create each gallery item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image'
                        ],
                        '.alt' => [
                            'type' => 'input.text',
                            'label' => 'Image Alt Tag'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ]
                    ]
                ],
                'roomtitle' => [
                    'type' => 'input.text',
                    'label' => 'Room Title',
                    'description' => 'Type in the room title text.',
                    'placeholder' => 'Enter title'
                ],
                'startfrom' => [
                    'type' => 'input.text',
                    'label' => 'Start From Text',
                    'description' => 'Type in the start from text.',
                    'placeholder' => 'Enter text'
                ],
                'startfromvalue' => [
                    'type' => 'input.text',
                    'label' => 'Start From Value',
                    'description' => 'Type in the start from value text.',
                    'placeholder' => 'Enter text'
                ],
                'featuresitems' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Features Items',
                    'description' => 'Create each feature item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon',
                            'description' => 'Select the feature icon.'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Feature Title',
                            'description' => 'Type in the feature name, for example \'Bed\' or \'WiFi\'.'
                        ],
                        '.value' => [
                            'type' => 'input.text',
                            'label' => 'Feature Value',
                            'description' => 'Type in the feature value, for example \'1 King Bed\' or \'Yes\'.'
                        ],
                        '.class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Class'
                        ]
                    ]
                ],
                'featurescolumns' => [
                    'type' => 'select.select',
                    'label' => 'Features Columns',
                    'description' => 'Select the number of items per row (columns).',
                    'placeholder' => 'Select...',
                    'default' => 2,
                    'options' => [
                        2 => 2,
                        3 => 3,
                        4 => 4,
                        5 => 5
                    ]
                ],
                'roomdescription' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Room Description',
                    'description' => 'Type in the room description text.',
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
