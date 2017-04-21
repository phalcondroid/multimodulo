<?php
namespace Multimodulo\Modules\Admin\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Acl\Role;
use Phalcon\Acl;
use Phalcon\Acl\Resource;
use Phalcon\Acl\Adapter\Memory as AclList;

class ControllerBase extends Controller
{
    private $roleAdmin = null;
    private $acl       = null;
    private $access    = null;

    public function onConstruct()
    {
        $this->acl       = new AclList();
        $this->acl->setDefaultAction(
            Acl::DENY
        );

        $this->roleAdmin = new Role("admin");

        $this->acl->addRole($this->roleAdmin);

        $this->access = new Resource("access");
        $this->acl->addResource(
            $this->access,
            array(
                "index",
                "edit",
                "delete",
                "deny"
            )
        );
        $index = new Resource("index");
        $this->acl->addResource(
            $index,
            array(
                "index",
                "edit",
                "delete",
                "deny"
            )
        );

        $this->acl->allow("admin", "access", "index");
        $this->acl->allow("admin", "access", "edit");
        $this->acl->allow("admin", "access", "delete");
        $this->acl->deny("admin", "access",  "deny");
    }

    public function beforeExecuteRoute($dispatcher)
    {
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
    }
}
