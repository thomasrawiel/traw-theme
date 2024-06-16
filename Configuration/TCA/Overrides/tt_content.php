<?php

defined('TYPO3') || die('Access denied.');

call_user_func(function ($_EXTKEY = 'traw_theme', $table = 'tt_content') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItemGroup($table, 'CType', $_EXTKEY, 'TRAW-Theme');
    $cTypes = [
        [
            'config' => [
                'label' => 'Extension loaded',
                'value' => 'traw_extloaded',
                'icon' => 'module-extensionmanager',
                'group' => $_EXTKEY,
            ],
            'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                            --palette--;;general,
                            --palette--;;headers,
                            pi_flexform,
                            bodytext,
                            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                            --palette--;;frames,
                            --palette--;;appearanceLinks,
                            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                            --palette--;;language,
                            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                            --palette--;;hidden,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,
                            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,,
                            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended
                            ',
            'columnsOverrides' => [
                'bodytext' => [
                    'config' => [
                        'enableRichtext' => true,
                    ],
                ],
            ],
            'flexform' => 'FILE:EXT:traw_theme/Configuration/Flexform/ExtensionLoaded.xml',
        ],
        [
            'config' => [
                'label' => 'Date Range',
                'value' => 'traw_daterange',
                'icon' => 'form-date-picker',
                'group' => $_EXTKEY,
            ],
            'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                            --palette--;;general,
                            --palette--;;headers,
                            --palette--;;dateRange,
                            bodytext,
                            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                            --palette--;;frames,
                            --palette--;;appearanceLinks,
                            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                            --palette--;;language,
                            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                            --palette--;;hidden,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,
                            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,,
                            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended
                            ',
            'columnsOverrides' => [
                'bodytext' => [
                    'config' => [
                        'enableRichtext' => true,
                    ],
                ],
            ],
        ],

    ];

    foreach ($cTypes as $cType) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem($table, 'CType', $cType['config']);
        $GLOBALS['TCA'][$table]['ctrl']['typeicon_classes'][$cType['config']['value']] = $cType['config']['icon'];
        if (!empty($cType['showitem'])) {
            $GLOBALS['TCA'][$table]['types'][$cType['config']['value']]['showitem'] = $cType['showitem'];
        }
        if (!empty($cType['columnsOverrides'])) {
            $GLOBALS['TCA'][$table]['types'][$cType['config']['value']]['columnsOverrides'] = $cType['columnsOverrides'];
        }
        if (!empty($cType['flexform'])) {
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('', $cType['flexform'], $cType['config']['value']);
        }
    }

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, [
        'dateRangeStart' => [
            'label' => 'Date range begin',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
            ],
        ],
        'dateRangeEnd' => [
            'label' => 'Date range begin',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
            ],
        ],
    ]);
    $GLOBALS['TCA'][$table]['palettes']['dateRange'] =[
        'label' => 'Date range',
        'showitem' => 'dateRangeStart, dateRangeEnd',
    ];

});