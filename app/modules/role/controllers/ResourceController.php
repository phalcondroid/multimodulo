<?php

namespace Multimodulo\Modules\Role\Controllers;

use Multimodulo\Modules\Common\Models\Resource;
use Multimodulo\Modules\Common\Models\Role;

class ResourceController extends ControllerBase
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
        $resource = Resource::findByIdRole((int) $id);
        $this->view->resource = $resource;
    }

    public function newAction()
    {
        $this->view->role = Role::find("status = 1");
        if ($this->request->isPost()) {

            $newResource = new Resource();
            $newResource->id_role = $this->request->getPost("id_role", "int");
            $newResource->name    = $this->request->getPost("name", "int");
            $newResource->status  = 1;

            if ($newResource->save()) {
                $this->flash->success("Recurso registrado ok");
                $this->response->redirect("role/resource/index");
            } else {
                foreach ($newResource->getMessages() as $msj) {
                    $this->flash->error($msj);
                }
            }
        }
    }
}
