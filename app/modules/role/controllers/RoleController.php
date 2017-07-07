<?php

namespace Multimodulo\Modules\Role\Controllers;

use Multimodulo\Modules\Common\Models\Role;

/**
 *
 */
class RoleController extends ControllerBase
{
    /**
     * @static
     * @var array
     */
    private static $data = array();
    public function initialize()
    {
        $this->view->setLayout("main");
    }

    public function cryptAction($secreto)
    {
        
    }

    public function sendMailAction()
    {
        //Set who the message is to be sent from
        $this->phpmailer->setFrom('testinvamer@gmail.com', 'First Last');
        //Set an alternative reply-to address
        $this->phpmailer->addReplyTo('testinvamer@gmail.com', 'First Last');
        //Set who the message is to be sent to
        $this->phpmailer->addAddress('testinvamer@gmail.com', 'John Doe');
        //Set the subject line
        $this->phpmailer->Subject = 'PHPMailer GMail SMTP test';
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        //$this->phpmailer->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
        $this->phpmailer->msgHTML("<h1>Nuevo correo</h1>");
        //Replace the plain text body with one created manually
        $this->phpmailer->AltBody = 'This is a plain-text message body';
        //Attach an image file
        //$this->phpmailer->addAttachment('images/phpmailer_mini.png');
        //send the message, check for errors
        if (!$this->phpmailer->send()) {
            echo "Mailer Error: " . $this->phpmailer->ErrorInfo;
        } else {
            echo "Message sent!";
        }
    }

    /**
     * Este método busca todos los roles del sistema
     * @param mixed $id
     * @param array   $datos
     * @return array
     */
    public function indexAction($id, $datos = array())
    {
        $this->view->name = $this->session->get("user")->name;
        $roles = Role::find("status = 1");
        $this->view->roles = $roles;
        return array();
    }

    public function newAction()
    {
        if ($this->request->isPost()) {
            $name = $this->request->getPost("role", "striptags");
            $link = $this->request->getPost("link", "striptags");
            $desc = $this->request->getPost("description", "striptags");
            $role = new Role;
            $role->role = $name;
            $role->link = $link;
            $role->description = $desc;
            $role->status = 1;
            if ($role->save()) {
                $this->flash->success("insert successful");
            } else {
                foreach ($role->getMessages() as $message) {
                    $this->flash->error($message);
                }
            }
        }
    }

    public function deleteAction($id)
    {
        if (!empty($id)) {
            $role = Role::findFirst((int) $id);
            if ($role->delete()) {
                $this->flash->success("Delete ok");
                $this->response->redirect("role/role/index");
            } else {
                foreach ($role->getMessages() as $msj) {
                    $this->flash->error($msj);
                }
            }
        }
    }
}
