<?php
    //require "/xampp/htdocs/bravo/Principal_es/Inicio/sesion/inicio.php";
    require "../Inicio/sesion/inicio.php";
  //  require "/xampp/htdocs/bravo/Principal_es/Inicio/sesion/sesion.php";
    require "../Inicio/sesion/sesion.php";
    /*******En esta sección, confirma si hay un usuario o no */
    $userSession = new SesionUsser();//se crea un nuevo objeto de la clase SesionUsser
    $user = new user(); //Se crea un objeto nuevo del tipo usuario
    $sesionHay;
    function confirm($user,$userSession){
        if((isset($_SESSION['user']))){
            $user->setUser($userSession->getCurrentUser());
            return true;
        }else{
            return false;
        }
    }

    $json=array();
    $json[]=confirm($user,$userSession);
    echo json_encode($json);
    ?>