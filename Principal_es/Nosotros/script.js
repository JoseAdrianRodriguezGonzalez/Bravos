let mx =document.getElementById('mexico');
let usa=document.getElementById('usa');
let correo=document.getElementById('correo');
let cosas=document.getElementById('a');
let contactos=document.getElementById('contactos-btn');

let Mai=document.getElementById('Mai');

window.sr=ScrollReveal();

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
        console.log(parsed_response);
        ManejarJSON(parsed_response);
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
}