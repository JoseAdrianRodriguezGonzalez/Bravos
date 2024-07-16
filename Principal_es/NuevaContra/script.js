/**Manejo del front */

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
});/**Verifica si hay un usuario */
let request2=new XMLHttpRequest();
request2.open('POST','datavariable.php',true);
request2.onload=function(){
    if(this.status>=200 &&this.status<400){
        let parsed_response = JSON.parse(this.response.trim());//Recorta el JSON
        ExistUser(parsed_response);
    }else{
        console.log(this.response);

    }
}
request2.send();
/**uso de ajax para obterne runa varibale y un json  */
const ExistUser=(caso)=>{
    if(caso[0]==true)
        request.send();
    else
        console.log("No existe ese usuario");
}
let url = "/xampp/htdocs/bravo/Principal_es/perfil/index.php"; //Obtiene el php del cual va a sacar los datos
let request = new XMLHttpRequest(); //Hace una xmlhttprequest

request.open('POST', '/Principal_es/perfil/Variables.php', true);//Abre la peticion
/*Carga la petición */
request.onload = function() {
    if (this.status >= 200 && this.status < 400) {
        // Hay buerna respuesta
        let parsed_response = JSON.parse(this.response.trim());//Recorta el JSON
       // console.log(parsed_response);//Imprime la respuesta de JSON
        ManejarJSON(parsed_response);//Realiza el cambio en el DOM con la variable del JSON
        QuitForm();
        
    } else {
        // Error
        console.log(this.status);
        console.log(this.response);//Mnada el codigo de error
        
    }
};/*Al marcar el error, se muestra la conexión de error */
request.onerror = function() {
    console.log('Connection error!');
};
//Envia la petición
/**Manejo de los AJAX */
const EncontrarDato=(Arreglo)=>{
    for(key in Arreglo) {//Hace un arreglo del JSON
        if(Arreglo.hasOwnProperty(key)) {//Si el arreglo tiene cada valor de esa base de datos
            let value = Arreglo[key]; //Se crea una variable value, en la que estará el arreglo y cada valor del JSON
            //do something with value;
            return value["Nombre"] //Retorna ese valor con el argumento "Nombre"
        }
    }
}
const QuitForm=()=>{
    let fomulario=document.getElementById('formulario');
    formulario.removeChild(fomulario.children[0]);
    formulario.removeChild(formulario.children[0]);
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
//ajax para ver si hay un usuario activo
//Detección de caracteres
let el2=document.getElementById('New-Password1')
let el1=document.getElementById('New-Password')


const validatePass=()=>{
    if(el2.value!==''&&el1.value!==''){
        if(el2.value!==el1.value){
            console.log("No es la misma")
            el2.classList.replace('verde','rojo')
        }else{
            console.log("es la misma")
            el2.classList.add('verde','text2')
            el2.classList.replace('rojo','verde')
        }
    } 
}
let email_pass=document.getElementById('email-1')
const dataComplete=()=>{
    if(el1.value.length>=8){
        el1.classList.add('verde','text1')
        el1.classList.replace('rojo','verde') 
    }else{
        el1.classList.add('rojo','text1')
        el1.classList.replace('verde','rojo')
    }
        
    if(email_pass.value!==''){
        email_pass.classList.add('verde','text-email')
        email_pass.classList.replace('rojo','verde') 
    }else{
        email_pass.classList.add('rojo','text-email')
        email_pass.classList.replace('verde','rojo')
    }
        
    validatePass()
}
const comparePassword=()=>{
    el2.addEventListener("blur",dataComplete);
    el2.addEventListener("keyup",dataComplete);
    el1.addEventListener("blur",dataComplete);
    el1.addEventListener("keyup",dataComplete);
    email_pass.addEventListener("blur",dataComplete);
    email_pass.addEventListener("keyup",dataComplete);
}
comparePassword();
let boton =document.getElementById('Button')
/*
boton.addEventListener('submit',(e)=>{
    e.preventDefault();
    
})*/