<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/chart.yaml',
    'modified' => 1524404430,
    'data' => [
        'name' => 'Chart',
        'description' => 'Display Chart.',
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
                    'description' => 'Globally enable Chart particles.',
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
                                'width' => [
                                    'type' => 'input.text',
                                    'label' => 'Width',
                                    'description' => 'Set the chart width in pixels (do NOT type in \'px\', enter just the digits). Default is \'550\'.',
                                    'default' => 550
                                ],
                                'height' => [
                                    'type' => 'input.text',
                                    'label' => 'Height',
                                    'description' => 'Set the chart heigh in pixels (do NOT type in \'px\', enter just the digits). Default is \'550\'.',
                                    'default' => 550
                                ],
                                'fullwidth' => [
                                    'type' => 'enable.enable',
                                    'label' => 'Fullwidth',
                                    'description' => 'Set the chart width to be 100% of the container width. The chart height will be automatically recalculated so it keeps the original aspect ratio (width/height).',
                                    'default' => 1
                                ],
                                'charttype' => [
                                    'type' => 'select.select',
                                    'label' => 'Chart Type',
                                    'description' => 'Select the chart type.',
                                    'placeholder' => 'Select...',
                                    'default' => 'line',
                                    'options' => [
                                        'line' => 'Line',
                                        'bar' => 'Bar',
                                        'radar' => 'Radar',
                                        'polarArea' => 'Polar Area',
                                        'pie' => 'Pie',
                                        'doughnut' => 'Doughnut'
                                    ]
                                ],
                                'charttitletext' => [
                                    'type' => 'input.text',
                                    'label' => 'Chart Title',
                                    'description' => 'Type in the chart title.',
                                    'placeholder' => 'Enter Title',
                                    'default' => ''
                                ],
                                'charttitleposition' => [
                                    'type' => 'select.select',
                                    'label' => 'Chart Title Position',
                                    'description' => 'Select the chart title position.',
                                    'placeholder' => 'Select...',
                                    'default' => 'top',
                                    'options' => [
                                        'top' => 'Top',
                                        'bottom' => 'Bottom',
                                        'left' => 'Left',
                                        'right' => 'Right'
                                    ]
                                ],
                                'chartlegendposition' => [
                                    'type' => 'select.select',
                                    'label' => 'Chart Legend Position',
                                    'description' => 'Select the chart legend position.',
                                    'placeholder' => 'Select...',
                                    'default' => 'top',
                                    'options' => [
                                        'top' => 'Top',
                                        'bottom' => 'Bottom',
                                        'left' => 'Left',
                                        'right' => 'Right',
                                        'hide' => 'Hide'
                                    ]
                                ],
                                'labels' => [
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Labels',
                                    'description' => 'Create each label to display.<br /><br /><strong>Line</strong>, <strong>Bar</strong> and <strong>Radar</strong> - labels are the data points on the x axis, for example the days of the week or the months in the year. You do need to create \'Datasets\' as well.<br /><br /><strong>Polar Area</strong>, <strong>Pie</strong> and <strong>Doughnut</strong> - labels are the names of the pieces. You do NOT need to create \'Datasets\'.',
                                    'value' => 'name',
                                    'ajax' => true,
                                    'fields' => [
                                        '.labelname' => [
                                            'type' => 'input.text',
                                            'label' => 'Label Name',
                                            'description' => 'Type in the label name.'
                                        ],
                                        '.labeldata' => [
                                            'type' => 'container.set',
                                            'label' => 'Polar Area, Pie and Doughnut Settings',
                                            'fields' => [
                                                '.data' => [
                                                    'type' => 'input.text',
                                                    'label' => 'Data',
                                                    'description' => 'Type in the label data value. It must be a number.',
                                                    'default' => ''
                                                ],
                                                '.backgroundcolor' => [
                                                    'type' => 'input.colorpicker',
                                                    'description' => 'Select the fill color for the label/piece.',
                                                    'label' => 'Background Color',
                                                    'default' => '#666666'
                                                ],
                                                '.bordercolor' => [
                                                    'type' => 'input.colorpicker',
                                                    'description' => 'Select the border color for the label/piece.',
                                                    'label' => 'Border Color',
                                                    'default' => '#ffffff'
                                                ],
                                                '.borderwidth' => [
                                                    'type' => 'input.text',
                                                    'label' => 'Border Width',
                                                    'description' => 'Set the border width in pixels for the label/piece. Default is \'2\'.',
                                                    'default' => 2
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'datasets' => [
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Datasets',
                                    'description' => 'Create each dataset to display.<br /><br />Datasets contain the data needed for the <strong>Line</strong>, <strong>Bar</strong> and <strong>Radar</strong> charts.',
                                    'value' => 'name',
                                    'ajax' => true,
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'input.text',
                                            'label' => 'Title',
                                            'description' => 'Type in the title.'
                                        ],
                                        '.data' => [
                                            'type' => 'input.text',
                                            'label' => 'Data',
                                            'description' => 'Type in the data value. It must be an array of numbers separated with a comma (i.e. 1,2,3,4,5). Every element in the array corresponds to a \'Label\'. If you have 7 \'Labels\', for each day of the week, then your \'Data\' array must contain 7 elements, for example: 5, 33, 42, 16, 26, 8, 50',
                                            'default' => ''
                                        ],
                                        '.backgroundcolor' => [
                                            'type' => 'input.colorpicker',
                                            'description' => 'Select the fill color for the element.',
                                            'label' => 'Background Color',
                                            'default' => '#666666'
                                        ],
                                        '.bordercolor' => [
                                            'type' => 'input.colorpicker',
                                            'description' => 'Select the border color for the element.',
                                            'label' => 'Border Color',
                                            'default' => 'rgba(0,0,0,0.1)'
                                        ],
                                        '.borderwidth' => [
                                            'type' => 'input.text',
                                            'label' => 'Border Width',
                                            'description' => 'Set the border width in pixels for the element. Default is \'3\'.',
                                            'default' => 3
                                        ],
                                        '.borderstyle' => [
                                            'type' => 'select.select',
                                            'description' => 'Select the border style.',
                                            'label' => 'Border Style',
                                            'placeholder' => 'Select...',
                                            'default' => 'solid',
                                            'options' => [
                                                'solid' => 'Solid',
                                                'dashed' => 'Dashed'
                                            ]
                                        ],
                                        '.pointradius' => [
                                            'type' => 'input.text',
                                            'label' => 'Point Radius',
                                            'description' => 'Set the point radius in pixels for the element. Default is \'3\'. This setting is applied to the \'Line\' and \'Radius\' charts only.',
                                            'default' => 3
                                        ],
                                        '.pointstyle' => [
                                            'type' => 'select.select',
                                            'label' => 'Point Style',
                                            'description' => 'Select the point style. This setting is applied to the \'Line\' and \'Radius\' charts only.',
                                            'placeholder' => 'Select...',
                                            'default' => 'circle',
                                            'options' => [
                                                'circle' => 'Circle',
                                                'triangle' => 'Triangle',
                                                'rect' => 'Rectangle',
                                                'rectRot' => 'RectRot',
                                                'cross' => 'Cross',
                                                'crossRot' => 'CrossRot',
                                                'star' => 'Star',
                                                'line' => 'Line',
                                                'dash' => 'Dash'
                                            ]
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
                        ],
                        '_tab_styling' => [
                            'label' => 'Styling Settings',
                            'fields' => [
                                'fontcolor' => [
                                    'type' => 'input.colorpicker',
                                    'description' => 'Select the font color for the chart.',
                                    'label' => 'Font Color',
                                    'default' => '#666666'
                                ],
                                'fontsize' => [
                                    'type' => 'input.text',
                                    'label' => 'Font Size',
                                    'description' => 'Set the font size for the chart in pixels (do NOT type in \'px\', enter just the digits). Default is \'12\'.',
                                    'default' => 12
                                ],
                                'fontstyle' => [
                                    'type' => 'select.select',
                                    'label' => 'Font Style',
                                    'description' => 'Select the font style for the chart.',
                                    'placeholder' => 'Select...',
                                    'default' => 'normal',
                                    'options' => [
                                        'bold' => 'Bold',
                                        'normal' => 'Normal'
                                    ]
                                ],
                                'xaxes' => [
                                    'type' => 'select.select',
                                    'label' => 'x Axes',
                                    'description' => 'Select if the x Axes should be shown or not.',
                                    'placeholder' => 'Select...',
                                    'default' => 'true',
                                    'options' => [
                                        'true' => 'Show',
                                        'false' => 'Hide'
                                    ]
                                ],
                                'xaxescolor' => [
                                    'type' => 'input.colorpicker',
                                    'description' => 'Select the x Axes color for the chart.',
                                    'label' => 'x Axes Color',
                                    'default' => 'rgba(0, 0, 0, 0.1)'
                                ],
                                'yaxes' => [
                                    'type' => 'select.select',
                                    'label' => 'y Axes',
                                    'description' => 'Select if the y Axes should be shown or not.',
                                    'placeholder' => 'Select...',
                                    'default' => 'true',
                                    'options' => [
                                        'true' => 'Show',
                                        'false' => 'Hide'
                                    ]
                                ],
                                'yaxescolor' => [
                                    'type' => 'input.colorpicker',
                                    'description' => 'Select the y Axes color for the chart.',
                                    'label' => 'y Axes Color',
                                    'default' => 'rgba(0, 0, 0, 0.1)'
                                ],
                                'titlefontsize' => [
                                    'type' => 'input.text',
                                    'label' => 'Chart Title Size',
                                    'description' => 'Set the font size for the chart title in pixels (do NOT type in \'px\', enter just the digits). Default is \'12\'.',
                                    'default' => 12
                                ],
                                'titlefontstyle' => [
                                    'type' => 'select.select',
                                    'label' => 'Chart Title Style',
                                    'description' => 'Select the font style for the chart title.',
                                    'placeholder' => 'Select...',
                                    'default' => 'bold',
                                    'options' => [
                                        'bold' => 'Bold',
                                        'normal' => 'Normal'
                                    ]
                                ],
                                'titlefontcolor' => [
                                    'type' => 'input.colorpicker',
                                    'description' => 'Select the font color for the chart title.',
                                    'label' => 'Chart Title Color',
                                    'default' => '#666666'
                                ],
                                'legendfontsize' => [
                                    'type' => 'input.text',
                                    'label' => 'Chart Legend Size',
                                    'description' => 'Set the font size for the chart legend in pixels (do NOT type in \'px\', enter just the digits). Default is \'12\'.',
                                    'default' => 12
                                ],
                                'legendfontstyle' => [
                                    'type' => 'select.select',
                                    'label' => 'Chart Legend Style',
                                    'description' => 'Select the font style for the chart legend.',
                                    'placeholder' => 'Select...',
                                    'default' => 'bold',
                                    'options' => [
                                        'bold' => 'Bold',
                                        'normal' => 'Normal'
                                    ]
                                ],
                                'legendfontcolor' => [
                                    'type' => 'input.colorpicker',
                                    'description' => 'Select the font color for the chart legend.',
                                    'label' => 'Chart Legend Color',
                                    'default' => '#666666'
                                ]
                            ]
                        ],
                        '_tab_feature' => [
                            'label' => 'Feature Mode',
                            'fields' => [
                                'featuremode' => [
                                    'type' => 'enable.enable',
                                    'description' => 'Enable or disable the \'Feature\' mode (Title, Description and a Button next to the Chart).',
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
                                        'right' => 'Chart on the right',
                                        'left' => 'Chart on the left'
                                    ]
                                ],
                                'chartwidth' => [
                                    'type' => 'input.text',
                                    'label' => 'Chart Width',
                                    'description' => 'Type in the width of the chart block in percentage. It must be a digit between 0 and 100. The default is \'50\'.',
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
