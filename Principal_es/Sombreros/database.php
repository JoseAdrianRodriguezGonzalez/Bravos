<?php
    require "./../Inicio/Crear/connect.php";
    
    function peticion($instruccion){

        $query1=mysqli_query(conectar(),$instruccion); //envia peticion
            
    
    $json = array();
    while($row = mysqli_fetch_assoc($query1)){
            $json[] = $row;
    }
    echo json_encode($json);
    }
    $tejidos="SELECT * FROM `tejidos` WHERE 1"; //selecciona el usuario, 
    peticion($tejidos);
    ?>