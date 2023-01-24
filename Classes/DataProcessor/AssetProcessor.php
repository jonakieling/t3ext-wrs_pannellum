<?php

namespace Waurisch\WrsPannellum\DataProcessor;

use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class AssetProcessor implements DataProcessorInterface
{
    /**
     * @var PageRenderer
     */
    protected $pageRenderer;

    public function __construct()
    {
        $this->pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
    }

    /**
     * @param ContentObjectRenderer $cObj
     * @param array $cObjConf
     * @param array $processorConf
     * @param array $processedData
     * @return array
     */
    public function process(ContentObjectRenderer $cObj, array $cObjConf, array $processorConf, array $processedData): array
    {
        $this->pageRenderer->addJsFooterLibrary('pannellum', 'EXT:wrs_pannellum/Resources/Public/Vendor/pannellum/pannellum.js');
        $this->pageRenderer->addCssFile('EXT:wrs_pannellum/Resources/Public/Vendor/pannellum/pannellum.css');
        $this->pageRenderer->addCssFile('EXT:wrs_pannellum/Resources/Public/Css/wrspannellum.css');

        return  $processedData;
    }
}
