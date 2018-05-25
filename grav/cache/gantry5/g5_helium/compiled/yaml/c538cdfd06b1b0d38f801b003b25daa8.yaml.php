<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/slideshow-grav.yaml',
    'modified' => 1524404438,
    'data' => [
        'name' => 'Slideshow (Grav)',
        'description' => 'Display slideshow with Grav Content.',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Slideshow (Grav) particle.',
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
                                'height' => [
                                    'type' => 'input.text',
                                    'label' => 'Slideshow Height',
                                    'description' => 'Set the slideshow height in pixels (do NOT type in \'px\', enter just the digits). Default is \'auto\'.',
                                    'default' => 'auto'
                                ],
                                'autoplay' => [
                                    'type' => 'select.select',
                                    'label' => 'Autoplay',
                                    'description' => 'Enable or disable the Slideshow autoplay.',
                                    'placeholder' => 'Select...',
                                    'default' => 'true',
                                    'options' => [
                                        'true' => 'Enabled',
                                        'false' => 'Disabled'
                                    ]
                                ],
                                'autoplayInterval' => [
                                    'type' => 'input.text',
                                    'label' => 'Autoplay Interval',
                                    'description' => 'Set the timespan in miliseconds between switching slideshow items.',
                                    'default' => 7000
                                ],
                                'navigation' => [
                                    'type' => 'select.select',
                                    'label' => 'Navigation',
                                    'description' => 'Select the Slideshow navigation.',
                                    'placeholder' => 'Select...',
                                    'default' => 'arrows',
                                    'options' => [
                                        'arrows' => 'Arrows (Show on Hover)',
                                        'arrowsvisible' => 'Arrows (Always Visible)',
                                        'dots' => 'Dots',
                                        'both' => 'Both (Show on Hover)',
                                        'bothvisible' => 'Both (Always Visible)',
                                        'none' => 'None'
                                    ]
                                ],
                                'animation' => [
                                    'type' => 'select.select',
                                    'label' => 'Animation',
                                    'description' => 'Select the Slideshow animation.',
                                    'placeholder' => 'Select...',
                                    'default' => 'fade',
                                    'options' => [
                                        'fade' => 'Fade',
                                        'scroll' => 'Scroll',
                                        'scale' => 'Scale',
                                        'swipe' => 'Swipe',
                                        'slice-down' => 'Slice-down',
                                        'slice-up' => 'Slice-up',
                                        'slice-up-down' => 'Slice-up-down',
                                        'fold' => 'Fold',
                                        'puzzle' => 'Puzzle',
                                        'boxes' => 'Boxes',
                                        'boxes-reverse' => 'Boxed-reverse',
                                        'random-fx' => 'Random'
                                    ]
                                ],
                                'animationDuration' => [
                                    'type' => 'input.text',
                                    'label' => 'Animation Duration',
                                    'description' => 'Set the animation duration in miliseconds.',
                                    'default' => 500
                                ],
                                'kenburns' => [
                                    'type' => 'select.select',
                                    'label' => 'Ken Burns Effect',
                                    'description' => 'Enable or disable the Ken Burns effect.',
                                    'placeholder' => 'Select...',
                                    'default' => 'false',
                                    'options' => [
                                        'true' => 'Enabled',
                                        'false' => 'Disabled'
                                    ]
                                ],
                                'pauseOnHover' => [
                                    'type' => 'select.select',
                                    'label' => 'Pause on Hover',
                                    'description' => 'Pause autoplay when hovering the slideshow.',
                                    'placeholder' => 'Select...',
                                    'default' => 'true',
                                    'options' => [
                                        'true' => 'Enabled',
                                        'false' => 'Disabled'
                                    ]
                                ],
                                'fullscreen' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Fullscreen',
                                    'description' => 'Make the Slideshow fullscreen that stretches to fill the entire viewport.',
                                    'default' => 0
                                ],
                                'overlaystyle' => [
                                    'type' => 'select.select',
                                    'label' => 'Overlay Style',
                                    'description' => 'Select the overlay style (Title and Description). Style 2 does NOT show article details (Date, Author and Category).',
                                    'placeholder' => 'Select...',
                                    'default' => 'style1',
                                    'options' => [
                                        'style1' => 'Style 1',
                                        'style2' => 'Style 2',
                                        'style3' => 'Style 3'
                                    ]
                                ],
                                'overlaycontainer' => [
                                    'type' => 'select.select',
                                    'label' => 'Overlay Container',
                                    'description' => 'Enable or disable the Overlay Container. It is a very handy option especially for Fullwidth Slideshows.',
                                    'placeholder' => 'Select...',
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ]
                                ],
                                'overlayposition' => [
                                    'type' => 'select.select',
                                    'label' => 'Overlay Position',
                                    'description' => 'Select the overlay position (Title and Text).',
                                    'placeholder' => 'Select...',
                                    'default' => 'bottom',
                                    'options' => [
                                        'bottom' => 'Bottom',
                                        'left' => 'Left',
                                        'right' => 'Right',
                                        'top' => 'Top',
                                        'bottom-left' => 'Bottom Left',
                                        'bottom-center' => 'Bottom Center',
                                        'bottom-right' => 'Bottom Right',
                                        'middle-left' => 'Middle Left',
                                        'middle-center' => 'Middle Center',
                                        'middle-right' => 'Middle Right',
                                        'top-left' => 'Top Left',
                                        'top-center' => 'Top Center',
                                        'top-right' => 'Top Right'
                                    ]
                                ],
                                'overlayanimation' => [
                                    'type' => 'select.select',
                                    'label' => 'Overlay Animation',
                                    'description' => 'Select the overlay animation.',
                                    'placeholder' => 'Select...',
                                    'default' => 'fade',
                                    'options' => [
                                        'fade' => 'Fade',
                                        'slide-left' => 'Slide Left',
                                        'slide-left-short' => 'Slide Left (Short)',
                                        'slide-right' => 'Slide Right',
                                        'slide-right-short' => 'Slide Right (Short)',
                                        'slide-top' => 'Slide Top',
                                        'slide-top-short' => 'Slide Top (Short)',
                                        'slide-bottom' => 'Slide Bottom',
                                        'slide-bottom-short' => 'Slide Bottom (Short)',
                                        'scale' => 'Scale'
                                    ]
                                ],
                                'overlaywidth' => [
                                    'type' => 'select.select',
                                    'label' => 'Overlay Width',
                                    'description' => 'Select the overlay width.',
                                    'placeholder' => 'Select...',
                                    'default' => 'auto',
                                    'options' => [
                                        'auto' => 'Auto',
                                        1 => '100%',
                                        2 => '50%',
                                        3 => '33.3%',
                                        4 => '25%',
                                        5 => '20%',
                                        6 => '16.6%'
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
                                'article.display.image.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Image',
                                    'description' => 'Select what image of the content should be shown.',
                                    'default' => 'intro',
                                    'options' => [
                                        'intro' => 'Intro',
                                        'full' => 'Full'
                                    ]
                                ],
                                'article.display.title.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Title',
                                    'description' => 'Select if the content title should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show (Article Link)',
                                        'shownolink' => 'Show (No Link)',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.title.limit' => [
                                    'type' => 'input.text',
                                    'label' => 'Title Limit',
                                    'description' => 'Enter the maximum number of characters the content title should be limited to.',
                                    'pattern' => '\\d+(\\.\\d+){0,1}'
                                ],
                                'articledetails' => [
                                    'type' => 'select.select',
                                    'label' => 'Article Details',
                                    'description' => 'Select if the article details should be shown (Date, Author and Category).',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show (Top)',
                                        'showbottom' => 'Show (Bottom)',
                                        'hide' => 'Hide'
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
