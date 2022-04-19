<?php
require_once('../../vistas/Vistas_dinamicas/montarTabla.php');

class controladorMouse{

    private $mouse;

    public function __construct()
    {
        require_once('../../models/ratoncrud.php');
        $this->mouse =  new ratoncrud(); 
    }
}
?>