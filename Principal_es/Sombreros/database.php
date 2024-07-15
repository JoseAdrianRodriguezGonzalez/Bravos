<?php
    echo "a";
    require './../../vendor/autoload.php';
    require "./../Inicio/Crear/connect.php";
    
    $dotenv=Dotenv\Dotenv::createImmutable(dirname(__DIR__,3));
    $dotenv->load();
    function peticion($instruccion){
    $query1=mysqli_query(conectar($_ENV['server'],$_ENV['db_user'],$_ENV['db_pass'],$_ENV['db_name']),$instruccion); //envia peticion
    
    $json = array();
    while($row = mysqli_fetch_assoc($query1)){
            $json[] = $row;
    }
    echo json_encode($json);
    }
    $tejidos="SELECT * FROM `tejidos` WHERE 1"; //selecciona el usuario, 
    peticion($tejidos);
    ?>