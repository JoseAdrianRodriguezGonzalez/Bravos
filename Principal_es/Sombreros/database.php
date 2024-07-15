<?php
    require "./../Inicio/Crear/connect.php";
    require __DIR__."/../../vendor/DotEnv.php";
    use DevCoder\DotEnv;
    (new DotEnv(__DIR__ . '/../../../.env'))->load();
    function peticion($instruccion){
        $server="localhost";
        $user="u350875428_bravo";
        $pass="Bravoshats23456%";
        $dbname="u350875428_bravos";
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