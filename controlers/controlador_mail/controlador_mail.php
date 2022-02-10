<?php
class mensaje{


    public function enviarMensaje($correoUser, $asunt, $mens){
        $correo='eligetuportatil@gmail.com';
        $correoUsuario = $correoUser;
        $asunto = $asunt;
        $mensaje =$mens ;

        echo $correo."<br>";
        echo $correoUsuario."<br>";
        echo $asunto."<br>";
        echo $mensaje."<br>";

         mail($correo,$asunto,$mensaje );
        echo 'Mensaje enviado';

    }
 
}
?>