<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/single-project.yaml',
    'modified' => 1524404434,
    'data' => [
        'name' => 'Single Project',
        'description' => 'Display single project.',
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
                    'description' => 'Globally enable Single Project particles.',
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
                'projecttitle' => [
                    'type' => 'input.text',
                    'label' => 'Project Title',
                    'description' => 'Type in the project title text.',
                    'placeholder' => 'Enter title'
                ],
                'clienttext' => [
                    'type' => 'input.text',
                    'label' => 'Client Text',
                    'description' => 'Type in the client text.',
                    'placeholder' => 'Enter text'
                ],
                'clientvalue' => [
                    'type' => 'input.text',
                    'label' => 'Client Name',
                    'description' => 'Type in the client name.',
                    'placeholder' => 'Enter text'
                ],
                'tasktext' => [
                    'type' => 'input.text',
                    'label' => 'Task Text',
                    'description' => 'Type in the task text.',
                    'placeholder' => 'Enter text'
                ],
                'taskvalue' => [
                    'type' => 'input.text',
                    'label' => 'Task Name',
                    'description' => 'Type in the task name.',
                    'placeholder' => 'Enter text'
                ],
                'budgettext' => [
                    'type' => 'input.text',
                    'label' => 'Budget Text',
                    'description' => 'Type in the budget text.',
                    'placeholder' => 'Enter text'
                ],
                'budgetvalue' => [
                    'type' => 'input.text',
                    'label' => 'Budget Price',
                    'description' => 'Type in the budget price.',
                    'placeholder' => 'Enter text'
                ],
                'projectsmalldesc' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Brief Project Description',
                    'description' => 'Type in the brief description text.',
                    'placeholder' => 'Enter description'
                ],
                'projecttitle2' => [
                    'type' => 'input.text',
                    'label' => 'Second Title (Features)',
                    'description' => 'Type in second title for features.',
                    'placeholder' => 'Enter title'
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
                            'description' => 'Type in the feature name, for example \'Floor\' or \'Logo Design\'.'
                        ],
                        '.value' => [
                            'type' => 'input.text',
                            'label' => 'Feature Value',
                            'description' => 'Type in the feature value, for example \'Wood\' or \'Yes\'.'
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
                'projectdescription' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Full Project Description',
                    'description' => 'Type in the project full description text.',
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
