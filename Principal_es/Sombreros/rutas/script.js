let mx =document.getElementById('mexico');
let usa=document.getElementById('usa');
let correo=document.getElementById('correo');
let cosas=document.getElementById('a');
let contactos=document.getElementById('contactos-btn');

let Mai=document.getElementById('Mai');



let a=false;
mx.addEventListener('click',()=>{
    location.href="/Principal_es/index.html";
})
usa.addEventListener('click',()=>{
    location.href="/Principal_en/index.html";
})
correo.addEventListener('click',()=>{
    location.href="mailto:bravosboots.hats@gmail.com"
})
Mai.addEventListener('click',()=>{
    location.href="mailto:bravosboots.hats@gmail.com"
})
contactos.addEventListener('click',()=>{
    
    if(a==false){
        cosas.classList.add("abierto");
        cosas.classList.replace("todos-cont","abierto");
        a=true;
    }else{
        cosas.classList.remove("abierto");
        cosas.classList.add("todos-cont")
        a=false;
        
    }
});

/**JSON */
let url = "/xampp/htdocs/bravo/Principal_es/perfil/index.php";
let request = new XMLHttpRequest();

request.open('POST', '/Principal_es/perfil/Variables.php', true);

request.onload = function() {
    if (this.status >= 200 && this.status < 400) {
        // Success
        let parsed_response = JSON.parse(this.response.trim());
        console.log(Object.keys(parsed_response).length);
        if(Object.keys(parsed_response).length){
            ManejarJSON(parsed_response);
        }
    } else {
        // Error
        console.log(this.response);
    }
};
request.onerror = function() {
    console.log('Connection error!');
};
request.send();
/**Manejo de los AJAX */
const EncontrarDato=(Arreglo)=>{
    for(key in Arreglo) {
        if(Arreglo.hasOwnProperty(key)) {
            let value = Arreglo[key];
            //do something with value;
            return value["Nombre"]
        }
    }
}
const ManejarJSON=(JSONPHP)=>{
    let texto=EncontrarDato(JSONPHP);
    let ini=document.getElementById('log');
    let link=document.getElementById('padrea');
    const ini2=document.createElement('span');
    ini2.classList.add('ini2','log');
    ini2.textContent=texto;
    ini.append(ini2)
    link.replaceChild(ini2,ini);
    link.setAttribute("href","/Principal_es/perfil/index.html");
}

// CREDITS : https://www.cssscript.com/image-zoom-pan-hover-detail-view/
var addZoom = target => {
    // (A) GET CONTAINER + IMAGE SOURCE
    let container = document.getElementById(target),
        imgsrc = container.currentStyle || window.getComputedStyle(container, false);
        imgsrc = imgsrc.backgroundImage.slice(4, -1).replace(/"/g, "");
   
    // (B) LOAD IMAGE + ATTACH ZOOM
    let img = new Image();
    img.src = imgsrc;
    img.onload = () => {
      // (B1) CALCULATE ZOOM RATIO
      let ratio = img.naturalHeight / img.naturalWidth,
          percentage = ratio * 100 + "%";
        
        if(window.innerWidth<=800){
            container.addEventListener('touchstart',e=>{
                e.preventDefault();
                container.addEventListener('touchmove', e => {
                    e.preventDefault();  // Prevent default scrolling behavior
              
                    // Get the touch position relative to the container
                    let rect = container.getBoundingClientRect(),
                        touch = e.touches[0],  // Get the first touch
                        xPos = touch.clientX - rect.left,
                        yPos = touch.clientY - rect.top;
              
                    // Calculate the percentage of the container that the touch is at
                    let xPercent = (xPos / container.clientWidth) * 100;
                    let yPercent = (yPos / container.clientHeight) * 100;
              
                    // Set the background position and zoom size
                    // Adjust the zoom factor, here we multiply the image size by 2 for a stronger zoom
                    let zoomFactor = 2; 
                    Object.assign(container.style, {
                      backgroundPosition: `${xPercent}% ${yPercent}%`,
                      backgroundSize: `${img.naturalWidth * zoomFactor}px ${img.naturalHeight * zoomFactor}px`
                    });
                  });
              

            });
            container.addEventListener('touchend', () => {
                Object.assign(container.style, {
                  backgroundPosition: "center",
                  backgroundSize: "cover"
                });
              });
        }else{
      // (B2) ATTACH ZOOM ON MOUSE MOVE
        container.onmousemove = e => {
            let rect = e.target.getBoundingClientRect(),
                xPos = e.clientX - rect.left,
                yPos = e.clientY - rect.top,
                xPercent = xPos / (container.clientWidth / 100) + "%",
                yPercent = yPos / ((container.clientWidth * ratio) / 100) + "%";

            Object.assign(container.style, {
            backgroundPosition: xPercent + " " + yPercent,
            backgroundSize: img.naturalWidth + "px"
            });
        };

        // (B3) RESET ZOOM ON MOUSE LEAVE
        container.onmouseleave = e => {
            Object.assign(container.style, {
            backgroundPosition: "center",
            backgroundSize: "cover"
            });
        };
        }
    }
  };
   
  // (C) ATTACH FOLLOW ZOOM
  window.onload = () => addZoom("Div-hats");