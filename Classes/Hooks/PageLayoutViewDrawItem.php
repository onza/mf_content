<?php
namespace MFContent\MfContent\Hooks;

use TYPO3\CMS\Backend\Form\Exception;
use TYPO3\CMS\Backend\Form\FormDataCompiler;
use TYPO3\CMS\Backend\Form\FormDataGroup\TcaDatabaseRecord;
use TYPO3\CMS\Backend\View\PageLayoutView;
use TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

class PageLayoutViewDrawItem implements PageLayoutViewDrawItemHookInterface
{
    /**
     * @var array
     */
    protected $supportedContentTypes = array (
  'mfcontent_accordion' => 'Accordion',
  'mfcontent_buttonlink' => 'Buttonlink',
  'mfcontent_card' => 'Card',
  'mfcontent_gallery_lightbox' => 'GalleryLightbox',
  'mfcontent_gallery_simple' => 'GallerySimple',
  'mfcontent_header_hero' => 'HeaderHero',
  'mfcontent_header_image' => 'HeaderImage',
  'mfcontent_header_slider' => 'HeaderSlider',
  'mfcontent_icon_infobox' => 'IconInfobox',
  'mfcontent_info_numbers' => 'InfoNumbers',
  'mfcontent_sm_footernavi' => 'SmFooternavi',
  'mfcontent_tabbed_content' => 'TabbedContent',
  'mfcontent_teaserbox' => 'Teaserbox',
  'mfcontent_text' => 'Text',
  'mfcontent_text_with_image' => 'TextWithImage',
);

    /**
     * @var StandaloneView
     */
    protected $view;

    public function __construct(StandaloneView $view = null)
    {
        $this->view = $view ?: GeneralUtility::makeInstance(StandaloneView::class);
    }

    /**
     * Preprocesses the preview rendering of a content element.
     *
     * @param PageLayoutView $parentObject
     * @param bool $drawItem
     * @param string $headerContent
     * @param string $itemContent
     * @param array $row
     */
    public function preProcess(PageLayoutView &$parentObject, &$drawItem, &$headerContent, &$itemContent, array &$row)
    {
        if (!isset($this->supportedContentTypes[$row['CType']])) {
            return;
        }
        
        $formDataGroup = GeneralUtility::makeInstance(TcaDatabaseRecord::class);
        $formDataCompiler = GeneralUtility::makeInstance(FormDataCompiler::class, $formDataGroup);
        $formDataCompilerInput = [
            'command' => 'edit',
            'tableName' => 'tt_content',
            'vanillaUid' => (int)$row['uid'],
        ];
        try {
            $result = $formDataCompiler->compile($formDataCompilerInput);
            $processedRow = $this->getProcessedData($result['databaseRow'], $result['processedTca']['columns']);
            
            $this->configureView($result['pageTsConfig'], $row['CType']);
            $this->view->assignMultiple(
                [
                    'row' => $row,
                    'processedRow' => $processedRow,
                ]
            );
    
            $itemContent = $this->view->render();
        } catch (Exception $exception) {
            $message = $GLOBALS['BE_USER']->errorMsg;
            if (empty($message)) {
                $message = $exception->getMessage() . ' ' . $exception->getCode();
            }

            $itemContent = $message;
        }
        
        $drawItem = false;
    }

    /**
     * @param array $pageTsConfig
     * @param string $contentType
     */
    protected function configureView(array $pageTsConfig, $contentType)
    {
        if (empty($pageTsConfig['mod.']['web_layout.']['tt_content.']['preview.'])) {
            return;
        }

        $previewConfiguration = $pageTsConfig['mod.']['web_layout.']['tt_content.']['preview.'];
        list($extensionKey) = explode('_', $contentType, 2);
        $extensionKey .= '.';
        if (!empty($previewConfiguration[$contentType])) {
            GeneralUtility::deprecationLog('Setting the complete template path with filename is deprecated and will be removed in mfcontent_export 3.0');
            $templatePath = GeneralUtility::getFileAbsFileName($previewConfiguration[$contentType]);
            $this->view->setTemplatePathAndFilename($templatePath);
        } else {
            if (!empty($previewConfiguration[$extensionKey]['templateRootPath'])) {
                $this->view->setTemplateRootPaths([
                    'EXT:mf_content/Resources/Private/Backend/Templates/Content/',
                    $previewConfiguration[$extensionKey]['templateRootPath'],
                ]);
            }
            if (!empty($previewConfiguration[$extensionKey]['layoutRootPath'])) {
                $this->view->setLayoutRootPaths([
                    'EXT:mf_content/Resources/Private/Backend/Layout/',
                    $previewConfiguration[$extensionKey]['layoutRootPath'],
                ]);
            }
            if (!empty($previewConfiguration[$extensionKey]['partialRootPath'])) {
                $this->view->setPartialRootPaths([
                    'EXT:mf_content/Resources/Private/Backend/Partials/',
                    $previewConfiguration[$extensionKey]['partialRootPath'],
                ]);
            }
            $this->view->setTemplate($this->supportedContentTypes[$contentType]);
        }
    }

    /**
     * @param array $databaseRow
     * @param array $processedTcaColumns
     * @return array
     */
    protected function getProcessedData(array $databaseRow, array $processedTcaColumns)
    {
        $processedRow = $databaseRow;
        foreach ($processedTcaColumns as $field => $config) {
            if (!isset($config['children'])) {
                continue;
            }
            $processedRow[$field] = [];
            foreach ($config['children'] as $child) {
                if (!$child['isInlineChildExpanded']) {
                    $formDataGroup = GeneralUtility::makeInstance(TcaDatabaseRecord::class);
                    $formDataCompiler = GeneralUtility::makeInstance(FormDataCompiler::class, $formDataGroup);
                    $formDataCompilerInput = [
                        'command' => 'edit',
                        'tableName' => $child['tableName'],
                        'vanillaUid' => $child['vanillaUid'],
                    ];
                    $child = $formDataCompiler->compile($formDataCompilerInput);
                }
                $processedRow[$field][] = $this->getProcessedData($child['databaseRow'], $child['processedTca']['columns']);
            }
        }

        return $processedRow;
    }
}
