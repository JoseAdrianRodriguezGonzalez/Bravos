<?php
include_once 'sesion.php';
$userSession =new SesionUsser();
$userSession->closeSession();
header("location: ../../index.html");
?>