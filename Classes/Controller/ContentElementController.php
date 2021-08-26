<?php
namespace Waurisch\WrsPannellum\Controller;

    use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 *
 *
 * @package wrs_pannellum
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class ContentElementController extends ActionController
{

    /**
     * action pannellum
     *
     * @return void
     */
    public function panoramicView()
    {
        $view->assign('autoload', "ControllerTest");
        echo "PanoramicView Test";
    }

    /**
     * action pannellum
     *
     * @return void
     */
    public function pannellumAction()
    {
        $view->assign('autoload', "ControllerTest");
        echo "Trara";
    }

}
