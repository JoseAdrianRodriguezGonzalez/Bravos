<!DOCTYPE html>
<html lang="es">
    <?php
    require "/xampp/htdocs/bravo/Principal_es/Inicio/sesion/inicio.php";
    require "/xampp/htdocs/bravo/Principal_es/Inicio/sesion/sesion.php";

    $userSession = new SesionUsser();//se crea un nuevo objeto de la clase SesionUsser
    $user = new user();
    $user->setUser($userSession->getCurrentUser());
    $nombre= $user->getNombre(); 
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/iconos/fontello-734ff61b/css/fontello.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon" type="image/jpg" href="/assets/icono/android-chrome-192x192.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/android-chrome-512x512.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/apple-touch-icon.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/favicon-16x16.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/favicon-32x32.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/favicon.ico"/>
    <link rel="stylesheet" href="styles.css">
    <script src="/SrcollReveal/scrollreveal.js"></script>
    <title>Tienda-Bravo's Boots &hats</title>
</head>
<body>
    <header class="header">  
        <div class="arriba">
            <div class="idioma">
                <span class="mexico" id="mexico"><img src="/assets/mxmexicoflag_111665.png" alt="" class="mxm-img" title="Español"></span>
                <span class="usa" id="usa"><img src="/assets/UnitedStates_US_USA_840_Flag1_26093.png" alt="usa" class="usa-img" title="English"></span>
            </div>
            <div class="logo"><a href="/Principal_es/index.php" title="Principal">
                <img src="/assets/BRAVOS STIKERSo.png" alt="" class="logo-img" title="Principal">
            </a>
            </div>
            <div class="compra">
                <span class="material-symbols-outlined shopping">
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
            <a href="/Principal_es/Nosotros/index.php">
                <div class="nosotros">
                    NOSOTROS
                </div>
            </a>
            <a href="/Principal_es/Contactos/index.php">
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
        <section class="section1">Bravo's boots and hats es una tienda con una amplia experiencia en el mercado de accesorios del tipo vaquero, con materiales de la mejor calidad, con los mejores proveedores, ofreciendo a su vez, personalizaciones a los productos de su compra, especializándonos en el arte y trabajo de los sombreros.
            Nuestra tienda se caracteriza por su atención rápida y eficaz en los 365 días.
        Estamos a sus ordenes para resolver todas sus dudas.</section>
    </main>
    <footer class="footer">
        <div class="contactos-footer">
            <span class="AP">
                <a href="/Principal_es/Privacidad/index.php">Aviso de privacidad</a>
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
    <script src="/Principal_es/Nosotros/script.js"></script>

</body>
</html>