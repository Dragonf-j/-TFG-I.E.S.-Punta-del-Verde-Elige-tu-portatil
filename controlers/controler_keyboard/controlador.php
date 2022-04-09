<?php
require_once('../../vistas/Vistas_dinamicas/montarTabla.php');

class controladorMouse{

    private $mouse;

    public function __construct()
    {
        require_once('../../models/tecladocrud.php');
        $this->mouse = new ratoncrud();  
    }
}
?>