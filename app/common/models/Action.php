<?php

namespace Multimodulo\Modules\Common\Models;

class Action extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_action;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_resource;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $action;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo(
            'id_resource',
            'Multimodulo\Modules\Common\Models\Resource',
            'id_resourse',
            ['alias' => 'Resource']
        );
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'action';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Action[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Action
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
