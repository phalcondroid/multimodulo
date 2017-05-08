<?php

namespace Multimodulo\Modules\Common\Models;

class Arbitro extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_arbitro;

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
     *
     * @var integer
     * @Column(type="integer", length=2, nullable=true)
     */
    public $estado;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_arbitro',
            'Multimodulo\Modules\Common\Models\Partido',
            'id_arbitro', ['alias' => 'Partido']
        );
        $this->belongsTo(
            'id_pais',
            'Multimodulo\Modules\Common\Models\Pais',
            'id_pais', ['alias' => 'Pais']
        );
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'arbitro';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Arbitro[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Arbitro
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
