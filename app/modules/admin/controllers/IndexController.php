<?php

namespace Multimodulo\Modules\Admin\Controllers;

use Multimodulo\Modules\Admin\Forms\FormInsert;
use Multimodulo\Modules\Common\Models\User;

class IndexController extends ControllerBase
{
    /**
     *
     */
    public function indexAction()
    {
        if ($this->request->isPost()) {

            $username = $this->request->getPost("username");
            $password = $this->request->getPost("password");
            $exist = User::findFirstByUser($username);

            if ($exist != false) {
                if ($exist->password == $password) {
                    $this->session->set(
                        "login",
                        $exist
                    );
                    $this->dispatcher->forward(array(
                        "controller" => "index",
                        "action"     => "edit"
                    ));
                } else {
                    $this->flash->error("password input wrong");
                }
            } else {
                $this->flash->error("user dont exist");
            }
        }
    }

    public function editAction()
    {
        $form = new FormInsert();
        $this->view->formInsert = $form;

        if ($this->request->isPost()) {
            if (!$form->isValid($_POST, $model)) {
                $messages = $form->getMessages();
                foreach ($messages as $message) {
                    echo $message, "<br>";
                }
            }
        }
    }

    public function destroyAction()
    {
        $this->session->destroy();
        $this->reponse->redirect("admin/index");
    }
}
