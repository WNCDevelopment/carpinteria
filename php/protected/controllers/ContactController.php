<?php
class ContactController extends Controller{
    public static $ENVIAR_A="rowasc@gmail.com";
    public function actionEnviar(){
        $success=false;                
        if (isset($_POST["email"]) && isset($_POST['mensaje']) && isset($_POST['telefono'])){            
            $email=$_POST['email'];
            $telefono=$_POST['telefono'];
            $mensaje=$_POST['mensaje'];
            $form=array('email'=>$email,'telefono'=>$telefono,'mensaje'=>$mensaje);
            $success=Utils::sendMail('contacto', 'Consulta Web de '.$email,self::$ENVIAR_A,$form);
        }
        echo json_encode(array('success'=>$success));
    }
}