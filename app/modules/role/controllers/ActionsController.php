<?php

namespace Multimodulo\Modules\Role\Controllers;

use Multimodulo\Modules\Common\Models\Action;

class ActionsController extends ControllerBase
{
    /**
     *
     */
    public function indexAction($id)
    {
        $actions = Action::findByIdResource((int) $id);
        $this->view->actions = $actions;
    }
}
