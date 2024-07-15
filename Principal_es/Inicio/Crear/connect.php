<?php
    require('../../../vendor/autoload.php');
    $dotenv=Dotenv\Dotenv::createImmutable('../../../../../');
    $dotenv->load();
    
    function conectar(){
       $server=$_ENV['server'];//look
        $user=$_ENV['db_user'];//look
        $pass=$_ENV['db_pass'];//look
        $dbname=$_ENV['db_name'];//look
       /* $server='localhost';
        $user='root';
        $pass='';
        $dbname='bravos';
        */
        $conexion= new mysqli($server,$user,$pass,$dbname);
        if($conexion -> connect_error){
            die("Conexion fallidad".$conexion->connect_error);
        }else {
            //echo'si';
            return $conexion;
        }
       
    }
?>