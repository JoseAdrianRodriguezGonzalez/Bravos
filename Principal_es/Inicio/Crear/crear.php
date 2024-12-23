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
            <car-shop></car-shop>
            <div class="compra">
                <span class="material-symbols-outlined shopping" id="car">
                   <a href="#"> shopping_cart </a>
                    </span>
                <a href="/Principal_es/Inicio/sesion/index.html">    
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
        <div class=""></div>
        <article class="articlemain">
            <section class="section-form-crear">
                <h2>Crear cuenta</h2>
                <?php
                    if(isset($error)){
                        echo $error;
                    }
                    ?>
                <form action="/Principal_es/Inicio/Crear/index.php" method="POST" class="crearform">

                    <label for="name">Nombre</label>
                    <input type="text" id="name" class="texto1" name="nombre">
                    <label for="Last-name">Apellidos</label>
                    <input type="text" id="Last-name" class="texto1" name="Apellido">
                    <label for="phone" class="Tel">Teléfono </label>
                    <input type="tel" id="phone" class="texto1" name="Telefono">
                    <label for="Mail" >Correo</label>
                    <input type="email" placeholder="micorreo@gmail.com"id="mail" class="texto1" name="email">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" class="texto1" name="pass">
                    <label for="address">Direccion</label>
                    <input type="text" id="address" class="texto1" name="direccion">
                    <label for="City">Ciudad</label>
                    <input type="text" id="City" class="texto1" name="ciudad">
                    <label for="state">Estado</label>
                    <input type="text" id="state" class="texto1" name="estado">
                    <label for="country">Pais</label>
                    <input type="list"list="countries"id="country" class="texto1" name="paises">
                    <datalist id="countries"></datalist>
                    <label for="Postal" >Codigo Postal</label>
                    <input type="text" id="Postal" class="texto1" name="postal">
                    <span></span>
                    <span></span>
                    <input type="submit" value="Crear cuenta" class="boton1">

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
    <script src="script.js"></script>
    <script src="script-paises.js"></script>
    <script src="/Principal_es/carrito/index.js"></script>
    <script src="/Principal_es/carrito/CarComp.js"></script>
</body>
</html>