<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('mfcontent_export, tx_mfcontent_accordion_items, tx_mfcontent_iconinfobox_items, tx_mfcontent_infonumbers_items, tx_mfcontent_items, tx_mfcontent_smfooternavi_items, tx_mfcontent_tabbedcontent_items, tx_mfcontent_undefined');

});

