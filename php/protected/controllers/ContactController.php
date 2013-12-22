<?php
class ContactController{
    public static $ENVIAR_A="rowasc@gmail.com";
    public function actionEnviar(){
        $success=false;                
        if (isset($_POST["contact"])){            
            $email=$_POST['contact']['email'];
            $celular=$_POST['contact']['celular'];
            $mensaje=$_POST['contact']['mensaje'];
            $success=Utils::sendMail('contacto', 'Consulta Web de '.$email,self::ENVIAR_A,array('email'=>$email,'celular'=>$celular,'mensaje'=>$mensaje));
        }
        echo array('success'=>$success);
    }
}