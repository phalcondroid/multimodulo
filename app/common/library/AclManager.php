<?php

namespace Multimodulo\Modules\Common\Library;

use Phalcon\Acl\Role;
use Phalcon\Acl;
use Phalcon\Acl\Resource;
use Phalcon\Acl\Adapter\Memory as AclList;

class AclManager
{
    private $manager = null;
    private $acl     = null;

    public function __construct($manager)
    {
        $this->manager = $manager;
        $this->acl       = new AclList();
        $this->acl->setDefaultAction(
            Acl::DENY
        );
    }

    public initialize($dispatcher)
    {
        if ($this->manager->session->get("login")) {

            $user = $this->manager->session->get("login");
            $this->acl->addRole(new Role(
                $user->Role->role
            ));

            foreach ($user->Resources as $resource) {
                $actions = array();
                foreach ($user->Resource->Action as $action) {
                    $actions[] = $action->action;
                }
                $this->acl->addResource(
                    new Resource($resource->name),
                    $actions
                );
                foreach ($actions as $action) {
                    $this->acl->allow(
                        $user->Role->role,
                        $resource->name,
                        $action
                    );
                }
            }
        }
    }

    public checkPermissions($controller, $action)
    {
        return $this->isAllowed(
            $user->Role->role,
            $controller,
            $action
        );
    }
}
