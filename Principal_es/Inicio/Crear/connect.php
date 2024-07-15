<?php
      require __DIR__."/../../../vendor/DotEnv.php";
      use DevCoder\DotEnv;
      (new DotEnv(__DIR__ . '/../../../../.env'))->load();
   // $dotenv=Dotenv\Dotenv::createImmutable('../../../');
   // $dotenv->load();
    function conectar($server,$user,$pass,$dbname){  
        $conexion= mysqli_connect($_ENV['server'],$_ENV['db_user'],$_ENV['db_pass'],$_ENV['db_name']);
        if($conexion -> connect_error){
            die("Conexion fallidad".$conexion->connect_error);
        }else {
            return $conexion;
        }
       
    }
?>