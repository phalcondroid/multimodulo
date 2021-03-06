<?php

namespace Multimodulo\Modules\Common\Models;

class Partido extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_partido;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_estado;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_equipo1;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_equipo2;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_arbitro;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $resultado;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_partido',   'Multimodulo\Modules\Common\Models\Calendario', 'id_partido', ['alias' => 'Calendario']);
        $this->belongsTo('id_arbitro', 'Multimodulo\Modules\Common\Models\Arbitro', 'id_arbitro', ['alias' => 'Arbitro']);
        $this->belongsTo('id_equipo1', 'Multimodulo\Modules\Common\Models\Equipo', 'id_equipo', ['alias' => 'Equipo1']);
        $this->belongsTo('id_equipo2', 'Multimodulo\Modules\Common\Models\Equipo', 'id_equipo', ['alias' => 'Equipo2']);
        $this->belongsTo('id_estado',  'Multimodulo\Modules\Common\Models\Estado', 'idestado', ['alias' => 'Estado']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'partido';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Partido[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Partido
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
