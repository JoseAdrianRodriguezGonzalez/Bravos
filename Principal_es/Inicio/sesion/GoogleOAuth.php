<?php
    //require __DIR__."/DotEnv.php";
    require __DIR__."/sesion.php";
    require __DIR__."/inicio.php";
    
    use DevCoder\DotEnv;
    (new DotEnv(__DIR__ . '/../../../../.env'))->load();

    $userSession=new SesionUsser();
    $NewUser=new user();
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
    if (isset($response['access_token']) && !empty($response['access_token'])) {
        // Execute cURL request to retrieve the user info associated with the Google account
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.googleapis.com/oauth2/' . $google_OAuth_version . '/userinfo');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . $response['access_token']]);
        $response = curl_exec($ch);
        curl_close($ch);
        $profile = json_decode($response, true);
        // Make sure the profile data exists
        if (isset($profile['email'])) {
            $google_name_parts = [];
            $google_name_parts[] = isset($profile['given_name']) ? preg_replace('/[^a-zA-Z0-9]/s', '', $profile['given_name']) : '';
            $google_name_parts[] = isset($profile['family_name']) ? preg_replace('/[^a-zA-Z0-9]/s', '', $profile['family_name']) : '';
            // Code goes here...
            session_regenerate_id();
            $_SESSION['google_loggedin'] = TRUE;
            $_SESSION['google_email'] = $profile['email'];
            $_SESSION['google_name'] = implode(' ', $google_name_parts);
            $name=$google_name_parts[0];
            $lastname=$google_name_parts[1];
            $newmail=$_SESSION['google_email'];
            $preguntar="SELECT *FROM `usuarios` WHERE   `Correo`='$newmail'";
            $queryConsulta= mysqli_query(conectar(),$preguntar);
            $rowCount=mysqli_num_rows($queryConsulta);
            if($rowCount>0){
                $_SESSION['user']=$user;
                header("location: ../../index.html");           
                echo "si";
            }
            else{

                echo "se agrego";
                $insertar= "INSERT INTO `usuarios` (`Nombre`, `Apellidos`, `id`, `Correo`) VALUES('$name','$lastname',NULL,'$newmail')";
                $query=mysqli_query(conectar(),$insertar);
                if($query){
                    
                    header("location: ../../index.html");
                }
            }
            
            
        } else {
            exit('Could not retrieve profile information! Please try again later!');
        }
    } else {
        exit('Invalid access token! Please try again later!');
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