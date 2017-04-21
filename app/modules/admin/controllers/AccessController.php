<?php

namespace Multimodulo\Modules\Admin\Controllers;

class AccessController extends ControllerBase
{
    public function indexAction()
    {
        echo "index action <br>";
    }

    public function editAction()
    {
        echo "edit action <br>";
    }

    public function deleteAction()
    {
        echo "delete action <br>";
    }

    public function denyAction()
    {
        echo "no estoy habilitada<br>";
    }
}
