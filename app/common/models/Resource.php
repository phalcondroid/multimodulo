<?php

namespace Multimodulo\Modules\Common\Models;

class Resource extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_resource;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_role;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $name;

    /**
     *
     * @var integer
     * @Column(type="integer", length=2, nullable=false)
     */
    public $status;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany(
            'id_resourse',
            'Multimodulo\Modules\Common\Models\Action',
            'id_resource',
            ['alias' => 'Action']
        );
        $this->belongsTo(
            'id_role',
            'Multimodulo\Modules\Common\Models\Role',
            'id_role',
            ['alias' => 'Role']
        );
    }

    public function beforeSave()
    {
        $this->status = 1;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'resource';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Resource[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Resource
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
