<?php

namespace Multimodulo\Modules\Admin\Controllers;

use Multimodulo\Modules\Admin\Forms\FormInsert;
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
            $user     = User::findFirstByUser($username);

            if ($user != false) {
                if (password_verify($password, $user->password)) {
                    $this->session->set(
                        "user",
                        $user
                    );
                    $this->response->redirect($user->Role->link);
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
        $this->response->redirect("admin/index/index");
    }
}
