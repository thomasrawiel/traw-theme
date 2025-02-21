<?php

defined('TYPO3') || die('Access denied.');

call_user_func(function ($_EXTKEY = 'traw_theme', $table = 'tt_content') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, [
        'dateRangeStart' => [
            'label' => 'Date range begin',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
            ],
        ],
        'dateRangeEnd' => [
            'label' => 'Date range end',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
            ],
        ],
        'test_field' => [
            'label' => 'My field',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Added with TCA', 'value' => 'tca-value'],
                ],
                'itemsProcFunc' => \TRAW\VhsCol\Configuration\TcaOptionsMap::class . '->addOptions',
            ],
        ],
    ]);

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes($table, 'test_field', 'traw_pipe2br', 'after:header');

    $GLOBALS['TCA'][$table]['palettes']['dateRange'] = [
        'label' => 'Date range',
        'showitem' => 'dateRangeStart, dateRangeEnd',
    ];


    $GLOBALS['TCA'][$table]['tx_vhscol_option_map'] = [
        'test_field' => [
            [
                'conditions' => [
                    'fields' => [
                        'CType' => ['traw_pipe2br'],
                        'layout' => [0],
                    ],
                ],
                'options' => [
                    ['label' => 'Added with itemsProc label', 'value' => 'itemsProc-value'],
                ],
            ],
        ],
    ];

    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('sup_header')) {
        $GLOBALS['TCA']['tt_content']['columns']['header']['config'] = array_merge_recursive(
            $GLOBALS['TCA']['tt_content']['columns']['header']['config'],
            [
                'fieldControl' => [
                    'importControl' => [
                        'renderType' => 'addIconTextField',
                    ],
                ],
            ]
        );
        $GLOBALS['TCA']['tt_content']['columns']['subheader']['config'] = array_merge_recursive(
            $GLOBALS['TCA']['tt_content']['columns']['subheader']['config'],
            [
                'fieldControl' => [
                    'importControl' => [
                        'renderType' => 'addIconTextField',
                    ],
                ],
            ]
        );
    }

});