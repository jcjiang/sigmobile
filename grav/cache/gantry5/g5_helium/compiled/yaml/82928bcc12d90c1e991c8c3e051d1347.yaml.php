<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/accordion-grav.yaml',
    'modified' => 1524404426,
    'data' => [
        'name' => 'Accordion (Grav)',
        'description' => 'Display Grav Content in Accordion.',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Accordion (Grav) particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong>'
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
                                'collapse' => [
                                    'type' => 'select.select',
                                    'label' => 'Collapse sections',
                                    'description' => 'Display multiple content sections at the same time without one collapsing when the other one is opened.',
                                    'placeholder' => 'Select...',
                                    'default' => 'true',
                                    'options' => [
                                        'true' => 'Yes',
                                        'false' => 'No'
                                    ]
                                ],
                                'showfirst' => [
                                    'type' => 'select.select',
                                    'label' => 'Show First',
                                    'description' => 'Select if the first Accordion item should be opened by default.',
                                    'placeholder' => 'Select...',
                                    'default' => 'true',
                                    'options' => [
                                        'true' => 'Yes',
                                        'false' => 'No'
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
                        ],
                        '_tab_source' => [
                            'label' => 'Data Source',
                            'fields' => [
                                'article.filter.categories' => [
                                    'type' => 'input.selectize',
                                    'label' => 'Categories',
                                    'description' => 'Select the categories the content should be taken from.',
                                    'overridable' => false
                                ],
                                'article.limit.total' => [
                                    'type' => 'input.text',
                                    'label' => 'Number of Articles',
                                    'description' => 'Enter the maximum number of articles to display.',
                                    'default' => 3,
                                    'pattern' => '\\d{1,2}',
                                    'overridable' => false
                                ],
                                'article.limit.start' => [
                                    'type' => 'input.text',
                                    'label' => 'Start From',
                                    'description' => 'Enter offset specifying the first article to return. The default is \'0\' (the first content item).',
                                    'default' => 0,
                                    'pattern' => '\\d{1,2}',
                                    'overridable' => false
                                ],
                                'article.sort.orderby' => [
                                    'type' => 'select.select',
                                    'label' => 'Order By',
                                    'description' => 'Select how the content should be ordered by.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default Ordering',
                                        'date' => 'Date',
                                        'publish_date' => 'Publish Date',
                                        'unpublish_date' => 'Unpublish Date',
                                        'modified' => 'Last Modified Date',
                                        'title' => 'Title',
                                        'slug' => 'Slug'
                                    ],
                                    'overridable' => false
                                ],
                                'article.sort.ordering' => [
                                    'type' => 'select.select',
                                    'label' => 'Ordering Direction',
                                    'description' => 'Select the direction the content should be ordered by.',
                                    'default' => 'asc',
                                    'options' => [
                                        'asc' => 'Ascending',
                                        'desc' => 'Descending'
                                    ],
                                    'overridable' => false
                                ]
                            ]
                        ],
                        '_tab_layout' => [
                            'label' => 'Article Layout',
                            'fields' => [
                                'article.display.title.limit' => [
                                    'type' => 'input.text',
                                    'label' => 'Title Limit',
                                    'description' => 'Enter the maximum number of characters the content title should be limited to.',
                                    'pattern' => '\\d+(\\.\\d+){0,1}'
                                ],
                                'article.display.image.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Image',
                                    'description' => 'Select if and what image of the content should be shown.',
                                    'default' => 'intro',
                                    'options' => [
                                        'intro' => 'Intro',
                                        'full' => 'Full',
                                        '' => 'None'
                                    ]
                                ],
                                'lightbox' => [
                                    'type' => 'select.select',
                                    'label' => 'Image Lightbox',
                                    'description' => 'Enable or disable the image lightbox/popup.',
                                    'placeholder' => 'Select...',
                                    'default' => 'disable',
                                    'options' => [
                                        'enable' => 'Enabled',
                                        'disable' => 'Disabled'
                                    ]
                                ],
                                'article.display.date.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Date',
                                    'description' => 'Select if the content date should be shown.',
                                    'default' => 'published',
                                    'options' => [
                                        'created' => 'Show Created Date',
                                        'published' => 'Show Published Date',
                                        'modified' => 'Show Modified Date',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.date.format' => [
                                    'type' => 'select.date',
                                    'label' => 'Date Format',
                                    'description' => 'Select preferred date format.',
                                    'default' => 'l, F d, Y',
                                    'selectize' => [
                                        'allowEmptyOption' => true
                                    ],
                                    'options' => [
                                        'l, F d, Y' => 'Date1',
                                        'l, d F' => 'Date2',
                                        'D, d F' => 'Date3',
                                        'F d' => 'Date4',
                                        'd F' => 'Date5',
                                        'd M' => 'Date6',
                                        'D, M d, Y' => 'Date7',
                                        'D, M d, y' => 'Date8',
                                        'l' => 'Date9',
                                        'l j F Y' => 'Date10',
                                        'j F Y' => 'Date11',
                                        'F d, Y' => 'Date12'
                                    ]
                                ],
                                'article.display.author.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Author',
                                    'description' => 'Select if the content author should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.category.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Category',
                                    'description' => 'Select if the content category should be shown.',
                                    'default' => 'link',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.category.route' => [
                                    'type' => 'input.text',
                                    'label' => 'Category Route',
                                    'description' => 'Route to the category page'
                                ],
                                'article.display.text.type' => [
                                    'type' => 'select.select',
                                    'label' => 'Article Text',
                                    'description' => 'Select if and how the content text should be shown.',
                                    'default' => 'intro',
                                    'options' => [
                                        'intro' => 'Introduction',
                                        'full' => 'Full Article',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.text.limit' => [
                                    'type' => 'input.text',
                                    'label' => 'Text Limit',
                                    'description' => 'Type in the number of characters the content text should be limited to.',
                                    'default' => '',
                                    'pattern' => '\\d+'
                                ],
                                'article.display.text.formatting' => [
                                    'type' => 'select.select',
                                    'label' => 'Text Formatting',
                                    'description' => 'Select the formatting you want to use to display the content text.',
                                    'default' => 'text',
                                    'options' => [
                                        'text' => 'Plain Text',
                                        'html' => 'HTML'
                                    ]
                                ],
                                'article.display.read_more.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Read More',
                                    'description' => 'Select if the content \'Read More\' button should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.read_more.label' => [
                                    'type' => 'input.text',
                                    'label' => 'Read More Label',
                                    'description' => 'Type in the label for the \'Read More\' button.',
                                    'placeholder' => 'Read More...'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
