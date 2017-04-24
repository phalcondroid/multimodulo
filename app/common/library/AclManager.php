<?php

namespace Multimodulo\Modules\Common\Library;

use Phalcon\Acl\Role as RoleAcl;
use Phalcon\Acl;
use Phalcon\Acl\Resource as ResourceAcl;
use Phalcon\Acl\Adapter\Memory as AclList;
use Multimodulo\Modules\Common\Models\User;
use Multimodulo\Modules\Common\Models\Role;
use Multimodulo\Modules\Common\Models\Action;

class AclManager
{
    private $acl     = null;
    private $userSession = null;

    /**
     *
     */
    public function __construct()
    {
        $this->acl       = new AclList();
        $this->acl->setDefaultAction(
            Acl::DENY
        );
    }

    /**
     *
     */
    public function initialize($dispatcher, $userSession)
    {
        $this->acl->addRole(new RoleAcl(
            $userSession->Role->role
        ));
        $this->userSession = $userSession;

        foreach ($userSession->Role->Resource as $resource) {
            $actions = array();
            $actionModel = Action::findByIdResource($resource->id_resource);
            foreach ($actionModel as $action) {
                $actions[] = $action->action;
            }
            $this->acl->addResource(
                new ResourceAcl($resource->name),
                $actions
            );
            foreach ($actions as $action) {
                $this->acl->allow(
                    $userSession->Role->role,
                    $resource->name,
                    $action
                );
            }
        }
    }

    /**
     *
     */
    public function checkPermissions($controller, $action)
    {
        return $this->acl->isAllowed(
            $this->userSession->Role->role,
            $controller,
            $action
        );
    }
}
