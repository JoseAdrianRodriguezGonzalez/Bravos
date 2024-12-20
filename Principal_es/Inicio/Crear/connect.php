<?php
    
   // $dotenv=Dotenv\Dotenv::createImmutable('../../../');
   // $dotenv->load();
   require __DIR__."/../../../vendor/DotEnv.php";
   use DevCoder\DotEnv;
   
   $isLocal = in_array($_SERVER['HTTP_HOST'], ['localhost:3000', '127.0.0.1', '::1']);
   if ($isLocal) {
    (new DotEnv(__DIR__ . '/../../../.env.local'))->load(); // Local environment file
    
} else {
    (new DotEnv(__DIR__ . '/../../../../.env'))->load(); // Production (Hostinger) environment file
    echo "I am not local";
    }

    function conectar(){  

        $conexion= mysqli_connect(getenv('server'),getenv('db_user'),getenv('db_pass'),getenv('db_name'));
        
        if($conexion -> connect_error){
            die("Conexion fallidad".$conexion->connect_error);
        }else {
            
            return $conexion;
        }
       
    }
?>