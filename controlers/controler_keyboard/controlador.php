<?php
require_once('../../vistas/Vistas_dinamicas/montarTabla.php');

class controladorKeyBoard{

    private $keyboard;

    public function __construct()
    {
        require_once('../../models/tecladocrud.php');
        $this->keyboard = new tecladocrud();  
    }
}
?>