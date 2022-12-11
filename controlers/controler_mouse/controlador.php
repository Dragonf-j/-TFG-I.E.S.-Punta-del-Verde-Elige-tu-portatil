<?php
// require_once('../../vistas/Vistas_dinamicas/montarTabla.php');

class controladorMouse{

    private $mouse;

    public function __construct()
    {
        require_once('../../models/ratoncrud.php');
        $this->mouse =  new ratoncrud(); 
    }

    public function mostrar(){
        if(isset($_POST['cable'])){
           $cable = $_POST['cable'];
         
           
        }else{
           return;
        }
        if(isset($_POST['bluetooht'])){
           $bluetooht = $_POST['bluetooht'];
        
          
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
        if(isset($_POST['rgb'])){
           $rgb = $_POST['rgb'];
       
        }else{
           return;
        }
       
       
        
      
        $datos = $this->mouse->getRaton($precio, $bluetooht, $inalambrico, $cable, $rgb);
       
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
       $datos = $this->mouse->getAll($this->precio);
       return $datos;
    }
}
?>