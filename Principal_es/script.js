let mx =document.getElementById('mexico');
let usa=document.getElementById('usa');
let correo=document.getElementById('correo');
let cosas=document.getElementById('a');
let contactos=document.getElementById('contactos-btn');

let izquierda=document.getElementById('izq');
let derecha=document.getElementById('der');
let grupo=document.getElementById('gr');
let animacion=document.getElementById('animacion');
//let arreglo=[].slice.call(grupo.children);
let Mai=document.getElementById('Mai');
//console.log(arreglo instanceof Array);


animacion.load();
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
/*
derecha.addEventListener('click',()=>{
    ultimo=arreglo.pop();

    arreglo.unshift(ultimo);
    ultimo.classList.add('animacion');

    setTimeout(() => {
        grupo.insertAdjacentElement('afterbegin',ultimo);        
        if(ultimo.classList.contains('animacion')){
            ultimo.classList.remove('animacion');
             
        }
    }, 500);

})
izquierda.addEventListener('click',()=>{
    primero=arreglo.shift();
    arreglo.push(primero);
    primero.classList.add('animacion');
    setTimeout(() => {

        grupo.insertAdjacentElement('afterbegin',primero);        
        if(primero.classList.contains('animacion')){
            primero.classList.remove('animacion');
           
        }
    }, 500);
})*/
/***Manejo de JSON */

console.log("si")
let url = "/xampp/htdocs/bravo/Principal_es/perfil/index.php";
let request = new XMLHttpRequest();

request.open('POST', './perfil/Variables.php', true);

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