<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

// Register content element icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'tx_mfcontent_accordion',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'align-justify',
    ]
);
$iconRegistry->registerIcon(
    'tx_mfcontent_buttonlink',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'external-link',
    ]
);
$iconRegistry->registerIcon(
    'tx_mfcontent_card',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'sticky-note-o',
    ]
);
$iconRegistry->registerIcon(
    'tx_mfcontent_gallery_lightbox',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'th',
    ]
);
$iconRegistry->registerIcon(
    'tx_mfcontent_gallery_simple',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'th',
    ]
);
$iconRegistry->registerIcon(
    'tx_mfcontent_header_hero',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'image',
    ]
);
$iconRegistry->registerIcon(
    'tx_mfcontent_header_image',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'image',
    ]
);
$iconRegistry->registerIcon(
    'tx_mfcontent_header_slider',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'image',
    ]
);
$iconRegistry->registerIcon(
    'tx_mfcontent_icon_infobox',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'info',
    ]
);
$iconRegistry->registerIcon(
    'tx_mfcontent_info_numbers',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'dashboard',
    ]
);
$iconRegistry->registerIcon(
    'tx_mfcontent_sm_footernavi',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'twitter',
    ]
);
$iconRegistry->registerIcon(
    'tx_mfcontent_tabbed_content',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'window-maximize',
    ]
);
$iconRegistry->registerIcon(
    'tx_mfcontent_teaserbox',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'clone',
    ]
);
$iconRegistry->registerIcon(
    'tx_mfcontent_text',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'file-text-o',
    ]
);
$iconRegistry->registerIcon(
    'tx_mfcontent_text_with_image',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'file-text-o',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:mf_content/Configuration/PageTSconfig/NewContentElementWizard.ts">'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:mf_content/Configuration/PageTSconfig/BackendPreview.ts">'
);
// Add backend preview hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['mf_content'] = 
    MFContent\MfContent\Hooks\PageLayoutViewDrawItem::class;

});

