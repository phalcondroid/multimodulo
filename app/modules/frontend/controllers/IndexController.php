<?php

namespace Multimodulo\Modules\Frontend\Controllers;

use Multimodulo\Modules\Common\Models\Arbitro;
use Multimodulo\Modules\Common\Models\Equipo;
use Multimodulo\Modules\Common\Models\Partido;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    }

    public function getPartidosAction()
    {
        $result = array();
        $partidos = Partido::find();
        if ($partidos) {
            foreach ($partidos as $match) {
                $result[] = array(
                    "id"        => $match->id_partido,
                    "id_estado" => $match->Estado->idestado,
                    "estado"    => $match->Estado->estado,
                    "equipo1"   => $match->Equipo1->nombre,
                    "equipo2"   => $match->Equipo2->nombre,
                    "arbitro"   => $match->Arbitro->nombre,
                    "resultado" => $match->resultado
                );
            }
        }
        $this->response->setJsonContent(
            $result
        );
        return $this->response;
    }

    public function getEquiposAction()
    {
        $result = array();
        if ($this->request->isPost()) {
            $name = $this->request->getPost("name");
            $equipos = false;
            if (!empty($name)) {
                $equipos = Equipo::find(array(
                    "conditions" => "nombre LIKE ?1",
                    "bind"       => array(
                        1 => "%$name%"
                    )
                ));
            } else {
                $equipos = Equipo::find(array(
                    "cache" => [
                        "lifetime" => 3600,
                        "key" => "my-find-key"
                    ]
                ));
            }
            if ($equipos) {
                foreach ($equipos as $equipo) {
                    $result[] = array(
                        "id"   => $equipo->id_equipo,
                        "name" => $equipo->nombre,
                        "country" => $equipo->Pais->pais
                    );
                }
            }
        }
        $this->response->setJsonContent(
            $result
        );
        return $this->response;
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
