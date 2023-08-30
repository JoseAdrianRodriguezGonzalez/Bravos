<?php
    function conectar(){
        $server='localhost';
        $user='root';
        $pass='';
        $dbname='bravos';
        $conexion= new mysqli($server,$user,$pass,$dbname);
        if($conexion -> connect_error){
            die("Conexion fallidad".$conexion->connect_error);
        }else {
            //echo'si';
            return $conexion;
        }
       
    }
?>