<?php
    require "./../Inicio/Crear/connect.php";
    require '../../vendor/autoload.php';
    $dotenv=Dotenv\Dotenv::createImmutable('../../');
    $dotenv->load();
    function peticion($instruccion){
    $query1=mysqli_query(conectar($_ENV['servidor'],$_ENV['usuario'],$_ENV['contra'],$_ENV['nombre']),$instruccion); //envia peticion
    
    $json = array();
    while($row = mysqli_fetch_assoc($query1)){
            $json[] = $row;
    }
    echo json_encode($json);
    }
    $texanas="SELECT * FROM `texana` WHERE 1"; //selecciona el usuario, 
    peticion($texanas);
    ?>