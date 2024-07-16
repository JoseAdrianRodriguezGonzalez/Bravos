<?php
    
   // $dotenv=Dotenv\Dotenv::createImmutable('../../../');
   // $dotenv->load();
   
   require __DIR__."/DotEnv.php";
   use DevCoder\DotEnv;
   (new DotEnv(__DIR__ . '/../../../../.env'))->load();
   
    function conectar(){  

        $conexion= mysqli_connect(getenv('server'),getenv('db_user'),getenv('db_pass'),getenv('db_name'));
        
        if($conexion -> connect_error){
            die("Conexion fallidad".$conexion->connect_error);
        }else {
            
            return $conexion;
        }
       
    }
?>