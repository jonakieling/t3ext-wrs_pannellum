<?php 

namespace Waurisch\WrsPannellum\DataProcessor;

use TYPO3\CMS\Core\Service\FlexFormService;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

class FlexFormProcessor implements DataProcessorInterface
{
    /**
     * @var FlexFormService
     */
    protected $flexFormService;

    public function __construct(FlexFormService $flexFormService) {
        $this->flexFormService = $flexFormService;
    }

    public function process(ContentObjectRenderer $cObj, array $cObjConf, array $processorConf, array $processedData): array {

        $originalValue = $processedData['data']['pi_flexform'];
        if (!is_string($originalValue)) {
            return $processedData;
        }

        $flexformData = $this->flexFormService->convertFlexFormContentToArray($originalValue);
        $processedData['flexform'] = $flexformData;

        $resourceFactory = \TYPO3\CMS\Core\Resource\ResourceFactory::getInstance();
        $file = $resourceFactory->getFileObject((int)$processedData['flexform']['settings']['preview']);
        $processedData['preview'] = $file;

        return $processedData;

    }
}

?>