<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/iconos/fontello-734ff61b/css/fontello.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/jpg" href="/assets/icono/android-chrome-192x192.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/android-chrome-512x512.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/apple-touch-icon.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/favicon-16x16.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/favicon-32x32.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/favicon.ico"/>
   
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Tienda-Bravo's Boots &hats</title>
    <?php
     //require "/xampp/htdocs/bravo/Principal_es/Inicio/sesion/inicio.php";
     require "../Inicio/sesion/inicio.php";
    //  require "/xampp/htdocs/bravo/Principal_es/Inicio/sesion/sesion.php";
    require "../Inicio/sesion/sesion.php";
    $userSession = new SesionUsser();//se crea un nuevo objeto de la clase SesionUsser
             $user = new user(); //Se crea un objeto nuevo del tipo usuario
             $sesionHay;/**************Lo envía a javascript */
             function confirm($user,$userSession){
                if((isset($_SESSION['user']))){
                    $user->setUser($userSession->getCurrentUser());
                    return true;
                }else{
                    return false;
                }
            }
            
    $json=array();
    $json[]=confirm($user,$userSession);
               
?>

</head>
<body>
    <header class="header">  
        <div class="arriba">
            <div class="idioma">
                <span class="mexico" id="mexico"><img src="/assets/mxmexicoflag_111665.png" alt="" class="mxm-img" title="Español"></span>
                <span class="usa" id="usa"><img src="/assets/UnitedStates_US_USA_840_Flag1_26093.png" alt="usa" class="usa-img" title="English"></span>
            </div>
            <div class="logo"><a href="/Principal_es/index.html" title="Principal">
                <img src="/assets/BRAVOS STIKERSo.png" alt="" class="logo-img" title="Principal">
            </a>
            </div>
            <car-shop></car-shop>
            <div class="compra">
                <span class="material-symbols-outlined shopping" id="car">
                   <a href="#"> shopping_cart </a>
                    </span>
                <a href="/Principal_es/Inicio/sesion/index.html" id="padrea">    
                    <span class="material-symbols-outlined person">
                    person
                    </span>
                    <span class="log" id="log"> iniciar sesión</span>    
                </a>
            </div>
        </div>
        <div class="abajo">
            <a href="#">
                <div class="sombreros">
                    SOMBREROS
                </div>
            </a>
            <a href="/Principal_es/Nosotros/index.html">
                <div class="nosotros">
                    NOSOTROS
                </div>
            </a>
            <a href="/Principal_es/Contactos/index.html">
                <div class="contactos">
                    CONTACTOS
                </div>
            </a>
        </div>
    </header>
    <main class="main">

        <div class="contactos-con">
            <div class="todos-cont" id="a">
                <a href="https://api.whatsapp.com/send?phone=5214641030201" class="e" target="_blank">
                    <div class="whatsapp">
                        <i class="icon-whatsapp"></i></div>
                    </a>
                <a href="https://www.instagram.com/bravos.boots.and.hats" target="_blank" class="i">
                    <div class="instagram">
                        <i class="icon-instagram"></i>
                    </div>
                </a>
                <div class="correo" id="correo">
                    <i class="icon-mail-alt"></i>
                </div>
                <a href="tel:5214641030201" class="tel">
                    <div class="telefono">
                        <i class="icon-phone">
                    </i>
                    </div>
                </a>
            </div>
            <div class="btn-contactos" id="contactos-btn">
              <span>contactos</span>
            </div>
        </div>
        <article class="article" id="art">
            <span class="Indicacion">coloque una contraseña de 8 cáracteres</span>
            <?php
             require __DIR__."/../../vendor/DotEnv.php";
             use DevCoder\DotEnv;
             (new DotEnv(__DIR__ . '/../../../.env'))->load();
             $correo=$user->getCorreo();
             /*******En esta sección, confirma si hay un usuario o no */
                /***************Seccion al iniciar sesion *****/
                    //Hacer las peticiones del servidor
                        if(isset($_POST['submit-button'])){
                            //captcha
                            $ip=$_SERVER['REMOTE_ADDR'];
                            $captcha=$_POST['g-recaptcha-response'];
                            $secretkey=$_ENV['secretkey-cap'];
                            $respuesta =file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");
                            $atributos=json_decode($respuesta,TRUE);
                            if(!$atributos['success']){
                                $captcha_error[]="No presiono el captcha";
                                foreach ($captcha_error as $error) {
                                    echo '<div class="Error">'.'<span>'.$error.'</span>' .'</div>';
                                }
                            }else{
                            //  print "Es correcto";
                                if(confirm($user,$userSession)==true){
                                    if(isset($_POST['New'])&&isset($_POST['New1'])) {
                                    $FirstPass=mysqli_real_escape_string(conectar(),$_POST['New']);
                                    $FirstPassConfirm=mysqli_real_escape_string(conectar(),$_POST['New1']);
                                        if($FirstPass==$FirstPassConfirm){
                                            $question="SELECT * FROM `usuarios` WHERE `Contraseña`='$FirstPass' AND `Correo`='$correo'";
                                            $queryConsult=mysqli_query(conectar(),$question);
                                            $rowCount=mysqli_num_rows($queryConsult);
                                            if($rowCount> 0){
                                                $exist_pass[]= "Ya existe esa contraseña ";
                                                foreach ($exist_pass as $error) {
                                                    echo '<div class="Error">'.'<span>'.$error.'</span>' .'</div>';
                                                }
                                            }
                                            else{
                                                //UPDATE usuarios SET `Nombre`="Jose Adrian" WHERE `Nombre`="Alberto"
                                                $insercion="UPDATE `usuarios` SET `Contraseña`=md5('$FirstPass') WHERE `Correo`='$correo'";
                                                $querySend2=mysqli_query(conectar(),$insercion);
                                                echo '<div class="Cambio-contra">'.'<span>'."Se cambió la contraseña exitosamente".'</span>' .'</div>';
                                            }
                                        }else{
                                            $error_pass[]= "No son iguales";
                                            foreach ($error_pass as $error) {
                                                echo '<div class="Error">'.'<span>'.$error.'</span>' .'</div>';
                                            }
                                        }
                                    }else{
                                        $data_lack[]= "No se han colocado los datos";
                                        foreach ($data_lack as $error) {
                                            echo '<div class="Error">'.'<span>'.$error.'</span>' .'</div>';
                                        }
                                    }
                                } else{
                                    if(isset($_POST['New'])&&isset($_POST['New1'])&&isset($_POST['Email'])){
                                        $FirstPass=mysqli_real_escape_string(conectar(),$_POST['New']);
                                        $FirstPassConfirm=mysqli_real_escape_string(conectar(),$_POST['New1']);
                                        $email=$_POST['Email'];
                                        if($FirstPass==$FirstPassConfirm){
                                            $question="SELECT * FROM `usuarios` WHERE `Contraseña`='$FirstPass' AND `Correo`='$email'";
                                            $queryConsult=mysqli_query(conectar(),$question);
                                            $rowCount=mysqli_num_rows($queryConsult);
                                            if($rowCount> 0){
                                                $exist_2[]= "Ya existe esa contraseña ";
                                                foreach ($exist_2 as $error) {
                                                    echo '<div class="Error">'.'<span>'.$error.'</span>' .'</div>';
                                                }
                                            } else{
                                                //UPDATE usuarios SET `Nombre`="Jose Adrian" WHERE `Nombre`="Alberto"
                                                $insercion="UPDATE `usuarios` SET `Contraseña`=md5('$FirstPass') WHERE `Correo`='$email'";
                                                $querySend1=mysqli_query(conectar(),$insercion);
                                                echo '<div class="Cambio-contra">'.'<span>'."Se cambio exitosamente la contraseña,".'<a href="/Principal_es/Inicio/sesion/index.html">'."inicie sesión".'</a>' .'</span>' .'</div>';
                                            }
                                        }else{
                                            $error_pass2[]= "No es la misma";
                                            foreach ($error_pass2 as $error) {
                                                echo '<div class="Error">'.'<span>'.$error.'</span>' .'</div>';
                                            }
                                        }
                                    }else{
                                        $data_lack2[]= "No se han colocado los datos";  
                                        foreach ($data_lack2 as $error) {
                                            echo '<div class="Error">'.'<span>'.$error.'</span>' .'</div>';
                                        }
                                    }
                                } 
                            } 
                        }
                /******************************************** */
                ?>
            <form action="index.php" method="post" class="form1" id="formulario">
                <label for="Email" id="email-l">Correo</label>
                <input type="email"class="text-email"name="Email" placeholder=" Correo" title="Contraseña" id="email-1">

                <label for="New">Nueva contraseña</label>
                <input type="password" id="New-Password" class="text1"name="New" placeholder="password" title="Contraseña">
                <label for="New1">Confirme nueva contraseña</label>
                <input type="password" id="New-Password1"class="text2"name="New1" placeholder="password">
                <!--reCAPTCHA-->
                <div class="g-recaptcha" data-sitekey="6LfL_g8qAAAAAJW_dB35kbh9Pt3VlfQdrNhxaYD8"></div>
                <input type="submit" value="Cambiar contraseña" class="buttonChange" id="Button" name='submit-button'>

            </form>
           
        </article>
    </main>
    <footer class="footer">
        <div class="contactos-footer">
            <span class="AP">
                <a href="/Principal_es/Privacidad/index.html">Aviso de privacidad</a>
            </span>
        </div>
        <div class="derechaf">
            <a href="https://api.whatsapp.com/send?phone=5214641030201" class="wa" target="_blank" title="whahsapp">
                <div class="w">
                    <i class="icon-whatsapp iw"></i></div>
                </a>
            <a href="https://www.instagram.com/bravos.boots.and.hats" title="Instagram" target="_blank" class="ins">
                <div class="In">
                    <i class="icon-instagram ii"></i>
                </div>
            </a>
            <div class="M" id="Mai">
                <i class="icon-mail-alt im"></i>
            </div>
            <a href="tel:5214641030201" class="tele" title="Telefono">
                <div class="T">
                    <i class="icon-phone ip">
                </i>
                </div>
            </a>
        </div>
        <div class="direccion">
            <span>Tampico #704 Colonia Bellavista Salamanca Guanajuato</span>
        </div>
    </footer>
    <script src="script.js"></script>
    <script src="/Principal_es/carrito/index.js"></script>
    <script src="/Principal_es/carrito/CarComp.js"></script>
</body>
</html>
