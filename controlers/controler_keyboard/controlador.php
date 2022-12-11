<?php
// require_once('../../vistas/Vistas_dinamicas/montarTabla.php');

class controladorKeyBoard{

    private $keyboard;

    public function __construct()
    {
        require_once('../../models/tecladocrud.php');
        $this->keyboard = new tecladocrud();  
    }

    public function mostrar(){
        if(isset($_POST['tipo'])){
           $tipo = $_POST['tipo'];
       
           
        }else{
           return;
        }
        if(isset($_POST['tamano'])){
           $tamano = $_POST['tamano'];
       
          
        }
        if(isset($_POST['rgb'])){
           $rgb = $_POST['rgb'];
         
        }else{
           return;
        }
        if(isset($_POST['precio'])){
           $precio = $_POST['precio'];
          
        }else{
           return;
        }

        if(isset($_POST['cable'])){
         $cable = $_POST['cable'];
         
      }else{
         return;
      }
      if(isset($_POST['Bluetooh'])){
         $bluetooth = $_POST['Bluetooh'];
       
      }else{
         return;
      }
      if(isset($_POST['inalambrico'])){
         $inalambrico = $_POST['inalambrico'];
        
      }else{
         return;
      }
       
        $datos = $this->keyboard->getTeclados($precio,$bluetooth , $inalambrico, $cable, $rgb, $tamano, $tipo);
      
     return $datos;
    
       
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
       $datos = $this->keyboard->getAll($this->precio);
       return $datos;
    }
}
?>