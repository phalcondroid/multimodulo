<?php
namespace Multimodulo\Modules\Admin\Controllers;

use Phalcon\Mvc\Controller;
use Multimodulo\Modules\Common\Models\User;
use Multimodulo\Modules\Common\Models\Role;
use Multimodulo\Modules\Common\Models\Resource;
use Multimodulo\Modules\Common\Models\Action;

class ControllerBase extends Controller
{
    private $roleAdmin = null;
    private $acl       = null;
    private $access    = null;

    public function beforeExecuteRoute($dispatcher)
    {
        /*
        $controller = $dispatcher->getControllerName();
        $action     = $dispatcher->getActionName();

        if ($this->acl->isAllowed("admin", $controller, $action)) {
            if ($controller == "access" and $action != "edit") {
                $dispatcher->forward(array(
                    "controller" => "access",
                    "action"     => "edit"
                ));
                $this->response->redirect("access/edit");
            }
        } else {
            $this->flash->error("acceso denegado, hable con invamer");
        }
        */
    }
}
