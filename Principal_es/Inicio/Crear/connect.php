<?php
    
   // $dotenv=Dotenv\Dotenv::createImmutable('../../../');
   // $dotenv->load();
    
    function conectar($server,$user,$pass,$dbname){  

        $conexion= mysqli_connect($server,$user,$pass,$dbname);
        
        if($conexion -> connect_error){
            die("Conexion fallidad".$conexion->connect_error);
        }else {
            
            return $conexion;
        }
       
    }
?>