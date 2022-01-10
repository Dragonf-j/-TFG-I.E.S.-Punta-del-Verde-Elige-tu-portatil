<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/Dragonf/proyecto/vistas/Vistas_dinamicas/montarTabla.php');
class controler{
    protected $lapUser;
    protected $lap;




    public function __construct()
    {
        require_once($_SERVER['DOCUMENT_ROOT'].'/Dragonf/proyecto/models/model_laptop_user/userLapCrud.php');
        $this->lapUser = new userLapCrud();
        // require_once($_SERVER['DOCUMENT_ROOT'].'/Dragonf/proyecto/models/portatilesCurd.php');
        // // require_once('/xampp/htdocs/Dragonf/proyecto/models/portatilesCurd.php'); 
        // $this->lap = new PortatilCrud();
        // require_once('/xampp/htdocs/Dragonf/proyecto/controlers/controlador.php');
        require_once($_SERVER['DOCUMENT_ROOT'].'/Dragonf/proyecto/controlers/controlador.php');
        $this->lap = new ControladorPortatil();
    }


    // public function rergistrar(){
     
      
    //      $user= $_SESSION["usuario"];
    //      if(!isset($user)){
    //         echo "sin usuarios";
    //      }else{
    //        echo $user;
            
    //     //    $datos=  $this->lap->getPortatil2();
    //     $datos=  $this->lap->mostrar();
    //     var_dump($datos);
    //     //    var_dump($this->lap->getPortatil2());
    //          montarTabla::montarIndex($datos);
           
            
    //      }
       
    // }

}

// $lpus = new controler();

// $lpus->rergistrar();


