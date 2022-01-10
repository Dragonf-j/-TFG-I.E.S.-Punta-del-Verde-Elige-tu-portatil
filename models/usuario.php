<?php

class user{
    protected $nombre;
    protected $email;
    protected $pass;

 

    /**
     * Constructor de la clase
     */
    public function __construct($nombre, $email, $pass)
    {
       $this->nombre= $nombre;
       $this->email= $email;
       $this->pass= $pass;
      
    }
     
    /**
     * Metodos get
     */
    public function getnombre(){
        return $this->nombre;
    }

    public function getemail(){
        return $this->email;
    }

    public function getpass(){
        return $this->pass;
    }


 


    /**
     * Metodos set
     */
    public function setnombre($nombre){
        $this->nombre= $nombre;
    }

    public function setemai($email){
        $this->email= $email;
    }

    public function setpass($pass){
        $this->pass= $pass;
    }
   
   
}
?>