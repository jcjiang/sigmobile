<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/gadgets.yaml',
    'modified' => 1524404438,
    'data' => [
        'name' => 'Gadgets',
        'description' => 'Display Gadgets.',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Gadgets particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong><br /><br /><strong>Joomla:</strong> Go to the Module Manager and make sure your Login module is published in the "<strong>modal-login</strong>" position and your Search module in the "<strong>modal-search</strong>" position.<br /><br />Once you enable <strong>"Offcanvas Toggle"</strong>, it hides the original toggle button for the viewport size specified under "Styles" tab -> "Breakpoints" -> "Mobile Menu".'
                ],
                'display' => [
                    'type' => 'container.set',
                    'label' => 'Enable',
                    'fields' => [
                        '.login' => [
                            'type' => 'enable.enable',
                            'label' => 'Login',
                            'default' => 1
                        ],
                        '.search' => [
                            'type' => 'enable.enable',
                            'label' => 'Search',
                            'default' => 1
                        ],
                        '.contact' => [
                            'type' => 'enable.enable',
                            'label' => 'Get in Touch',
                            'default' => 1
                        ],
                        '.offcanvas' => [
                            'type' => 'enable.enable',
                            'label' => 'Offcanvas Toggle',
                            'default' => 1
                        ]
                    ]
                ],
                'login' => [
                    'type' => 'container.set',
                    'label' => 'Login',
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon',
                            'description' => 'Select the icon for the Login button.',
                            'default' => 'fa fa-user'
                        ],
                        '.text' => [
                            'type' => 'input.text',
                            'label' => 'Text',
                            'description' => 'Type in the text for the Login button.',
                            'placeholder' => 'Login'
                        ],
                        '.width' => [
                            'type' => 'input.text',
                            'label' => 'Width',
                            'description' => 'Enter the modal window width in pixels. The default value is \'350px\'.',
                            'default' => '350px'
                        ],
                        '.links' => [
                            'type' => 'select.select',
                            'label' => 'Additional Links',
                            'description' => 'Select if the additional links at the bottom should be shown.',
                            'placeholder' => 'Select...',
                            'default' => 'show',
                            'options' => [
                                'show' => 'Show',
                                'hide' => 'Hide'
                            ]
                        ]
                    ]
                ],
                'search' => [
                    'type' => 'container.set',
                    'label' => 'Search',
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon',
                            'description' => 'Select the icon for the Search button.',
                            'default' => 'fa fa-search'
                        ],
                        '.text' => [
                            'type' => 'input.text',
                            'label' => 'Text',
                            'description' => 'Type in the text for the Search button.',
                            'placeholder' => 'Search'
                        ]
                    ]
                ],
                'touch' => [
                    'type' => 'container.set',
                    'label' => 'Get in Touch',
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon',
                            'description' => 'Select the icon for the \'Get in Touch\' button.',
                            'default' => 'fa fa-map-o'
                        ],
                        '.text' => [
                            'type' => 'input.text',
                            'label' => 'Text',
                            'description' => 'Type in the text for the \'Get in Touch\' button.',
                            'placeholder' => 'Contacts'
                        ],
                        '.apikey' => [
                            'type' => 'input.text',
                            'label' => 'Google Map API Key',
                            'description' => 'If you are using the Google Maps API on localhost or your domain was not active prior to June 22nd 2016, the Map will require a key in order to work.'
                        ],
                        '.width' => [
                            'type' => 'input.text',
                            'label' => 'Map Width',
                            'description' => 'Set the map width in pixels. Default is \'800px\'.',
                            'default' => '800px'
                        ],
                        '.height' => [
                            'type' => 'input.text',
                            'label' => 'Map Height',
                            'description' => 'Set the map height in pixels. Default is \'500px\'.',
                            'default' => '500px'
                        ],
                        '.maptype' => [
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
                        '.latitude' => [
                            'type' => 'input.text',
                            'label' => 'Latitude',
                            'description' => 'Enter the latitude of the location.',
                            'default' => 52.052312000000001
                        ],
                        '.longitude' => [
                            'type' => 'input.text',
                            'label' => 'Longitude',
                            'description' => 'Enter the longitude of the location.',
                            'default' => 4.4471410000000002
                        ],
                        '.zoom' => [
                            'type' => 'input.text',
                            'label' => 'Zoom',
                            'description' => 'Set the zoom level of the map. Should be a number between 0 and 22.',
                            'default' => 7
                        ],
                        '.defaultmarker' => [
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
                        '.markertext' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Info Window',
                            'description' => 'Type in the text for the marker info window.',
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
                        ],
                        '.scrollwheel' => [
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
                        '.dragging' => [
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
                        '.markers' => [
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
                        '.snazzymaps' => [
                            'type' => 'textarea.textarea',
                            'label' => 'SnazzyMaps Style',
                            'description' => 'Paste the code snippet that you have copied from SnazzyMaps.com.'
                        ],
                        '.items' => [
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
                                ]
                            ]
                        ]
                    ]
                ],
                'offcanvas' => [
                    'type' => 'container.set',
                    'label' => 'Offcanvas',
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon',
                            'description' => 'Select the icon for the Offcanvas Toggle button.',
                            'default' => 'fa fa-bars'
                        ],
                        '.text' => [
                            'type' => 'input.text',
                            'label' => 'Text',
                            'description' => 'Type in the text for the Offcanvas Toggle button.',
                            'placeholder' => 'Offcanvas'
                        ]
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
