<?php

namespace Multimodulo\Modules\Role\Controllers;

use Multimodulo\Modules\Common\Models\Role;

class RoleController extends ControllerBase
{
    /**
     *
     */
    public function indexAction()
    {
        $roles = Role::find();
        $this->view->roles = $roles;
    }
}
