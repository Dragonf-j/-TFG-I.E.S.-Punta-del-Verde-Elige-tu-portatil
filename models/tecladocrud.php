<?php
class tecladocrud{
    private $conexion;
    private $host;
    private $users;
    private $password;
    private $consulta;
    private $teclado;
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
            $this->teclado = []; //array que contendra 


        } catch (PDOException $exp) {
            return $exp->getMessage();
        }
    }
    public function getTeclados( $presupuesto, $bluetooht, $inalambrico, $cable, $rgb, $formato, $tipo){

        try{
            $sentencia = "SELECT * FROM ratones WHERE (presupuesto  ='$presupuesto') and (bluetooth = '$bluetooht') and (inalambrico= '$inalambrico'), (cable = '$cable'), (rgb='$rgb'), (formato='$formato'), (tipo='$tipo')";
            $this->consulta = $this->conexion->prepare($sentencia);
            //  echo 'Consulta realizada';
            // echo '<br>';
            $this->consulta->execute();
            $this->teclado = $this->consulta->fetchAll(PDO::FETCH_ASSOC);
            echo "<br>";
            
            // echo "aqui llega";
            return $this->teclado;
        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }


}
?>