<?php

namespace Multimodulo\Modules\Admin\Controllers;

use Multimodulo\Modules\Admin\Forms\FormInsert;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
        
    }

    public function formAction()
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

    public function editAction()
    {
        $form = new FormInsert();
        $this->view->formInsert = $form;
    }
}
