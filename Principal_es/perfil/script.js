/**Manejo del front */

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
/**uso de ajax para obterne runa varibale y un json  */
let url = "/xampp/htdocs/bravo/Principal_es/perfil/index.php";
let request = new XMLHttpRequest();

request.open('POST', '/Principal_es/perfil/Variables.php', true);
request.addEventListener("load",()=>{
    if (this.status >= 200 && this.status < 400) {
        // Success
        let parsed_response = JSON.parse(this.response.trim());
        console.log(parsed_response);
    } else {
        // Error
        console.log(this.response);
    }
})
request.addEventListener("error",()=>{
    console.log('Connection error!');
})
/*
request.onload = function() {
    
};
request.onerror = function() {

};*/
request.send();
/**Manejo de los JSON */
