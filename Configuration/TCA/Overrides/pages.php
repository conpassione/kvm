<?php

declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function(): void {
    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
        'label' => 'LLL:EXT:kvm/Resources/Private/Language/locallang_db.xlf:pages.label.event',
        'icon' => 'tx-conpassione-event',
        'value' => 'event'
    ];
    $GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-event'] = 'tx-conpassione-event';

    // Bugfix for content-blocks
    // List all pages ot add the standard fields
    $doktypes = '36650021';

    // update TCA (add abstract) to unify BE for Standard and Custom Pages
    ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        'abstract',
        $doktypes,
        'before:keywords'
    );

    // add fields to palette editorial
    ExtensionManagementUtility::addFieldsToPalette(
        'pages',
        'editorial',
        'author, author_email, lastUpdated'
    );

    // add editorial palette to pages
    ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial',
        $doktypes,
        'after:palette:metatags'
    );

    // add media palette to pages
    ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        'media',
        $doktypes,
        'before:tsconfig_includes'
    );

    // add fields to palette layout
    ExtensionManagementUtility::addFieldsToPalette(
        'pages',
        'layout',
        'layout,newUntil'
    );

    // add layout palette to pages
    ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;layout',
        $doktypes,
        'before:palette:backend_layout'
    );
});
