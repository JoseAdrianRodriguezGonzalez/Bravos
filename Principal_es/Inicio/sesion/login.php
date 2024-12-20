<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/iconos/fontello-734ff61b/css/fontello.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/jpg" href="/assets/icono/android-chrome-192x192.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/android-chrome-512x512.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/apple-touch-icon.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/favicon-16x16.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/favicon-32x32.png"/>
    <link rel="icon" type="image/jpg" href="/assets/icono/favicon.ico"/>
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
            <div class="logo"><a href="/Principal_es/index.html" title="Principal">
                <img src="/assets/BRAVOS STIKERSo.png" alt="" class="logo-img" title="Principal">
            </a>
            </div>
            <div class="compra">
                <span class="material-symbols-outlined shopping" id="car">
                   <a href="#"> shopping_cart </a>
                    </span>
                <a href="#">    
                    <span class="material-symbols-outlined person">
                    person
                    </span>
                    <span class="log">iniciar sesión</span>    
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
        <div></div>
        <article class="articlemain">
            <section class="section-form-inicio">
                <h2> Iniciar Sesión</h2>
                <form action="index.php" method="post" class="Formulario">
                    <?php
                        
                        if(isset($error)){
                            echo $error;
                        }
                    ?>
                    <label for="mailcreated">Correo</label>
                    <input type="text" id="mailcreated" class="texto" name="mail">
                    <label for="passcreated">Contraseña</label>
                    <input type="password" id="passcreated" class="texto" name="pass">
                    <input type="submit" value="Iniciar sesión" class="boton">
                    <span>¿Se te olvidó laa contraseña?,recuperala aquí</span>
                    <span class="boton2"><a href="/Principal_es/NuevaContra/index.html">Cambiar contraseña</a></span>
                    <span>¿No tienes cuenta con nosotros? cree una aquí</span>
                    <span class="boton1"><a href="/Principal_es/Inicio/Crear/index.html" class="link"><span></span>Crear cuenta</a></span>
                </form>
            </section>

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
    <script src="/Principal_es/Inicio/sesion/script.js"></script>
</body>
</html>