<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/page-preloader.yaml',
    'modified' => 1524404432,
    'data' => [
        'name' => 'Page Preloader',
        'description' => 'Configure Page Preloader.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Page Preloader particles.',
                    'default' => true
                ],
                'bgcolor' => [
                    'type' => 'input.colorpicker',
                    'description' => 'Select the Background Color of the whole overlay.',
                    'label' => 'Background Color',
                    'default' => '#ffffff'
                ],
                'spinnercolor' => [
                    'type' => 'input.colorpicker',
                    'description' => 'Select the Spinner Color.',
                    'label' => 'Spinner Color',
                    'default' => '#439a86'
                ],
                'spinner' => [
                    'type' => 'select.select',
                    'label' => 'Spinner',
                    'description' => 'Select the spinner to use.',
                    'placeholder' => 'Select...',
                    'default' => 1,
                    'options' => [
                        1 => 'Spinner 1',
                        2 => 'Spinner 2',
                        3 => 'Spinner 3',
                        4 => 'Spinner 4',
                        5 => 'Spinner 5',
                        6 => 'Spinner 6',
                        7 => 'Spinner 7',
                        8 => 'Spinner 8',
                        9 => 'Spinner 9',
                        10 => 'Spinner 10',
                        11 => 'Spinner 11'
                    ]
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Custom Image',
                    'description' => 'Select a custom image that will be used instead of the spinners. It can be a static PNG or JPG or you can use an animated GIF or SVG.'
                ],
                'imagewidth' => [
                    'type' => 'input.text',
                    'label' => 'Image Width',
                    'description' => 'Enter the width of your \'Custom Image\' (do NOT type in \'px\', enter just the digits). It is needed so the image can be properly centered.'
                ],
                'imageheight' => [
                    'type' => 'input.text',
                    'label' => 'Image Height',
                    'description' => 'Enter the height of your \'Custom Image\' in pixels (do NOT type in \'px\', enter just the digits). It is needed so the image can be properly centered.'
                ]
            ]
        ]
    ]
];
