<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_accordion'] = 'tx_mfcontent_accordion';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_buttonlink'] = 'tx_mfcontent_buttonlink';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_card'] = 'tx_mfcontent_card';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_gallery_lightbox'] = 'tx_mfcontent_gallery_lightbox';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_gallery_simple'] = 'tx_mfcontent_gallery_simple';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_header_hero'] = 'tx_mfcontent_header_hero';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_header_image'] = 'tx_mfcontent_header_image';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_header_slider'] = 'tx_mfcontent_header_slider';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_icon_infobox'] = 'tx_mfcontent_icon_infobox';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_info_numbers'] = 'tx_mfcontent_info_numbers';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_sm_footernavi'] = 'tx_mfcontent_sm_footernavi';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_tabbed_content'] = 'tx_mfcontent_tabbed_content';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_teaserbox'] = 'tx_mfcontent_teaserbox';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_text'] = 'tx_mfcontent_text';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mfcontent_text_with_image'] = 'tx_mfcontent_text_with_image';
$tempColumns = array (
  'tx_mfcontent_accordion_items' => 
  array (
    'config' => 
    array (
      'appearance' => 
      array (
        'collapseAll' => '1',
        'enabledControls' => 
        array (
          'dragdrop' => '1',
        ),
        'levelLinksPosition' => 'top',
        'showAllLocalizationLink' => '1',
        'showPossibleLocalizationRecords' => '1',
        'showRemovedLocalizationRecords' => '1',
        'showSynchronizationLink' => '1',
        'useSortable' => '1',
      ),
      'foreign_field' => 'parentid',
      'foreign_sortby' => 'sorting',
      'foreign_table' => 'tx_mfcontent_accordion_items',
      'foreign_table_field' => 'parenttable',
      'minitems' => '1',
      'type' => 'inline',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_accordion_items',
  ),
  'tx_mfcontent_buttonlink' => 
  array (
    'config' => 
    array (
      'eval' => 'required',
      'fieldControl' => 
      array (
        'linkPopup' => 
        array (
          'options' => 
          array (
            'blindLinkOptions' => 'folder',
            'title' => 'Link',
            'windowOpenParameters' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
          ),
        ),
      ),
      'renderType' => 'inputLink',
      'softref' => 'typolink',
      'type' => 'input',
      'wizards' => 
      array (
        'link' => 
        array (
          'icon' => 'actions-wizard-link',
        ),
      ),
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_buttonlink',
  ),
  'tx_mfcontent_buttonlink_internal' => 
  array (
    'config' => 
    array (
      'eval' => 'required',
      'fieldControl' => 
      array (
        'linkPopup' => 
        array (
          'options' => 
          array (
            'blindLinkOptions' => 'mail,folder,url',
            'title' => 'Link',
            'windowOpenParameters' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
          ),
        ),
      ),
      'renderType' => 'inputLink',
      'softref' => 'typolink',
      'type' => 'input',
      'wizards' => 
      array (
        'link' => 
        array (
          'icon' => 'actions-wizard-link',
        ),
      ),
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_buttonlink_internal',
  ),
  'tx_mfcontent_buttonlink_options' => 
  array (
    'config' => 
    array (
      'items' => 
      array (
        0 => 
        array (
          0 => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_buttonlink_options.I.0',
          1 => '1',
        ),
        1 => 
        array (
          0 => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_buttonlink_options.I.1',
          1 => '2',
        ),
      ),
      'type' => 'radio',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_buttonlink_options',
  ),
  'tx_mfcontent_buttonlink_title' => 
  array (
    'config' => 
    array (
      'eval' => 'required,trim',
      'type' => 'input',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_buttonlink_title',
  ),
  'tx_mfcontent_header_subtitle' => 
  array (
    'config' => 
    array (
      'eval' => 'trim',
      'type' => 'input',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_header_subtitle',
  ),
  'tx_mfcontent_header_title' => 
  array (
    'config' => 
    array (
      'eval' => 'required,trim',
      'type' => 'input',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_header_title',
  ),
  'tx_mfcontent_iconinfobox_items' => 
  array (
    'config' => 
    array (
      'appearance' => 
      array (
        'collapseAll' => '1',
        'enabledControls' => 
        array (
          'dragdrop' => '1',
        ),
        'levelLinksPosition' => 'top',
        'showAllLocalizationLink' => '1',
        'showPossibleLocalizationRecords' => '1',
        'showRemovedLocalizationRecords' => '1',
        'showSynchronizationLink' => '1',
        'useSortable' => '1',
      ),
      'foreign_field' => 'parentid',
      'foreign_sortby' => 'sorting',
      'foreign_table' => 'tx_mfcontent_iconinfobox_items',
      'foreign_table_field' => 'parenttable',
      'maxitems' => '4',
      'minitems' => '1',
      'type' => 'inline',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_iconinfobox_items',
  ),
  'tx_mfcontent_infonumbers_items' => 
  array (
    'config' => 
    array (
      'appearance' => 
      array (
        'collapseAll' => '1',
        'enabledControls' => 
        array (
          'dragdrop' => '1',
        ),
        'levelLinksPosition' => 'top',
        'showAllLocalizationLink' => '1',
        'showPossibleLocalizationRecords' => '1',
        'showRemovedLocalizationRecords' => '1',
        'showSynchronizationLink' => '1',
        'useSortable' => '1',
      ),
      'foreign_field' => 'parentid',
      'foreign_sortby' => 'sorting',
      'foreign_table' => 'tx_mfcontent_infonumbers_items',
      'foreign_table_field' => 'parenttable',
      'maxitems' => '24',
      'minitems' => '1',
      'type' => 'inline',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_infonumbers_items',
  ),
  'tx_mfcontent_smfooternavi_items' => 
  array (
    'config' => 
    array (
      'appearance' => 
      array (
        'enabledControls' => 
        array (
          'dragdrop' => '1',
        ),
        'levelLinksPosition' => 'top',
      ),
      'foreign_field' => 'parentid',
      'foreign_sortby' => 'sorting',
      'foreign_table' => 'tx_mfcontent_smfooternavi_items',
      'foreign_table_field' => 'parenttable',
      'type' => 'inline',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_smfooternavi_items',
  ),
  'tx_mfcontent_svg_icon' => 
  array (
    'config' => 
    array (
      'type' => 'inline',
      'foreign_table' => 'sys_file_reference',
      'foreign_field' => 'uid_foreign',
      'foreign_sortby' => 'sorting_foreign',
      'foreign_table_field' => 'tablenames',
      'foreign_match_fields' => 
      array (
        'fieldname' => 'tx_mfcontent_svg_icon',
      ),
      'foreign_label' => 'uid_local',
      'foreign_selector' => 'uid_local',
      'overrideChildTca' => 
      array (
        'columns' => 
        array (
          'uid_local' => 
          array (
            'config' => 
            array (
              'appearance' => 
              array (
                'elementBrowserType' => 'file',
                'elementBrowserAllowed' => 'svg',
              ),
            ),
          ),
        ),
        'types' => 
        array (
          0 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          1 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          2 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          3 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          4 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          5 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
        ),
      ),
      'filter' => 
      array (
        0 => 
        array (
          'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
          'parameters' => 
          array (
            'allowedFileExtensions' => 'svg',
          ),
        ),
      ),
      'appearance' => 
      array (
        'useSortable' => 'tx_mfcontent_svg_icon',
        'headerThumbnail' => 
        array (
          'field' => 'uid_local',
          'width' => '45',
          'height' => '45c',
        ),
        'enabledControls' => 
        array (
          'info' => 'tx_mfcontent_svg_icon',
          'new' => false,
          'dragdrop' => 'tx_mfcontent_svg_icon',
          'sort' => false,
          'hide' => 'tx_mfcontent_svg_icon',
          'delete' => 'tx_mfcontent_svg_icon',
        ),
        'fileUploadAllowed' => '1',
      ),
      'maxitems' => '1',
      'minitems' => '0',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_svg_icon',
  ),
  'tx_mfcontent_tabbedcontent_items' => 
  array (
    'config' => 
    array (
      'appearance' => 
      array (
        'collapseAll' => '1',
        'enabledControls' => 
        array (
          'dragdrop' => '1',
        ),
        'levelLinksPosition' => 'top',
        'showAllLocalizationLink' => '1',
        'showPossibleLocalizationRecords' => '1',
        'showRemovedLocalizationRecords' => '1',
        'showSynchronizationLink' => '1',
        'useSortable' => '1',
      ),
      'foreign_field' => 'parentid',
      'foreign_sortby' => 'sorting',
      'foreign_table' => 'tx_mfcontent_tabbedcontent_items',
      'foreign_table_field' => 'parenttable',
      'minitems' => '1',
      'type' => 'inline',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_tabbedcontent_items',
  ),
  'tx_mfcontent_title' => 
  array (
    'config' => 
    array (
      'eval' => 'required,trim',
      'type' => 'input',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.tx_mfcontent_title',
  ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._mfcontent_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_accordion',
    'mfcontent_accordion',
    'tx_mfcontent_accordion',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_buttonlink',
    'mfcontent_buttonlink',
    'tx_mfcontent_buttonlink',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_card',
    'mfcontent_card',
    'tx_mfcontent_card',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_gallery_lightbox',
    'mfcontent_gallery_lightbox',
    'tx_mfcontent_gallery_lightbox',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_gallery_simple',
    'mfcontent_gallery_simple',
    'tx_mfcontent_gallery_simple',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_header_hero',
    'mfcontent_header_hero',
    'tx_mfcontent_header_hero',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_header_image',
    'mfcontent_header_image',
    'tx_mfcontent_header_image',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_header_slider',
    'mfcontent_header_slider',
    'tx_mfcontent_header_slider',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_icon_infobox',
    'mfcontent_icon_infobox',
    'tx_mfcontent_icon_infobox',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_info_numbers',
    'mfcontent_info_numbers',
    'tx_mfcontent_info_numbers',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_sm_footernavi',
    'mfcontent_sm_footernavi',
    'tx_mfcontent_sm_footernavi',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_tabbed_content',
    'mfcontent_tabbed_content',
    'tx_mfcontent_tabbed_content',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_teaserbox',
    'mfcontent_teaserbox',
    'tx_mfcontent_teaserbox',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_text',
    'mfcontent_text',
    'tx_mfcontent_text',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:mf_content/Resources/Private/Language/locallang_db.xlf:tt_content.CType.mfcontent_text_with_image',
    'mfcontent_text_with_image',
    'tx_mfcontent_text_with_image',
];
$tempTypes = array (
  'mfcontent_accordion' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_mfcontent_accordion_items,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
  'mfcontent_buttonlink' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_mfcontent_buttonlink,tx_mfcontent_buttonlink_title,tx_mfcontent_buttonlink_options,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
  'mfcontent_card' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,image,bodytext,tx_mfcontent_buttonlink,tx_mfcontent_buttonlink_title,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
  'mfcontent_gallery_lightbox' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
  'mfcontent_gallery_simple' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
  'mfcontent_header_hero' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,image,tx_mfcontent_svg_icon,tx_mfcontent_header_title,tx_mfcontent_header_subtitle,tx_mfcontent_buttonlink,tx_mfcontent_buttonlink_title,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
  'mfcontent_header_image' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,image,tx_mfcontent_header_title,tx_mfcontent_header_subtitle,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
  'mfcontent_header_slider' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,image,tx_mfcontent_header_title,tx_mfcontent_header_subtitle,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
  'mfcontent_icon_infobox' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_mfcontent_iconinfobox_items,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
  'mfcontent_info_numbers' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_mfcontent_infonumbers_items,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
  'mfcontent_sm_footernavi' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_mfcontent_smfooternavi_items,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
  'mfcontent_tabbed_content' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_mfcontent_tabbedcontent_items,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
  'mfcontent_teaserbox' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,image,tx_mfcontent_title,tx_mfcontent_buttonlink_internal,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
  'mfcontent_text' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,bodytext,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
  'mfcontent_text_with_image' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,bodytext,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
);
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'mf_content',
    'Configuration/TypoScript/',
    'mf_content'
);

});

