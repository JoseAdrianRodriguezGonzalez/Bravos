<?php
    
   // $dotenv=Dotenv\Dotenv::createImmutable('../../../');
   // $dotenv->load();
    
    function conectar($server,$user,$pass,$dbname){  
        $conexion= new mysqli($server,$user,$pass,$dbname);
        if($conexion -> connect_error){
            echo "no";
            die("Conexion fallidad".$conexion->connect_error);
        }else {
            echo'si';
            return $conexion;
        }
       
    }
?>