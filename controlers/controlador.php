<?php
   
// require_once('../vistas/Vistas_dinamicas/montarTabla.php');
require_once('../../vistas/Vistas_dinamicas/montarTabla.php');
// require_once($_SERVER['DOCUMENT_ROOT'].'/Dragonf/proyecto/vistas/Vistas_dinamicas/montarTabla.php');
/**
 * clase que controla el funcionamiento entre la web y la base de datos
 */
    class ControladorPortatil{
      private $laptop;
      
/**
 * Constructor de la clase que inicializa la clase PortailCRUD
 */
     public function __construct()
     {
        require_once('../../models/portatilesCurd.php');
        $this->laptop = new PortatilCrud();
     }

  
 
   //   public function mostrar(){
   //    $datos = $this->laptop->getPortatil();
   //    montarTabla::montar($datos);
   //   }




   public function mostrar(){
            if(isset($_POST['tipo'])){
               $tipo = $_POST['tipo'];
             
               
            }else{
               return;
            }
            if(isset($_POST['almacenamiento'])){
               $almacenamiento = $_POST['almacenamiento'];
            
              
            }
            if(isset($_POST['memoria'])){
               $ram = $_POST['memoria'];
            
            }else{
               return;
            }
            if(isset($_POST['precio'])){
               $precio = $_POST['precio'];
             
            }else{
               return;
            }
            if(isset($_POST['Pulgadas'])){
               $pulgadas = $_POST['Pulgadas'];
           
            }else{
               return;
            }
           
           
            
          
            $datos = $this->laptop->getPortatil($tipo, $ram, $precio, $pulgadas, $almacenamiento);
            //   var_dump($datos);
         return $datos;
        
            // montarTabla::montar($datos);
        }

      




     
     
  }
     


    

   //  $cLaptop = new ControladorPortatil();

    


   //  if(isset($_POST['mostrar'])){
   //    // $cLaptop->random();
   //    $d = $cLaptop->mostrar();
   //    // var_dump($d);
   //    montarTabla::montar($d);

      
   //  }
    


    
    

   
  
 
