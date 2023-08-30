let pais=document.getElementById('countries');
let xhr;
if(window.XMLHttpRequest) xhr=new XMLHttpRequest(); //Esta es la parte en la que se prepara para crear el objeto 
else xhr=new ActiveXObject("Microsoft.XMLHTTP");

xhr.open('GET','paises.json');
xhr.addEventListener('load',(data)=>{
    const dataJSON =JSON.parse(data.target.response);
    console.log(dataJSON);
    const fragment=document.createDocumentFragment();
    for(const paises of dataJSON.countries){
        const option=document.createElement('option');
        option.setAttribute('value',paises.name);
        option.textContent =paises.name;
        fragment.appendChild(option);
    }
    pais.appendChild(fragment);
})
xhr.send();