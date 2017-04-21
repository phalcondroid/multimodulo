<?php

class Pais extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_pais;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $pais;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_pais', 'Arbitro', 'id_pais', ['alias' => 'Arbitro']);
        $this->hasMany('id_pais', 'Equipo', 'id_pais', ['alias' => 'Equipo']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pais';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pais[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pais
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
