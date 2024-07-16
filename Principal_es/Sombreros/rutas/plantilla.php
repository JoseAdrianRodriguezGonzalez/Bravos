<!DOCTYPE html>
<html lang="es">
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
    

    <title>Tienda-Bravo's Boots &hats</title>
</head>
<?php
$item=$_GET['id'];
$tip=$_GET['tip'];
require "./../../Inicio/Crear/connect.php";

function peticion($instruccion){
    $query1=mysqli_query(conectar(),$instruccion); //envia peticion

    $json = array();
    while($row = mysqli_fetch_assoc($query1)){
            $json[] = $row;
    }
    return json_encode($json);
}
$tejidos="SELECT * FROM `tejidos` WHERE `id`=$item"; //selecciona el usuario, 
if($tip=="tex"){
    $texanas="SELECT * FROM `texana` WHERE `id`=$item";
    $json=peticion($texanas);
} 
else{
    $json=peticion($tejidos);
}
?>
<body>
    <!--Cabecera-->
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
                <span class="material-symbols-outlined shopping">
                   <a href="#"> shopping_cart </a>
                    </span>
                <a href="/Principal_es/Inicio/sesion/index.html" id="padrea">    
                    <span class="material-symbols-outlined person">
                    person
                    </span>
                    <span class="log" id="log">iniciar sesión</span>    
                </a>
            </div>
        </div>
        <div class="abajo">
            <a href="/Principal_es/Sombreros/index.html">
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

    <div class="contactos-con">
        <div class="todos-cont" id="a">
            <!--Whatsapp-->
            <a href="https://api.whatsapp.com/send?phone=5214641030201" class="e" target="_blank">
                <div class="whatsapp">
                    <i class="icon-whatsapp"></i></div>
                </a>
                <!--Instagram-->
            <a href="https://www.instagram.com/bravos.boots.and.hats" target="_blank" class="i">
                <div class="instagram">
                    <i class="icon-instagram"></i>
                </div>
            </a>
            <!--Correo-->
            <div class="correo" id="correo">
                <i class="icon-mail-alt"></i>
            </div>
            <!--Telefono-->
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
    <section class="container"id="container">

    </section>

 <!--Pie de página-->
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
<script>
    let data=<?php echo $json;?>;
    let typehat=<?php echo $_GET['tip']?>;
    console.log(typehat);
    if(typehat==="tex"){
        let documentEle=document.getElementById('container');
        const createDiv=document.createElement('div');
        createDiv.classList.add('container-hat');
        const divimg=document.createElement('div');
        divimg.classList.add('Div-image');
        createDiv.appendChild(divimg);
        const img=document.createElement('img');
        img.classList.add('Hat-img');
        img.setAttribute('src',`./.${data[0]['link']}`)
        divimg.appendChild(img)
        const section1=document.createElement('section');
        section1.classList.add('section1');
        createDiv.appendChild(section1);
        const title1=document.createElement('h1');
        title1.textContent=`${data[0]["Tipo de sombrero"]}`+ ` ${data[0]["Color"]}`+ ` ${data[0]["Calidad"]} `
        section1.appendChild(title1)
        const span1=document.createElement('span');
        const span3=document.createElement('span');
        const span4=document.createElement('span');
        let adata=`${data[0]["Tamaño"]}`
        adata=adata.split("  ")
        span1.textContent= adata[0];
        span3.textContent= adata[2];
        span4.textContent='Medidas';
        section1.appendChild(span4);
        section1.appendChild(span1);
        section1.appendChild(span3);
        const span2=document.createElement('span');
        span2.textContent= `$ ${data[0]["Precio"]} `
        section1.appendChild(span2);
        //createDiv.textContent=`${data[0]["Color"]}`
        documentEle.appendChild(createDiv);
    }else{
        console.log("flaso")
        let documentEle=document.getElementById('container');
        const createDiv=document.createElement('div');
        createDiv.classList.add('container-hat');
        const divimg=document.createElement('div');
        divimg.classList.add('Div-image');
        createDiv.appendChild(divimg);
        const img=document.createElement('img');
        img.classList.add('Hat-img');
        img.setAttribute('src',`./.${data[0]['link']}`)
        divimg.appendChild(img)
        const section1=document.createElement('section');
        section1.classList.add('section1');
        createDiv.appendChild(section1);
        const title1=document.createElement('h1');
        title1.textContent=`${data[0]["Tipo de sombrero"]}`+ ` ${data[0]["nombre"]}`+ ` ${data[0]["Color"]}`+ ` ${data[0]["Calidad"]} `
        section1.appendChild(title1)
        const span1=document.createElement('span');
        const span3=document.createElement('span');
        const span4=document.createElement('span');
        let adata=`${data[0]["Medidas"]}`
        adata=adata.split("  ")
        span1.textContent= adata[0];
        span3.textContent= adata[2];
        span4.textContent='Medidas';
        section1.appendChild(span4);
        section1.appendChild(span1);
        section1.appendChild(span3);
        const span2=document.createElement('span');
        span2.textContent= `$ ${data[0]["Precio"]} `
        section1.appendChild(span2);
        //createDiv.textContent=`${data[0]["Color"]}`
        documentEle.appendChild(createDiv);
    }
    
</script>
</body>
</html>