<?php

class SesionUsser{
    public function __construct(){ //habilita las sesiones
     //   session_set_cookie_params(60*60);
        session_start();
    }
    public function setCurrentUser($user){//inicia sesion
        $_SESSION['user']=$user;
    }
    public function getCurrentUser(){//obitene el usuario
        return $_SESSION['user'];
    }
    public function closeSession(){//cierrra sesion
        session_unset();
        session_destroy();
    }
}


?>