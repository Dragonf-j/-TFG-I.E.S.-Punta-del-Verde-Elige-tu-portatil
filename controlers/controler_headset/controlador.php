<?php
require_once('../../vistas/Vistas_dinamicas/montarTabla.php');

class controladorHeadset{

    private $headset;

    public function __construct()
    {
        require_once('../../models/cascocrud.php');
        $this->headset = new cascocrud();  
    }
}
?>