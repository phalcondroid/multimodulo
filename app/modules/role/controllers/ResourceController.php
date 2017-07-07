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
        $this->view->idRole = $id;
        $this->view->resource = $resource;
    }

    public function newAction($id)
    {
        $this->view->role = Role::find("status = 1");
        $this->view->idRole = $id;
        if ($this->request->isPost()) {

            $newResource = new Resource();
            $newResource->id_role = $this->request->getPost("id_role", "int");
            $newResource->name    = $this->request->getPost("name", "striptags");
            $newResource->status  = 1;

            if ($newResource->save()) {
                $this->flash->success("Recurso registrado ok");
                $this->response->redirect("role/resource/index/" . $id);
            } else {
                foreach ($newResource->getMessages() as $msj) {
                    $this->flash->error($msj);
                }
            }
        }
    }

    public function deleteAction($id)
    {
        if (!empty($id)) {
            $res = Resource::findFirst((int) $id);
            if ($res->delete()) {
                $this->flash->success("Delete ok");
                $this->response->redirect("role/role/index");
            } else {
                foreach ($res->getMessages() as $msj) {
                    $this->flash->error($msj);
                }
            }
        }
    }
}
