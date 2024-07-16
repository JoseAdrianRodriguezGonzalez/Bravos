<?php
    require __DIR__."/../../../vendor/DotEnv.php";
    use DevCoder\DotEnv;
    (new DotEnv(__DIR__ . '/../../../../.env'))->load();
    $google_OAuth_ID=getenv('ID-client-google');
    $google_OAuth_Secret=getenv('Secret-Client-Google');
    $google_OAuth_redirect=getenv('redirect-api');
    $google_OAuth_version='v3';
    echo $google_OAuth_ID;
?>