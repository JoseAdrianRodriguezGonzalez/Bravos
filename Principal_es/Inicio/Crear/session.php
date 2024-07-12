<?php
    require "./Principal_es/Inicio/sesion/inicio.php";
    require "./Principal_es/Inicio/sesion/sesion.php";

    //$userSession = new SesionUsser();//se crea un nuevo objeto de la clase SesionUsser
    //$user = new user(); //Se crea un objeto nuevo del tipo usuario
function sesion(){
    
    $userSession = new SesionUsser();//se crea un nuevo objeto de la clase SesionUsser
    $user = new user(); //Se crea un objeto nuevo del tipo usuario
    
    if(isset($_SESSION['user'])){//pregunta si hay sesión 
        $user->setUser($userSession->getCurrentUser());
        
        header("location: ../../index.html");
         }else if(isset($_POST['email']) && isset($_POST['pass'])){//si no fue así, pregunta si se pusieron los datos
            
             $UserForm=$_POST['email'];
             $PassForm=$_POST['pass'];
    
             if($user->Existe($UserForm,$PassForm)){ 
                 $userSession->setCurrentUser($UserForm);
                 $user->setUser($UserForm);
                 header("location: ../../index.html");
                 
             }
             else{
             //   $error ="Correo o contraseña son incorrecto";
              //   include_once"login.php";
             }
         }else{//se inicia sesion
             
             //
         }
}    

    
?>