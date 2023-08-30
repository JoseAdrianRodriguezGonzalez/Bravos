let mx =document.getElementById('mexico');
let usa=document.getElementById('usa');
let correo=document.getElementById('correo');
let cosas=document.getElementById('a');
let contactos=document.getElementById('contactos-btn');

let izquierda=document.getElementById('izq');
let derecha=document.getElementById('der');
let grupo=document.getElementById('gr');
let animacion=document.getElementById('animacion');
let arreglo=[].slice.call(grupo.children);
let Mai=document.getElementById('Mai');
console.log(arreglo instanceof Array);
window.sr=ScrollReveal();

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
})