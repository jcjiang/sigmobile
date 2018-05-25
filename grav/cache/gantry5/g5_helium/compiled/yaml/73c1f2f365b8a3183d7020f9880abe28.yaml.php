<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/config/default/layout.yaml',
    'modified' => 1527269011,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1518891994
        ],
        'layout' => [
            '/navigation/' => [
                0 => [
                    0 => 'system-messages-7972'
                ],
                1 => [
                    0 => 'logo-9608 20',
                    1 => 'menu-6409 58',
                    2 => 'social-3171 22'
                ]
            ],
            '/header/' => [
                0 => [
                    0 => 'slideshow-grav-3119'
                ]
            ],
            '/intro/' => [
                0 => [
                    0 => 'system-content-3756'
                ],
                1 => [
                    0 => 'contentvertcubes-6684 75',
                    1 => 'accordion-9671 25'
                ],
                2 => [
                    0 => 'contentvertcubeslong-2097'
                ]
            ],
            '/features/' => [
                
            ],
            '/utility/' => [
                
            ],
            '/above/' => [
                
            ],
            '/testimonials/' => [
                
            ],
            '/expanded/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'aside 25' => [
                            0 => [
                                0 => 'position-position-4734'
                            ]
                        ]
                    ],
                    1 => [
                        'mainbar 50' => [
                            
                        ]
                    ],
                    2 => [
                        'sidebar 25' => [
                            0 => [
                                0 => 'position-position-3949'
                            ]
                        ]
                    ]
                ]
            ],
            '/footer/' => [
                0 => [
                    0 => 'logo-9571 10',
                    1 => 'copyright-1736 30',
                    2 => 'horizontalmenu-9034 45',
                    3 => 'totop-8670 15'
                ]
            ],
            '/offcanvas/' => [
                0 => [
                    0 => 'mobile-menu-5697'
                ]
            ]
        ],
        'structure' => [
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => 'g-flushed'
                ]
            ],
            'intro' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'features' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'testimonials' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'aside' => [
                'attributes' => [
                    'class' => ''
                ],
                'block' => [
                    'fixed' => '1'
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main'
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'attributes' => [
                    'class' => ''
                ],
                'block' => [
                    'fixed' => '1'
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'offcanvas' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ]
        ],
        'content' => [
            'logo-9608' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'url' => '',
                    'image' => 'gantry-media://sigmobile-logo.svg',
                    'svg' => ''
                ]
            ],
            'social-3171' => [
                'attributes' => [
                    'display' => 'icons_only',
                    'items' => [
                        0 => [
                            'icon' => 'fa fa-twitter fa-fw',
                            'text' => 'SIGMOBILE on Twitter',
                            'link' => 'https://twitter.com/#!/ACMSIGMOBILE',
                            'name' => 'Twitter'
                        ],
                        1 => [
                            'icon' => 'fa fa-facebook fa-fw',
                            'text' => 'SIGMOBILE on Facebook',
                            'link' => 'http://www.facebook.com/group.php?gid=48078526019',
                            'name' => 'Facebook'
                        ],
                        2 => [
                            'icon' => 'fa fa-youtube fa-fw',
                            'text' => 'SIGMOBILE Youtube channel',
                            'link' => 'https://www.youtube.com/channel/UCphR-rPFRLhsQNElk2dSbtw',
                            'name' => 'Youtube'
                        ],
                        3 => [
                            'icon' => 'fa fa-linkedin-square fa-fw',
                            'text' => 'SIGMOBILE on LinkedIn',
                            'link' => 'http://www.linkedin.com/groups?about=&gid=2574763',
                            'name' => 'Linkedin'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'g-social-header'
                ]
            ],
            'slideshow-grav-3119' => [
                'title' => 'Slideshow (Grav)',
                'attributes' => [
                    'height' => '500px',
                    'navigation' => 'arrowsvisible',
                    'animation' => 'fade',
                    'kenburns' => 'true',
                    'overlayposition' => 'bottom',
                    'article' => [
                        'filter' => [
                            'categories' => 'carousel'
                        ],
                        'limit' => [
                            'total' => '3',
                            'start' => '0'
                        ],
                        'sort' => [
                            'orderby' => 'default',
                            'ordering' => 'asc'
                        ],
                        'display' => [
                            'image' => [
                                'enabled' => 'full'
                            ],
                            'title' => [
                                'enabled' => 'shownolink'
                            ],
                            'date' => [
                                'enabled' => '',
                                'format' => 'l, F d, Y'
                            ],
                            'author' => [
                                'enabled' => ''
                            ],
                            'category' => [
                                'enabled' => ''
                            ],
                            'text' => [
                                'type' => ''
                            ],
                            'read_more' => [
                                'enabled' => ''
                            ]
                        ]
                    ],
                    'articledetails' => 'hide'
                ]
            ],
            'contentvertcubes-6684' => [
                'title' => 'Content Vertical Cubes',
                'attributes' => [
                    'css' => [
                        'class' => ''
                    ],
                    'title' => 'News',
                    'items' => [
                        0 => [
                            'image' => 'gantry-media://news/iStock-622987928.jpg',
                            'imageposition' => 'left',
                            'label' => '',
                            'title' => 'SIGMOBILE announced new leadership xxxxxxx',
                            'link' => '',
                            'linktext' => 'ssss',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'New item'
                        ],
                        1 => [
                            'image' => 'gantry-media://news/614138202.jpg',
                            'imageposition' => 'left',
                            'label' => '',
                            'title' => 'SIGMOBILE announced new leadership xxxxxxx',
                            'link' => '',
                            'linktext' => 'ssss',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'New item'
                        ],
                        2 => [
                            'image' => 'gantry-media://news/iStock-622987928.jpg',
                            'imageposition' => 'left',
                            'label' => '',
                            'title' => 'test',
                            'link' => '',
                            'linktext' => 'zzzz',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'New item'
                        ]
                    ]
                ]
            ],
            'accordion-9671' => [
                'attributes' => [
                    'mainheading' => 'Upcoming Events',
                    'collapse' => 'true',
                    'items' => [
                        0 => [
                            'title' => 'February 2018',
                            'description' => 'hewwo',
                            'class' => '',
                            'extra' => [
                                
                            ],
                            'name' => 'Month 1'
                        ],
                        1 => [
                            'title' => 'March 2018',
                            'description' => 'hewwo',
                            'class' => '',
                            'extra' => [
                                
                            ],
                            'name' => 'Month 2'
                        ],
                        2 => [
                            'title' => 'April 2018',
                            'description' => 'hewwo',
                            'class' => '',
                            'extra' => [
                                
                            ],
                            'name' => 'Month 3'
                        ],
                        3 => [
                            'title' => 'May 2018',
                            'description' => 'hewwo',
                            'class' => '',
                            'extra' => [
                                
                            ],
                            'name' => 'Month 4'
                        ],
                        4 => [
                            'title' => 'June 2018',
                            'description' => 'hewwo',
                            'class' => '',
                            'extra' => [
                                
                            ],
                            'name' => 'Month 5'
                        ],
                        5 => [
                            'title' => 'July 2018',
                            'description' => 'hewwo',
                            'class' => '',
                            'extra' => [
                                
                            ],
                            'name' => 'Month 6'
                        ],
                        6 => [
                            'title' => 'August 2018',
                            'description' => 'hewwo',
                            'class' => '',
                            'extra' => [
                                
                            ],
                            'name' => 'Month 7'
                        ],
                        7 => [
                            'title' => 'September 2018',
                            'description' => 'hewwo',
                            'class' => '',
                            'extra' => [
                                
                            ],
                            'name' => 'Month 8'
                        ],
                        8 => [
                            'title' => 'October 2018',
                            'description' => 'hewwo',
                            'class' => '',
                            'extra' => [
                                
                            ],
                            'name' => 'Month 9'
                        ],
                        9 => [
                            'title' => 'November 2018',
                            'description' => 'hewwo',
                            'class' => '',
                            'extra' => [
                                
                            ],
                            'name' => 'Month 10'
                        ],
                        10 => [
                            'title' => 'December 2018',
                            'description' => '',
                            'class' => '',
                            'extra' => [
                                
                            ],
                            'name' => 'Month 11'
                        ],
                        11 => [
                            'title' => 'January 2019',
                            'description' => '',
                            'class' => '',
                            'extra' => [
                                
                            ],
                            'name' => 'Month 12'
                        ]
                    ]
                ]
            ],
            'contentvertcubeslong-2097' => [
                'title' => 'Content Vertical Cubes Long',
                'attributes' => [
                    'css' => [
                        'class' => ''
                    ],
                    'title' => 'Research Highlights',
                    'items' => [
                        0 => [
                            'image' => 'gantry-media://research/bigstock-Beautiful-Couple-88965989copy.jpg',
                            'imageposition' => 'left',
                            'label' => '',
                            'title' => '',
                            'link' => '',
                            'linktext' => '&rarr;',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'New item'
                        ],
                        1 => [
                            'image' => 'gantry-media://research/bigstock-Beautiful-Couple-88965989copy.jpg',
                            'imageposition' => 'left',
                            'label' => '',
                            'title' => '',
                            'link' => '',
                            'linktext' => '&rarr;',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'New item'
                        ],
                        2 => [
                            'image' => 'gantry-media://research/bigstock-Beautiful-Couple-88965989copy.jpg',
                            'imageposition' => 'left',
                            'label' => '',
                            'title' => '',
                            'link' => '',
                            'linktext' => '&rarr;',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'New item'
                        ],
                        3 => [
                            'image' => 'gantry-media://research/bigstock-Beautiful-Couple-88965989copy.jpg',
                            'imageposition' => 'left',
                            'label' => '',
                            'title' => '',
                            'link' => '',
                            'linktext' => '&rarr;',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'New item'
                        ],
                        4 => [
                            'image' => 'gantry-media://research/bigstock-Beautiful-Couple-88965989copy.jpg',
                            'imageposition' => 'left',
                            'label' => '',
                            'title' => '',
                            'link' => '',
                            'linktext' => '&rarr;',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'New item'
                        ]
                    ]
                ]
            ],
            'position-position-4734' => [
                'title' => 'Aside',
                'attributes' => [
                    'key' => 'aside'
                ]
            ],
            'position-position-3949' => [
                'title' => 'Sidebar',
                'attributes' => [
                    'key' => 'sidebar'
                ]
            ],
            'logo-9571' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'url' => '',
                    'image' => 'gantry-media://SIGMOBILE_Logo.svg',
                    'svg' => ''
                ]
            ],
            'horizontalmenu-9034' => [
                'title' => 'Horizontal Menu',
                'attributes' => [
                    'items' => [
                        0 => [
                            'text' => 'Contact Us',
                            'link' => '',
                            'name' => 'Contact Us'
                        ]
                    ]
                ]
            ],
            'totop-8670' => [
                'title' => 'To Top'
            ]
        ]
    ]
];
