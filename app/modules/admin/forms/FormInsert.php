<?php

namespace Multimodulo\Modules\Admin\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;
use Phalcon\Validation\Validator\PresenceOf;

class FormInsert extends Form
{
    public function initialize()
    {
        $name = new Text("idname");
        $name->addValidator(
            new PresenceOf(
                [
                    "message" => "The name is required",
                ]
            )
        );
        $this->add($name);

        $telephone = new Text("telephone");
        $telephone->setLabel("label telephone");
        $this->add($telephone);
        $this->add(
            new Select(
                "telephoneType",
                [
                    "H" => "Home",
                    "C" => "Cell",
                ]
            )
        );
    }
}
