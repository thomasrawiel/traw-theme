<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_address', [
    'product_groups' => [
        'label' => 'Product Groups',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_trawtheme_domain_model_productgroup',
            'MM' => 'tt_address_productgroup_mm',
            'default' => 0,
            'size' => 10,
            'autoSizeMax' => 30,
            'maxitems' => 3,
            'multiple' => true,
            'fieldControl' => [
                'editPopup' => [
                    'disabled' => false,
                ],
                'addRecord' => [
                    'disabled' => false,
                ],
                'listModule' => [
                    'disabled' => true,
                ],
            ],
        ]
    ]
]);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_address',
    'product_groups',
    '',
    'before:name'
);