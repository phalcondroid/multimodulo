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
        if ($this->session->get("user")) {
            $resource = Resource::findFirst(array(
                "conditions" => "id_role = ?1 and name = ?2",
                "bind" => array(
                    1 => $this->session->get("user")->id_role,
                    2 => "menu"
                )
            ));
            if ($resource)
                $this->view->menu = Action::findByIdResource($resource->id_resource);
            else
                $this->view->menu = array();
        }

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
                } else {
                    $this->response->redirect(
                        $this->session->get("user")->Role->link
                    );
                }
            } else {
                if ($controller == "index") {
                    $this->response->redirect(
                        $this->session->get("user")->Role->link
                    );
                }
            }
        } else {
            if ($controller != "index") {
                $this->response->redirect("/role/index/index");
            }
        }
    }
}
