<?php
    
   // $dotenv=Dotenv\Dotenv::createImmutable('../../../');
   // $dotenv->load();
    echo "b";
    function conectar($server,$user,$pass,$dbname){  
        $conexion= new mysqli($server,$user,$pass,$dbname);
        if($conexion -> connect_error){
            die("Conexion fallidad".$conexion->connect_error);
        }else {
            //echo'si';
            return $conexion;
        }
       
    }
?>