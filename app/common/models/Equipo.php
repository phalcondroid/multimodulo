<?php

class Equipo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_equipo;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_pais;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $nombre;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_equipo', 'Partido', 'id_equipo1', ['alias' => 'Partido']);
        $this->hasMany('id_equipo', 'Partido', 'id_equipo2', ['alias' => 'Partido']);
        $this->belongsTo('id_pais', 'Pais', 'id_pais', ['alias' => 'Pais']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'equipo';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Equipo[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Equipo
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
