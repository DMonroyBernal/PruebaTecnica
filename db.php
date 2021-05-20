<?php
//Conexion base de datos a Mysqlcon PDO
function conexion(){
$dbUser = "root";
$dbPwd = "";
$dbServer = "localhost";

try {
        $conexion = new PDO("mysql:host=$dbServer;dbname=formulario", $dbUser, $dbPwd);      
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión realizada Satisfactoriamente";
      }
 
  catch(PDOException $e)
      {
      echo "La conexión ha fallado: " . $e->getMessage();
      }
       $row = null;
    }
?>