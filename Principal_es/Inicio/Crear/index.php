<?php
    require "session.php";
  //  require "connect.php";
    require "correo.php";
    $name=$_POST['nombre'];
    $lastname=$_POST['Apellido'];
    $phone=$_POST['Telefono'];
    $mail=$_POST['email'];
    $pass=md5($_POST['pass']);
    $addres=$_POST['direccion'];
    $city=$_POST['ciudad'];
    $state=$_POST['estado'];
    $country=$_POST['paises'];
    $postal=$_POST['postal'];
    $newmail=strtolower($mail);
    $preguntar="SELECT *FROM `usuarios` WHERE   `Correo`='$newmail'";
    $queryConsulta= mysqli_query(conectar(),$preguntar);
    $rowCount=mysqli_num_rows($queryConsulta);
    if($rowCount>0){
        $error="ya existe esa cuenta";
        include_once"./Principal_es/Inicio/Crear/crear.php";
    }
    else{
        $insertar= "INSERT INTO `usuarios` (`Nombre`, `Apellidos`, `Telefono`, `Contraseña`, `Direccion`, `Ciudad`, `Estado`, `Pais`, `Codigo postal`, `id`, `Correo`) VALUES('$name','$lastname','$phone','$pass','$addres','$city','$state','$country','$postal',NULL,'$newmail')";
        $query=mysqli_query(conectar(),$insertar);
        if($query){
            sesion();
            enviar_email();
            
        }
    
    }
    //echo $name,$lastname,$phone,$mail,$pass,$addres,$city,$state,$country,$postal;

?>