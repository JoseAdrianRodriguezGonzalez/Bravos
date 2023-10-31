<?php
    require "/xampp/htdocs/bravo/Principal_es/Inicio/sesion/inicio.php";
    require "/xampp/htdocs/bravo/Principal_es/Inicio/sesion/sesion.php";
    $userSession = new SesionUsser();//se crea un nuevo objeto de la clase SesionUsser
    $user = new user(); //Se crea un objeto nuevo del tipo usuario
    $sesionHay;
    if((isset($_SESSION['user']))){
        $user->setUser($userSession->getCurrentUser());
        $sesionHay=true;
    }else{
        $sesionHay="no hay";
    }
    $json=array();
    $json[]=$sesionHay;
?>