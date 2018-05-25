<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/video-background.yaml',
    'modified' => 1524404436,
    'data' => [
        'name' => 'Video Background',
        'description' => 'Add a video background to a section.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Video Background particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Create the sections that you want to add a background video to.'
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Sections',
                    'description' => 'Create each section that you want to add a background video to.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.sectionid' => [
                            'type' => 'input.text',
                            'description' => 'Enter the ID of the section that you want to add a background video to, for example \'g-showcase\'.',
                            'label' => 'Section ID'
                        ],
                        '.videoURL' => [
                            'type' => 'input.text',
                            'description' => 'Enter the YouTube video URL or just the video ID, for example \'b5x7Kitxyow\'.',
                            'label' => 'Video'
                        ],
                        '.mute' => [
                            'type' => 'select.select',
                            'label' => 'Mute Video',
                            'description' => 'Select if the video should be muted or not.',
                            'placeholder' => 'Select...',
                            'default' => 'true',
                            'options' => [
                                'true' => 'Yes',
                                'false' => 'No'
                            ]
                        ],
                        '.volume' => [
                            'type' => 'input.text',
                            'description' => 'Set the volume level of the video (if not muted). Must be a number between 1 and 100.',
                            'label' => 'Volume',
                            'default' => 50
                        ],
                        '.startat' => [
                            'type' => 'input.text',
                            'description' => 'Set the seconds the video should start at.',
                            'label' => 'Start At',
                            'default' => 0
                        ],
                        '.stopat' => [
                            'type' => 'input.text',
                            'description' => 'Set the seconds the video should stop at. If set to 0 (zero), the option will be ignored.',
                            'label' => 'Stop At',
                            'default' => 0
                        ],
                        '.loop' => [
                            'type' => 'input.text',
                            'description' => 'Set how many times the video should loop once ended.',
                            'label' => 'Loop',
                            'default' => 999
                        ],
                        '.quality' => [
                            'type' => 'select.select',
                            'label' => 'Quality',
                            'description' => 'Select the video quality.',
                            'placeholder' => 'Select...',
                            'default' => 'default',
                            'options' => [
                                'default' => 'Default',
                                'small' => 'Small',
                                'medium' => 'Medium',
                                'large' => 'Large',
                                'hd720' => 'HD720',
                                'hd1080' => 'HD1080',
                                'highres' => 'High Resolution'
                            ]
                        ],
                        '.opacity' => [
                            'type' => 'input.text',
                            'description' => 'Set the opacity of the video. Must be a number between 0 and 1, for example 0.6',
                            'label' => 'Opacity',
                            'default' => 1
                        ],
                        '.overlay' => [
                            'type' => 'input.colorpicker',
                            'description' => 'Select the overlay color. Make sure it is a transparent color (rgba), otherwise you will not see the video.',
                            'label' => 'Overlay Color',
                            'default' => 'rgba(3, 61, 90, 0.6)'
                        ],
                        '.autoplay' => [
                            'type' => 'select.select',
                            'label' => 'Enable Autoplay',
                            'description' => 'Select if the video should be played once ready.',
                            'placeholder' => 'Select...',
                            'default' => 'true',
                            'options' => [
                                'true' => 'Yes',
                                'false' => 'No'
                            ]
                        ],
                        '.blur' => [
                            'type' => 'select.select',
                            'label' => 'Stop On Blur',
                            'description' => 'Select if the the pause behavior should be activated when the window loose focus.',
                            'placeholder' => 'Select...',
                            'default' => 'false',
                            'options' => [
                                'true' => 'Yes',
                                'false' => 'No'
                            ]
                        ],
                        '.controls' => [
                            'type' => 'select.select',
                            'label' => 'Show Controls',
                            'description' => 'Select if the player controls should be shown or not.',
                            'placeholder' => 'Select...',
                            'default' => 'false',
                            'options' => [
                                'true' => 'Yes',
                                'false' => 'No'
                            ]
                        ],
                        '.logo' => [
                            'type' => 'select.select',
                            'label' => 'Show YouTube Logo',
                            'description' => 'Select if the YouTube logo and the link to the original video should be shown or not.',
                            'placeholder' => 'Select...',
                            'default' => 'false',
                            'options' => [
                                'true' => 'Yes',
                                'false' => 'No'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
