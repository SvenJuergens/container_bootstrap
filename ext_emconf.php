<?php


$EM_CONF[$_EXTKEY] = [
    'title' => 'Container Bootstrap',
    'description' => 'Bootstrap 4 container grid elements based on "b13/container" extension.',
    'category' => 'misc',
    'author' => 'Sven Juergens',
    'author_email' => '',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.18-10.4.99',
            'container' => '1.0.0-1.99.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];

