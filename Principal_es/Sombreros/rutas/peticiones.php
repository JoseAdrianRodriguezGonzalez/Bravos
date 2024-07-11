<?php

$item = isset($_GET['id']) ? intval($_GET['id']) : 0;

echo $item;
require "./../../Inicio/Crear/connect.php";
function peticion($instruccion){
$query1=mysqli_query(conectar(),$instruccion); //envia peticion

$json = array();
while($row = mysqli_fetch_assoc($query1)){
        $json[] = $row;
}
echo json_encode($json);

}
$tejidos="SELECT * FROM `tejidos` WHERE `id`=$item"; //selecciona el usuario, 
peticion($tejidos);
?>