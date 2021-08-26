<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility as ExtManUtil;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility as ExtUtil;

defined('TYPO3_MODE') or die();

call_user_func(static function () {

    ExtManUtil::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:wrs_pannellum/Configuration/TSConfig/contentelem.tsconfig">');

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Imaging\IconRegistry::class
    );
    $iconRegistry->registerIcon(
        'wrspannellum-view', // Icon-Identifier, z.B. tx-myext-action-preview
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:wrs_pannellum/Resources/Public/Icons/Extension.svg']
    );

    ExtUtil::configurePlugin(
        'wrs_pannellum',
        'Pannellum',
        [\Waurisch\WrsPannellum\Controller\ContentElementController::class => 'pannellum'],
        array(),
        ExtUtil::PLUGIN_TYPE_CONTENT_ELEMENT
    );

});