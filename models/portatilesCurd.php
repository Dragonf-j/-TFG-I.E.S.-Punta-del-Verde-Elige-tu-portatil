<?php
require_once('portatil.php');

class PortatilCrud
{
    private $conexion;
    private $host;
    private $users;
    private $password;
    private $consulta;
    private $portatiles;
    private $nameDB;




    /**
     * Metodo constructor ppara la conexion de la base de datos
     * En este metodo instacioamos el metodo PDO en una variable y a esta instacia debemos pasarle los datos del host
     * donde se localiza la base de datos, el usuario con el que se va a conectar, el nombre de la base de datos,
     * y la contraseña de la base datos.
     * Tambien instanciamos el array que va a contener los datos 
     * 
     */
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
             echo 'Conexión Realizada';
            $this->portatiles = []; //array que contendra los 


        } catch (PDOException $exp) {
            return $exp->getMessage();
        }
    }

  

    // }
    public function getPortatil($tipo, $ram, $precio, $pulgadas, $almacenamiento)
    {
        try {
            $sentencia = "SELECT * FROM portatil WHERE (tipo= '$tipo') AND (ram = $ram) AND (presupuesto= '$precio') AND (pulgadas= '$pulgadas') AND (	almacenamiento='$almacenamiento')";
            $this->consulta = $this->conexion->prepare($sentencia);
             echo 'Consulta realizada';
            // echo '<br>';
            $this->consulta->execute();
            $this->portatiles = $this->consulta->fetchAll(PDO::FETCH_ASSOC);
            echo "<br>";
            
            // echo "aqui llega";
            return $this->portatiles;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

  

   
}
