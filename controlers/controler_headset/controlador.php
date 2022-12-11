<?php
// require_once('../../vistas/Vistas_dinamicas/montarTabla.php');

class controladorHeadset{

    private $headset;

    public function __construct()
    {
        require_once(dirname(__DIR__).'/../models/cascocrud.php');
        $this->headset = new cascocrud();  
    }

    public function mostrar(){
        if(isset($_POST['cable'])){
           $cable = $_POST['cable'];
         
           
        }else{
           return;
        }
        if(isset($_POST['bluetooh'])){
           $bluetooh = $_POST['bluetooh'];
        
          
        }
        if(isset($_POST['inalambrico'])){
           $inalambrico = $_POST['inalambrico'];
        
        }else{
           return;
        }
        if(isset($_POST['precio'])){
           $precio = $_POST['precio'];
         
        }else{
           return;
        }
        if(isset($_POST['diadema'])){
           $diadema = $_POST['diadema'];
       
        }else{
           return;
        }
        if(isset($_POST['microfono'])){
            $microfono = $_POST['microfono'];
        
         }else{
            return;
         }
       
       
        
      
        $datos = $this->headset->getcascos($precio, $bluetooh, $inalambrico, $cable, $diadema, $microfono);
    
     return $datos;
    
        // montarTabla::montar($datos);
    }



    public function MostrarAll(){
      if(isset($_POST['enviar'])){
          if($_POST['opciones'] == null){
             $this->precio ="bajo";
          }else{
          $this->precio = $_POST['opciones'];
          }
      }else{
          $this->precio= "bajo";
      }
       $datos = $this->headset->getAll($this->precio);
       return $datos;
    }
}
?>