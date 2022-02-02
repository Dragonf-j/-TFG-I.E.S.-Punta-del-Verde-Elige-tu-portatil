<?php
class mensaje{


    public function enviarMensaje($correoUser, $asunt, $mens){
        $correo='eligetuportatil@gmail.com';
        $correoUsuario = $correoUser;
        $asunto = $asunt;
        $mensaje =$mens ;

        mail($correo,$correoUsuario, $asunto, $mensaje );
        echo 'Mensaje enviado';

    }
 
}
?>