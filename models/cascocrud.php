<?php
class ratoncrud{
    private $conexion;
    private $host;
    private $users;
    private $password;
    private $consulta;
    private $cascos;
    private $nameDB;

    public function __construct()
    {
        try {

            /**
             * Datos de conexion
             */
            $this->host = 'db5006586997.hosting-data.io';
            $this->nameDB = 'dbs5463814';
            $this->users = 'dbu2090805';
            $this->password = 'eligetuportatil1A*';
            //variable en que vamos a guardar los datos de las variables del host y del nameDb
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->nameDB;

            $this->conexion = new PDO($dsn, $this->users, $this->password); //conexion 
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //extraccion y formateo de datos
            //  echo 'Conexión Realizada';
            $this->cascos = []; //array que contendra 


        } catch (PDOException $exp) {
            return $exp->getMessage();
        }
    }


}
?>