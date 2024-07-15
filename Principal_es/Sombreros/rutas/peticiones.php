<?php

$item = isset($_GET['id']) ? intval($_GET['id']) : 0;

echo $item;
require "./../../Inicio/Crear/connect.php";
require dirname(__DIR__,3)."/vendor/autoload.php";
$dotenv=Dotenv\Dotenv::createImmutable(dirname(__DIR__,3));
$dotenv->load();
function peticion($instruccion){
$query1=mysqli_query(conectar($_ENV['servidor'],$_ENV['usuario'],$_ENV['contra'],$_ENV['nombre']),$instruccion); //envia peticion

$json = array();
while($row = mysqli_fetch_assoc($query1)){
        $json[] = $row;
}
echo json_encode($json);

}
$tejidos="SELECT * FROM `tejidos` WHERE `id`=$item"; //selecciona el usuario, 
peticion($tejidos);
?>