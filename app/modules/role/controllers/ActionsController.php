<?php

namespace Multimodulo\Modules\Role\Controllers;

use Multimodulo\Modules\Common\Models\Action;
use Multimodulo\Modules\Common\Models\Resource;

class ActionsController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setLayout("main");
    }

    /**
     *
     */
    public function indexAction($id)
    {
        $actions = Action::findByIdResource((int) $id);
        $this->view->actions  = $actions;
        $this->view->resource = Resource::findFirstByIdResource((int) $id);
    }

    public function newAction($idResource)
    {
        $this->view->id = $idResource;
        if ($this->request->isPost()) {
            $action = new Action();
            $action->id_resource = (int) $idResource;
            $action->action = $this->request->getPost("name", "striptags");
            $action->status = 1;

            if ($action->save()) {
                $this->flash->success("Action registrado ok");
                $this->response->redirect("role/actions/index/" . $idResource);
            } else {
                foreach ($action->getMessages() as $msj) {
                    $this->flash->error($msj);
                }
            }
        }
    }

    public function deleteAction($id)
    {
        if (!empty($id)) {
            $action = Action::findFirst((int) $id);
            if ($action->delete()) {
                $this->flash->success("Delete ok");
                $this->response->redirect("role/actions/index/" . $action->id_resource);
            } else {
                foreach ($action->getMessages() as $msj) {
                    $this->flash->error($msj);
                }
            }
        }
    }
}
