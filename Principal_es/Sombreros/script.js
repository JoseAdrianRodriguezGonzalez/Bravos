let mx =document.getElementById('mexico');
let usa=document.getElementById('usa');
let correo=document.getElementById('correo');
let cosas=document.getElementById('a');
let contactos=document.getElementById('contactos-btn');


let Mai=document.getElementById('Mai');
//const express =require("express");

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
/***Manejo de JSON */
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
};//
request.send();
/**Manejo de los AJAX */
const EncontrarDato=(Arreglo)=>{
    for(key in Arreglo) {
        if(Arreglo.hasOwnProperty(key)) {
            let value = Arreglo[key];
            //do something with value;
            console.log("Nombre");
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
//manejo deJSON de sombreros
let database="./database.php";
let requestdata = new XMLHttpRequest();
requestdata.open('POST', database, true);

requestdata.onload = function() {
    if (this.status >= 200 && this.status < 400) {
        // Success
        let parsed_response = JSON.parse(this.response.trim());
        JSONDATA(parsed_response);
        console.log(parsed_response);
    } else {
        // Error
        console.log(this.response);
    }
};

requestdata.onerror = function() {
    console.log('Connection error!');
};
requestdata.send();
/**Create the function which takes out the json */
const JSONDATA =(JSONHats)=>{
    const container =document.getElementById('hats');
    let i=0;
    JSONHats.forEach(hat => {
        i++
        const createDiv= document.createElement('div');
        createDiv.classList.add('container', `container-${i}`)
        const link=document.createElement('a')
        link.classList.add('link')
        link.setAttribute('href','#')
        createDiv.appendChild(link);
        for(let key in hat){
            if(key==='Tipo de sombrero'){
                const createSpan=document.createElement('span')
                createSpan.textContent=`${hat[key]} ${hat['Color']} ${hat['nombre']} calidad ${hat['Calidad']}`
                link.appendChild(createSpan);
            }if(key==='Precio'){
                const createSpan=document.createElement('span')
                createSpan.textContent=`Precio: $${hat[key]}`
                link.appendChild(createSpan);
            }
            if(key=='link'){
                const img=document.createElement('img');
                img.src=hat.link;
                link.appendChild(img);
            }
        }

        container.appendChild(createDiv);

    });
}
/**Each value found on the json will be put it in the website and modificate the DOM and also create html elements*/
/*create styles for elements that has been created*/
 /**Texanas */
let Texanas="./texanas.php";
let requestdataT = new XMLHttpRequest();
requestdataT.open('POST', Texanas, true);

requestdataT.onload = function() {
    if (this.status >= 200 && this.status < 400) {
        // Success
        let parsed_response = JSON.parse(this.response.trim());
        JSONDATATEXANAS(parsed_response);
        console.log(parsed_response);
    } else {
        // Error
        console.log(this.response);
    }
};

requestdataT.onerror = function() {
    console.log('Connection error!');
};
requestdataT.send();
const JSONDATATEXANAS =(JSONHats)=>{
    const container =document.getElementById('hats');
    let i=65;
    JSONHats.forEach(hat => {
        i++;
        const createDiv= document.createElement('div');
        createDiv.classList.add('container', `container-${i}`)
        const link=document.createElement('a')
        link.classList.add('link')
        link.setAttribute('href','#')
        createDiv.appendChild(link);
        for(let key in hat){
            if(key==='Tipo de sombrero'){
                const createSpan=document.createElement('span')
                createSpan.textContent=`Texana ${hat[key]} ${hat['Color']} calidad ${hat['Calidad']}`
                link.appendChild(createSpan);
            }if(key==='Precio'){
                const createSpan=document.createElement('span')
                createSpan.textContent=`Precio: $${hat[key]}`
                link.appendChild(createSpan);
            }
            if(key=='link'){
                const img=document.createElement('img');
                img.src=hat.link;
                link.appendChild(img);
            }
        }

        container.appendChild(createDiv);

    })
}