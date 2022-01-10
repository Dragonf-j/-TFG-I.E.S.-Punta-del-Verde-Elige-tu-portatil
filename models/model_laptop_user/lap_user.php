<?php
class laptopuser{
    protected $idUser;
    protected $idlaptop;

    public function __construct( $idUser, $idlaptop)
    {
        $this->idUser= $idUser;
        $this->idlaptop=$idlaptop;
    }

    public function getIDUSer(){
        return $this->idUser;
    }

    public function getIDLaptop(){
        return $this->idlaptop;
    }

    public function setIDUser($idUser){
        $this->idUser = $idUser;
    }
    public function setIDLaptop($idlalptop){
        $this->idlaptop= $idlalptop;
    }

}
?>
