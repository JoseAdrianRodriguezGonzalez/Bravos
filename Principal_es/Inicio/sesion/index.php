<?php
    require "inicio.php";
    require "sesion.php";
    //require "C:/xampp/htdocs/bravo/Principal_es/Inicio/Crear/connect.php";
  
    $userSession = new SesionUsser();//se crea un nuevo objeto de la clase SesionUsser
    $user = new user(); //Se crea un objeto nuevo del tipo usuario

    if(isset($_SESSION['user'])){//pregunta si hay sesión 
        //echo"si hay";
        $user->setUser($userSession->getCurrentUser());
        header("location: ../../index.html");
    }else if(isset($_POST['mail']) && isset($_POST['pass'])){//si no fue así, pregunta si se pusieron los datos
        
        $UserForm=mysqli_real_escape_string(conectar(),$_POST['mail']);
        $PassForm=mysqli_real_escape_string(conectar(),$_POST['pass']);
        if($user->Existe($UserForm,$PassForm)){
            
            $userSession->setCurrentUser($UserForm);
            $user->setUser($UserForm);
            
            header("location: ../../index.html");
        }
        else{
           $error ="Correo o contraseña son incorrecto";
            include_once"login.php";
        }
    }else{//se inicia sesion
        
        echo"lgeo";
    }
?>