<?php

namespace Multimodulo\Modules\Role\Controllers;

use Multimodulo\Modules\Common\Models\User;
use Multimodulo\Modules\Common\Models\Role;

class IndexController extends ControllerBase
{
    /**
     *
     */
    public function indexAction()
    {
        if ($this->request->isPost()) {
            $username = $this->request->getPost("username", array(
                "string", "striptags"
            ));
            $password = $this->request->getPost("password");
            $exist = User::findFirstByUser($username);

            if ($exist != false) {
                if (password_verify($password, $exist->password)) {
                    $this->session->set(
                        "user",
                        $exist
                    );
                    $this->response->redirect("role/role/index");
                } else {
                    $this->flash->error("password input wrong");
                }
            } else {
                $this->flash->error("user dont exist");
            }
        }
    }

    public function destroyAction()
    {
        $this->session->destroy();
        $this->response->redirect("role/role/index");
    }
}
