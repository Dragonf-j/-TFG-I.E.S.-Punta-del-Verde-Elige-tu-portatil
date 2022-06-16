<?php
class cascocrud{
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

    public function getcascos( $presupuesto, $Bluetooh, $inalambrico, $cable, $diadema, $microfono){

        try{
            $sentencia = "SELECT * FROM cascos WHERE (presupuesto  ='$presupuesto') and (Bluetooh = '$Bluetooh') and (inalambrico= '$inalambrico')and (cable = '$cable')and (diadema='$diadema') and (microfono = '$microfono')";
            $this->consulta = $this->conexion->prepare($sentencia);
            // echo $sentencia;
            //  echo 'Consulta realizada';
            // echo '<br>';
            $this->consulta->execute();
            $this->cascos = $this->consulta->fetchAll(PDO::FETCH_ASSOC);
            echo "<br>";
            
            // echo "aqui llega";
            return $this->ratones;
        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }


}
?>