<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/media-box.yaml',
    'modified' => 1524404430,
    'data' => [
        'name' => 'Media Box',
        'description' => 'Display different file formats.',
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
                    'description' => 'Globally enable Media Box particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong>'
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
                'tooltippos' => [
                    'type' => 'select.select',
                    'label' => 'Tooltip Position',
                    'description' => 'Select the tooltip position.',
                    'placeholder' => 'Select...',
                    'default' => 'top',
                    'options' => [
                        'top' => 'Top',
                        'bottom' => 'Bottom'
                    ]
                ],
                'columns' => [
                    'type' => 'select.select',
                    'label' => 'Items per row',
                    'description' => 'Select the number of items per row.',
                    'placeholder' => 'Select...',
                    'default' => 1,
                    'options' => [
                        1 => 1,
                        2 => 2,
                        3 => 3,
                        4 => 4
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
                    'description' => 'Extra Tag attributes for the particle.',
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
                    'label' => 'Media Box items',
                    'description' => 'Create each media box item.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.titlelink' => [
                            'type' => 'input.text',
                            'label' => 'Title Link'
                        ],
                        '.titletarget' => [
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
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select the image to display.'
                        ],
                        '.alt' => [
                            'type' => 'input.text',
                            'label' => 'Image Alt Tag'
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description'
                        ],
                        '.special1' => [
                            'type' => 'input.text',
                            'label' => 'Special Text 1'
                        ],
                        '.special2' => [
                            'type' => 'input.text',
                            'label' => 'Special Text 2'
                        ],
                        '.special2text' => [
                            'type' => 'input.text',
                            'label' => 'Special 2 Link Title'
                        ],
                        '.special2link' => [
                            'type' => 'input.text',
                            'label' => 'Link'
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
                        '_note' => [
                            'type' => 'separator.note',
                            'class' => 'alert alert-info',
                            'content' => '<i class="fa fa-angle-down"></i> 1. Set Audio settings'
                        ],
                        '.audio' => [
                            'type' => 'input.filepicker',
                            'label' => 'Select Audio File'
                        ],
                        '.format' => [
                            'type' => 'select.select',
                            'label' => 'Select audio format',
                            'placeholder' => 'Select...',
                            'default' => 'mpeg',
                            'options' => [
                                'mpeg' => 'MPEG/ MP3',
                                'ogg' => 'OGG',
                                'wave' => 'Wave'
                            ]
                        ],
                        '.buttonicon1' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.tooltip1' => [
                            'type' => 'input.text',
                            'label' => 'Tooltip Text'
                        ],
                        '_note2' => [
                            'type' => 'separator.note',
                            'class' => 'alert alert-info',
                            'content' => '<i class="fa fa-angle-down"></i> 2. Set Video settings'
                        ],
                        '.video' => [
                            'type' => 'input.text',
                            'label' => 'Video URL',
                            'description' => 'Paste the video URL.'
                        ],
                        '.buttonicon2' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.tooltip2' => [
                            'type' => 'input.text',
                            'label' => 'Tooltip Text'
                        ],
                        '_note3' => [
                            'type' => 'separator.note',
                            'class' => 'alert alert-info',
                            'content' => '<i class="fa fa-angle-down"></i> 3. Set Link 1 settings'
                        ],
                        '.readfile' => [
                            'type' => 'input.text',
                            'label' => 'Link'
                        ],
                        '.target3' => [
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
                        '.buttonicon3' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.tooltip3' => [
                            'type' => 'input.text',
                            'label' => 'Tooltip Text'
                        ],
                        '_note4' => [
                            'type' => 'separator.note',
                            'class' => 'alert alert-info',
                            'content' => '<i class="fa fa-angle-down"></i> 4. Set Link 2 settings (Recommended for downloadable items)'
                        ],
                        '.readfile2' => [
                            'type' => 'input.text',
                            'label' => 'Link'
                        ],
                        '.target4' => [
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
                        '.buttonicon4' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.tooltip4' => [
                            'type' => 'input.text',
                            'label' => 'Tooltip Text'
                        ],
                        '_note5' => [
                            'type' => 'separator.note',
                            'class' => 'alert alert-info',
                            'content' => '<i class="fa fa-angle-down"></i> 5. Set Link 3 settings'
                        ],
                        '.readmore' => [
                            'type' => 'input.text',
                            'label' => 'Link'
                        ],
                        '.target5' => [
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
                        '.buttonicon5' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.tooltip5' => [
                            'type' => 'input.text',
                            'label' => 'Tooltip Text'
                        ],
                        '_note6' => [
                            'type' => 'separator.note',
                            'class' => 'alert alert-info',
                            'content' => '<i class="fa fa-angle-down"></i> Additional Options'
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
