<?php

namespace Multimodulo\Modules\Role\Controllers;

use Multimodulo\Modules\Common\Models\Role;

/**
 *
 */
class RoleController extends ControllerBase
{
    /**
     * @static
     * @var array
     */
    private static $data = array();
    public function initialize()
    {
        $this->view->setLayout("main");
    }

    /**
     * Este método busca todos los roles del sistema
     * @param mixed $id
     * @param array   $datos
     * @return array
     */
    public function indexAction($id, $datos = array())
    {
        $roles = Role::find("status = 1");
        $this->view->roles = $roles;
        return array();
    }

    (new Role())->indexAction

    public function deleteAction($id)
    {
        if (!empty($id)) {
            $role = Role::findFirst((int) $id);
            if ($role->delete()) {
                $this->flash->success("Delete ok");
            } else {
                foreach ($role->getMessages() as $msj) {
                    $this->flash->error($msj);
                }
            }
        }
    }
}
