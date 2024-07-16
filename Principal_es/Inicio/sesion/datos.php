<?php
    require __DIR__."/../../../vendor/DotEnv.php";
    use DevCoder\DotEnv;
    (new DotEnv(__DIR__ . '/../../../../.env'))->load();
    echo "hola";  
?>