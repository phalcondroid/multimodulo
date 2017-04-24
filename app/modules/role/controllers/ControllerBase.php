<?php
namespace Multimodulo\Modules\Role\Controllers;

use Phalcon\Mvc\Controller;
use Multimodulo\Modules\Common\Models\User;
use Multimodulo\Modules\Common\Models\Role;
use Multimodulo\Modules\Common\Models\Action;
use Multimodulo\Modules\Common\Models\Resource;
use Multimodulo\Modules\Common\Library\AclManager;

class ControllerBase extends Controller
{
    private $roleAdmin = null;
    private $acl       = null;
    private $access    = null;

    public function beforeExecuteRoute($dispatcher)
    {
        $controller = $dispatcher->getControllerName();
        $action     = $dispatcher->getActionName();

        if ($this->session->get("user")) {
            $aclManager = new AclManager();
            $aclManager->initialize(
                $dispatcher,
                $this->session->get("user")
            );
            if (!$aclManager->checkPermissions($controller, $action)) {
                if ($controller != "index") {
                    $this->response->redirect("/role/index/index");
                }
            }
        } else {
            if ($controller != "index") {
                $this->response->redirect("/role/index/index");
            }
        }
    }
}
