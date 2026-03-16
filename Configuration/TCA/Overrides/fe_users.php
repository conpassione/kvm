<?php

declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function (): void {
    $additionalColumns = [
        'wuid' => [
            'exclude' => true,
            'label' => 'Webling Member-ID',
            'config' => [
                'type' => 'number',
                'size' => '20',
                'nullable' => true,
                'autocomplete' => true,
                'default' => '0',
            ]
        ]
    ];
    ExtensionManagementUtility::addTCAcolumns('fe_users', $additionalColumns);
    ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'wuid', '', 'after:status');

    /* Add additional Items to status field */
    /*    $myitem = [
            'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:fe_users.column.status.2.label',
            'value' => 2,
        ];
        $GLOBALS['TCA']['fe_users']['columns']['status']['config']['items'][] = $myitem;
        $GLOBALS['TCA']['fe_users']['columns']['status']['config']['items'][0]['label'] = 'overwritetest';*/
});
