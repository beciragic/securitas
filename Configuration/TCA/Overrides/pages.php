<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'securitas';

    /**
     * Default PageTS for Securitas
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'Securitas'
    );
});
