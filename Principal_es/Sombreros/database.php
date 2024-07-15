<?php
    require "./../Inicio/Crear/connect.php";
    require __DIR__."/../../vendor/DotEnv.php";
    use DevCoder\DotEnv;

use function PHPSTORM_META\type;

    (new DotEnv(__DIR__ . '/../../../.env'))->load();
    function peticion($instruccion){
        $server=$_ENV['server'];
        $user=$_ENV['db_user'];
        $pass=$_ENV['db_pass'];
        $dbname=$_ENV['db_name'];
        echo gettype($server);
        $query1=mysqli_query(conectar($server,$user,$pass,$dbname),$instruccion); //envia peticion
            
    
    $json = array();
    while($row = mysqli_fetch_assoc($query1)){
            $json[] = $row;
    }
    echo json_encode($json);
    }
    $tejidos="SELECT * FROM `tejidos` WHERE 1"; //selecciona el usuario, 
    peticion($tejidos);
    ?>