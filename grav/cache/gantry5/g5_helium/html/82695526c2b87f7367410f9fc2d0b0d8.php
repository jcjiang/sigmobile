<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '5b084db4394479.55819371',
    'content' => '<div id="contenttabs-1573-particle" class="g-content g-particle">            <div class="">
        
        <div class="g-contenttabs">
            <div id="g-contenttabs-contenttabs-1573" class="g-contenttabs-container">
                <ul class="g-contenttabs-tab-wrapper-container">

                    
                </ul>

                <div class="clearfix"></div>

                <ul class="g-contenttabs-content-wrapper-container">

                    
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
            </div>',
    'frameworks' => [
        'jquery' => 1
    ],
    'scripts' => [
        'head' => [
            '7d086a5c4f0772796dccea8c0fa71a5a21992c971dba6159b3a4dac7be2e00a86b064e93' => [
                ':type' => 'file',
                ':priority' => 0,
                'src' => '/user/themes/g5_helium/js/juitabs.js',
                'type' => 'text/javascript',
                'defer' => false,
                'async' => false,
                'handle' => ''
            ]
        ],
        'footer' => [
            '4f4db24a89654a87c69fac01071ad367966a341b23ac22b350397ffbf5aa74d70b0134e2' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
        jQuery(window).load(function() {
            jQuery(\'#g-contenttabs-contenttabs-1573\').tabs({
                show: {
                                        effect: \'slide\',
                    direction: \'left\',
                                        duration: 500
                }
            });
        });
    ',
                'type' => 'text/javascript'
            ]
        ]
    ]
];
