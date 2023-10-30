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
let url = "/xampp/htdocs/bravo/Principal_es/perfil/index.php"; //Obtiene el php del cual va a sacar los datos
let request = new XMLHttpRequest(); //Hace una xmlhttprequest

request.open('POST', '/Principal_es/perfil/Variables.php', true);//Abre la peticion
/*Carga la petición */
request.onload = function() {
    if (this.status >= 200 && this.status < 400) {
        // Hay buerna respuesta
        let parsed_response = JSON.parse(this.response.trim());//Recorta el JSON
        console.log(parsed_response);//Imprime la respuesta de JSON
        ManejarJSON(parsed_response);//Realiza el cambio en el DOM con la variable del JSON
        PutDataUser(parsed_response);
    } else {
        // Error
        console.log(this.response);//Mnada el codigo de error
    }
};/*Al marcar el error, se muestra la conexión de error */
request.onerror = function() {
    console.log('Connection error!');
};
request.send();//Envia la petición
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
