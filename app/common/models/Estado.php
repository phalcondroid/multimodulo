<?php

class Estado extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $idestado;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $estado;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idestado', 'Partido', 'id_estado', ['alias' => 'Partido']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'estado';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Estado[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Estado
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
