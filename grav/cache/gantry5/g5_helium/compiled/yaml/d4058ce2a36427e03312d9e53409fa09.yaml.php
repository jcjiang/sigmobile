<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/zoom.yaml',
    'modified' => 1524404438,
    'data' => [
        'name' => 'Zoom',
        'description' => 'Display a zoom feature of image.',
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
                    'description' => 'Globally enable Zoom particles.',
                    'default' => true
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
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image',
                    'description' => 'Select an image.'
                ],
                'alt' => [
                    'type' => 'input.text',
                    'label' => 'Image Alt Tag',
                    'description' => 'Type in the image alt tag.',
                    'placeholder' => 'Enter alt tag'
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
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'General CSS Classes',
                    'description' => 'CSS class name for the whole particle.',
                    'default' => NULL
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
];
