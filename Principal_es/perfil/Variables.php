<?php
    require "./../Inicio/sesion/sesion.php";//Llama a la libreria de sesio
    require "../Inicio/sesion/inicio.php";//Llama a la "libreria" de inicio
   
    $userSession = new SesionUsser();//se crea un nuevo objeto de la clase SesionUsser
    $user = new user(); //Crea un usuario
    $user->setUser($userSession->getCurrentUser()); //Crea una sesión
    
    $correo=$user->getCorreo();
        
    $instruccion="SELECT *FROM usuarios WHERE Correo ='$correo'"; //selecciona el usuario, 
    $query1=mysqli_query(conectar(),$instruccion); //envia peticion
    
    $json = array();
    while($row = mysqli_fetch_assoc($query1)){
            $json[] = $row;
    }
       echo json_encode($json);
?>