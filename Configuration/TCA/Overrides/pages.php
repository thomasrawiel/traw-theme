<?php

defined('TYPO3') || die('Access denied.');

call_user_func(function ($_EXTKEY = 'traw_theme', $table = 'pages') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $_EXTKEY,
        'Configuration/TSConfig/BackendLayouts.typoscript',
        'TRAW Theme Backend Layouts'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $_EXTKEY,
        'Configuration/TSConfig/Page.typoscript',
        'TRAW Theme Page TSConfig'
    );
});
