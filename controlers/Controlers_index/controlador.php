<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Dragonf/proyecto/vistas/Vistas_dinamicas/montarTabla.php');
class controlerIndex{
    private $cIn;
    private $cInH;

    public function __construct()
    {
        require_once($_SERVER['DOCUMENT_ROOT']."/Dragonf/proyecto/models/portatilesCurd.php");
        $this->cIn = new PortatilCrud();
        

    }

    public function ramdon(){
        $datos = $this->cIn->ContarLaptop();

         montarTabla::montarIndex($datos);
     
        
    }



}






?>

