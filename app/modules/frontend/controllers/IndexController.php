<?php

namespace Multimodulo\Modules\Frontend\Controllers;

use Multimodulo\Modules\Common\Models\Arbitro;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        
    }

    public function getArbitrosAction()
    {
        $arbitros = Arbitro::find();
        $result   = array();
        foreach ($arbitros as $arbitro) {
            $result[] = array(
                "id"      => $arbitro->id_arbitro,
                "country" => $arbitro->Pais->pais,
                "name"    => $arbitro->nombre,
                "status"  => $arbitro->estado
            );
        }
        $this->response->setJsonContent(
            $result
        );
        return $this->response;
    }

}
