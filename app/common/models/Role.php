<?php

namespace Multimodulo\Modules\Common\Models;

class Role extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_role;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $role;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $description;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany(
            'id_role',
            'Multimodulo\Modules\Common\Models\Resource',
            'id_role',
            ['alias' => 'Resource']
        );
        $this->hasMany(
            'id_role',
            'Multimodulo\Modules\Common\Models\User',
            'id_role',
            ['alias' => 'User']
        );
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'role';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Role[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Role
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
