<?php
    
   // $dotenv=Dotenv\Dotenv::createImmutable('../../../');
   // $dotenv->load();
    
    function conectar($server,$user,$pass,$dbname){  

        $conexion= mysqli_connect($server,$user,$pass,$dbname);
        error_reporting(E_ALL); 
        ini_set('display_errors', 1);
        if($conexion -> connect_error){
            echo "no";
            die("Conexion fallidad".$conexion->connect_error);
        }else {
            echo'si';
            return $conexion;
        }
       
    }
?>