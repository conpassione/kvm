<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTypoScriptSetup(
    '
   module.tx_form {
       settings {
           yamlConfigurations {
               36651 = EXT:kvm/Configuration/Form/CpFormSetup.yaml
           }
       }
   }
'
);

$GLOBALS['TYPO3_CONF_VARS']['MAIL']['layoutRootPaths'][36651] = 'EXT:kvm/Resources/Private/Email/Layouts/';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['templateRootPaths'][36651] = 'EXT:kvm/Resources/Private/Email/Templates/';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['partialRootPaths'][36651] = 'EXT:kvm/Resources/Private/Email/Partials/';

$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['kvm']['logoSVG'] = 'EXT:kvm/Resources/Public/Images/Logo.svg';
