<?php
    require "/xampp/htdocs/bravo/Principal_es/Inicio/sesion/inicio.php";
    require "/xampp/htdocs/bravo/Principal_es/Inicio/sesion/sesion.php";
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


    //Hacer las peticiones del servidor
    function peticiones($user,$userSession){
        $mail=$_POST['Email'];
        if(confirm($user,$userSession)==true){
            if(isset($_POST['New'])&&isset($_POST['New1'])) {
             $FirstPass=mysqli_real_escape_string(conectar(),$_POST['New']);
             $FirstPassConfirm=mysqli_real_escape_string(conectar(),$_POST['New1']);
                if($FirstPass==$FirstPassConfirm){
                    $question="SELECT * FROM `usuarios` WHERE `Contraseña`=$FirstPass AND `Correo`=$user->getPass()";
                    $queryConsult=mysqli_query(conectar(),$question);
                    $rowCount=mysqli_num_rows($queryConsult);
                    if($rowCount> 0){
                        echo "Ya existe esa contraseña ";
                    }
                    else{
                        //UPDATE usuarios SET `Nombre`="Jose Adrian" WHERE `Nombre`="Alberto"
                        $insercion="UPDATE `usuarios` SET `Contraseña`=md5($FirstPass) WHERE `Contraseña`=$user->getPass()";
                        $querySend=mysqli_query(conectar(),$insercion);
                    }
                }
            }
        } else{
            
        } 
    }
?>