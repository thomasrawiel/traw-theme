<?php

defined('TYPO3') || die('Access denied.');

call_user_func(function ($_EXTKEY = 'traw_theme', $table = 'tt_content') {
    \TRAW\ContainerWrap\Configuration\Container::registerContainers(
        \TRAW\TrawTheme\Configuration\Container::getContainerConfiguration()
    );
});