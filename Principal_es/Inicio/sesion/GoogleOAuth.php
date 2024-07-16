<?php
    require __DIR__."/DotEnv.php";
    require __DIR__."/sesion.php";
//    require __DIR__."/DotEnv.php";
    
    use DevCoder\DotEnv;
    (new DotEnv(__DIR__ . '/../../../../.env'))->load();

    //$userSession=new SesionUsser();
    //// $NewUser=new user();
    $google_OAuth_ID=getenv('ID-client-google');
    $google_OAuth_Secret=getenv('Secret-Client-Google');
    $google_OAuth_redirect=getenv('redirect-api');
    $google_OAuth_version='v3';


    if (isset($_GET['code']) && !empty($_GET['code'])) {
        // Execute cURL request to retrieve the access token
        $params = [
            'code' => $_GET['code'],
            'client_id' => $google_OAuth_ID,
            'client_secret' => $google_OAuth_Secret,
            'redirect_uri' => $google_OAuth_redirect,
            'grant_type' => 'authorization_code'
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://oauth2.googleapis.com/token');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response, true);
        // Code goes here...
    } else {
        // Define params and redirect to Google Authentication page
        $params = [
            'response_type' => 'code',
            'client_id' => $google_OAuth_ID,
            'redirect_uri' => $google_OAuth_redirect,
            'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile',
            'access_type' => 'offline',
            'prompt' => 'consent'
        ];
        header('Location: https://accounts.google.com/o/oauth2/auth?' . http_build_query($params));
        exit;
    }
?>