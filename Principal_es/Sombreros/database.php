<?php
    require "./../Inicio/Crear/connect.php";
    require dirname(__DIR__,2)."/vendor/DotEnv.php";
    use DevCoder\DotEnv;
    (new DotEnv(__DIR__ . '/../../../.env'))->load();
    
    
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