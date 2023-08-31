<?php
    require "Principal_es/Inicio/Crear/connect.php";
   //Clase usuario
    class user {
        //datos, nombre y nombre de usuario 
        private $nombre;
        private $username;
     //   private $id;
        //valida si hay usuario
        public function Existe($user,$pass){
            $md5pass=md5($pass); //mediante una contraseñe encriptada en md5 la guarda
            $codigo="SELECT * FROM usuarios WHERE Correo ='$user' AND Contraseña ='$md5pass'";//peticion sql, que de la tabla usuarios busca el nombre y la contraseña
            $query=mysqli_query(conectar(),$codigo);//senvia la peticion
            
            $rowCount=mysqli_num_rows($query);//cuenta las filas
            if($rowCount>0){ //si es mayor a 0
                return true;//es correcto
            }else{
                return false;//es incorrecto
            }
        }
        public function setUser($user){
            $instruccion="SELECT *FROM usuarios WHERE Correo ='$user'"; //selecciona el usuario, 
            $query1=mysqli_query(conectar(),$instruccion); //envia peticion
            foreach($query1 as $currentUser){ //busca cada usuario 
                $this ->nombre =$currentUser['Nombre']; //obtiene el mnombre
                $this ->username =$currentUser['Correo']; //ovbtierne el user
              //  $this -> id=$currentUser['id'];
            }
        }
        public function getNombre(){ //asigan el nombre
            return $this ->nombre;
        }
      /*  public function getId(){
            return $this->id;
        }*/
    }

?>