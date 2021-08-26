<?php
namespace Waurisch\WrsPannellum\Controller;

    use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
    use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;

/**
 *
 *
 * @package wrs_pannellum
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class ContentElementController extends ActionController
{

    protected $contentObj;
    protected $data;

    public function initializeAction()
    {
        $this->contentObj = $this->configurationManager->getContentObject();
        $this->data = $this->contentObj->data;
    }

    protected function initializeView(ViewInterface $view)
    {
        $view->assign('data', $this->data);
    }

    /**
     * action pannellum
     *
     * @return void
     */
    public function pannellumAction()
    {
    }

}
