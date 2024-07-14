<?php
require "../../Inicio/sesion/inicio.php";//Llama a la "libreria" de inicio
require "../../Inicio/sesion/sesion.php";//Llama a la libreria de sesion
$userSession=new SesionUsser();
$user =new user();
function confirm($user,$userSession){
    if((isset($_SESSION['user']))){
        $user->setUser($userSession->getCurrentUser());
        return true;
    }else{
        return false;
    }
}
confirm($user,$userSession);
$correo=$user->getCorreo();
$question="SELECT *FROM `usuarios`WHERE `Correo` ='$correo'";
$queryConsult=mysqli_query(conectar(),$question);
$row_count=mysqli_num_rows($queryConsult);
if($row_count>0){
    $delete_petition="DELETE FROM `usuarios`WHERE `Correo` ='$correo'";
    $query_Petition=mysqli_query(conectar(),$delete_petition);
    $userSession->closeSession();
    header("location: ../../index.html");
}else{
    $userSession->closeSession();
    header("location: ../../index.html");
}



