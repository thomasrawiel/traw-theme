<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TRAW Theme',
    'description' => 'Distribution to test TRAW extensions',
    'category' => 'plugin',
    'author' => 'Thomas Rawiel',
    'author_email' => 'thomas.rawiel@gmail.com',
    'state' => 'beta',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-13.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
