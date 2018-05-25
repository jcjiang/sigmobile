<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/logo-advanced.yaml',
    'modified' => 1524404422,
    'data' => [
        'name' => 'Logo (Advanced)',
        'description' => 'Display a Logo (Advanced).',
        'type' => 'particle',
        'icon' => 'fa-file-image-o',
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
                    'description' => 'Globally enable Logo (Advanced) particles.',
                    'default' => true
                ],
                'url' => [
                    'type' => 'input.text',
                    'label' => 'Logo Url',
                    'description' => 'Url for the image. Leave empty to go to home page.'
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Logo Image',
                    'description' => 'Select desired logo image.'
                ],
                'text' => [
                    'type' => 'input.text',
                    'label' => 'Logo Text',
                    'description' => 'Input logo description text.'
                ],
                'infopanel' => [
                    'type' => 'enable.enable',
                    'label' => 'Info Panel',
                    'description' => 'Enable/Disable the Info Panel.',
                    'default' => 1
                ],
                'panelwidth' => [
                    'type' => 'input.text',
                    'label' => 'Info Panel Width',
                    'description' => 'Set the Info Panel width in pixels. Default is \'400px\'.',
                    'default' => '400px'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Type in the title text for the Info Panel.',
                    'placeholder' => 'Enter title'
                ],
                'description' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Type in the description text for the Info Panel.',
                    'placeholder' => 'Enter description'
                ],
                'socialtext' => [
                    'type' => 'input.text',
                    'label' => 'Social Text',
                    'description' => 'Type in the text that will show in front of the Social Icons.',
                    'placeholder' => 'Enter Text',
                    'default' => 'Follow us:'
                ],
                'socialtarget' => [
                    'type' => 'select.select',
                    'label' => 'Social Links Target',
                    'description' => 'Target browser window when social icon is clicked.',
                    'placeholder' => 'Select...',
                    'default' => '_blank',
                    'options' => [
                        '_parent' => 'Self',
                        '_blank' => 'New Window'
                    ]
                ],
                'socialitems' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Social Items',
                    'description' => 'Create each social item to display in the Info Panel.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.name' => [
                            'type' => 'input.text',
                            'label' => 'Name',
                            'skip' => true
                        ],
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.text' => [
                            'type' => 'input.text',
                            'label' => 'Text'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link'
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
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'Set a specific CSS class for custom styling.'
                ]
            ]
        ]
    ]
];
