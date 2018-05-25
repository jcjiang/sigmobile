<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/get-in-touch.yaml',
    'modified' => 1524404434,
    'data' => [
        'name' => 'Get in touch',
        'description' => 'Display a Get in touch particle.',
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
                    'description' => 'Globally enable Get in touch particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong>'
                ],
                'toggletext' => [
                    'type' => 'input.text',
                    'label' => 'Toggle Text',
                    'description' => 'Enter the clickable text that will trigger the popup window.',
                    'placeholder' => 'Get in Touch'
                ],
                'toggleicon' => [
                    'type' => 'input.icon',
                    'label' => 'Icon',
                    'description' => 'Select an icon to be placed in front of the toggle text.'
                ],
                'apikey' => [
                    'type' => 'input.text',
                    'label' => 'Google Map API Key',
                    'description' => 'If you are using the Google Maps API on localhost or your domain was not active prior to June 22nd 2016, the Map will require a key in order to work.'
                ],
                'width' => [
                    'type' => 'input.text',
                    'label' => 'Map Width',
                    'description' => 'Set the map width in pixels. Default is \'800px\'.',
                    'default' => '800px'
                ],
                'height' => [
                    'type' => 'input.text',
                    'label' => 'Map Height',
                    'description' => 'Set the map height in pixels. Default is \'500px\'.',
                    'default' => '500px'
                ],
                'maptype' => [
                    'type' => 'select.select',
                    'label' => 'Map Type',
                    'description' => 'Select the map type.',
                    'placeholder' => 'Select...',
                    'default' => 'ROADMAP',
                    'options' => [
                        'ROADMAP' => 'Roadmap',
                        'SATELLITE' => 'Satellite',
                        'HYBRID' => 'Hybrid',
                        'TERRAIN' => 'Terrain'
                    ]
                ],
                'latitude' => [
                    'type' => 'input.text',
                    'label' => 'Latitude',
                    'description' => 'Enter the latitude of the location.',
                    'default' => 52.052312000000001
                ],
                'longitude' => [
                    'type' => 'input.text',
                    'label' => 'Longitude',
                    'description' => 'Enter the longitude of the location.',
                    'default' => 4.4471410000000002
                ],
                'zoom' => [
                    'type' => 'input.text',
                    'label' => 'Zoom',
                    'description' => 'Set the zoom level of the map. Should be a number between 0 and 22.',
                    'default' => 7
                ],
                'defaultmarker' => [
                    'type' => 'select.select',
                    'label' => 'Default Marker',
                    'description' => 'Select whether or not a marker for the map coordinates should be shown.',
                    'placeholder' => 'Select...',
                    'default' => 'show',
                    'options' => [
                        'show' => 'Show',
                        'hide' => 'Hide'
                    ]
                ],
                'markertext' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Info Window',
                    'description' => 'Type in the text for the marker info window.',
                    'default' => NULL
                ],
                'markerstate' => [
                    'type' => 'select.select',
                    'label' => 'Info Window onLoad',
                    'description' => 'Select the default info window state when the page is loaded.',
                    'placeholder' => 'Select...',
                    'default' => 1,
                    'options' => [
                        1 => 'Show',
                        0 => 'Hide'
                    ]
                ],
                'scrollwheel' => [
                    'type' => 'select.select',
                    'label' => 'Scrollwheel',
                    'description' => 'Enable or disable the scrollwheel map zooming. It is disabled by default.',
                    'placeholder' => 'Select...',
                    'default' => 0,
                    'options' => [
                        1 => 'Enable',
                        0 => 'Disable'
                    ]
                ],
                'dragging' => [
                    'type' => 'select.select',
                    'label' => 'Dragging',
                    'description' => 'Enable or disable the map dragging. It is enabled by default.',
                    'placeholder' => 'Select...',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enable',
                        'disabled' => 'Disable',
                        'disabledmobile' => 'Disable (Mobile Only)'
                    ]
                ],
                'markers' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Additional Markers',
                    'description' => 'Create additional markers.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.latitude' => [
                            'type' => 'input.text',
                            'label' => 'Latitude',
                            'description' => 'Enter the latitude of the location.'
                        ],
                        '.longitude' => [
                            'type' => 'input.text',
                            'label' => 'Longitude',
                            'description' => 'Enter the longitude of the location.'
                        ],
                        '.markertext' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Marker Text',
                            'description' => 'Type in the marker text.',
                            'default' => NULL
                        ],
                        '.markerstate' => [
                            'type' => 'select.select',
                            'label' => 'Info Window onLoad',
                            'description' => 'Select the default info window state when the page is loaded.',
                            'placeholder' => 'Select...',
                            'default' => 1,
                            'options' => [
                                1 => 'Show',
                                0 => 'Hide'
                            ]
                        ]
                    ]
                ],
                'snazzymaps' => [
                    'type' => 'textarea.textarea',
                    'label' => 'SnazzyMaps Style',
                    'description' => 'Paste the code snippet that you have copied from SnazzyMaps.com.'
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
                    'label' => 'Contacts Items',
                    'description' => 'Create each contact item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.value' => [
                            'type' => 'input.text',
                            'label' => 'Value'
                        ],
                        '.link' => [
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
