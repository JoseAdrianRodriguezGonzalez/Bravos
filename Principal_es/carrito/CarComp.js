
class CarComp extends HTMLElement{
    constructor (){
        super();
    }
    connectedCallback(){
        this.render();
        this.AddProducts();
    }
    render(){
        
        this.innerHTML=`
        <style>
        .carrito_1{
            background-color: rgba(0,0,0,.3);
            position: fixed;
            top:0;
            left:0;
            right:0;
            bottom:0;
            display: grid;
            align-items: center;
            justify-content:end;
            visibility: hidden;
        }
        .imagexlogo{
            display: grid;
            grid-template-columns: repeat(3,1fr);
            
        }
        .imagex{
            grid-column: 3;
        }
        .carrito_1.active{
            visibility: visible;
        }
        .layer{
            background-color:rgba(255, 228, 196, 1);
            display :inherit;
            
            border-radius:2vw;
            border:0.5vw solid rgba(0,0,0,.3);
            justify-items: center;
            align-items:center ;
        }


        .Title-hat{}
        .Img-Hat{
            width:15vw;
        }
        .Price{
            text-align:center;
        }
        .Quantity{
            display:flex;
            flex-direction:column;
            text-align:center;
            align-items:center;        
        }
        .Buttons{
            background-color:antiquewhite;
        width:15vw;
        display:flex;
        flex-direction:row;
        }
        
        .Buttons div{
            text-align:center;
            width:5vw;
            border: 1px solid black;
        }
        .div_img{
            display:flex;
            justify-content:center;
        }
        .Photos{}
        .Set-Items{
            display:flex;
            flex-direction:column;
            overflow-y:auto;
            max-height:70vh;
            padding:3vw;
            padding-top:30vw;
            justify-content:center;
            }
        </style>
            <link rel="stylesheet" href="style.css">
                <div class="carrito_1" id="carrito">
                    <div class="layer" id="layer">
                        <div class="imagexlogo">
                            <img src="/assets/icono/dibujo-1.svg" width="30" height="40" class="imagex" id="close"> 
                        </div>
                        <h1>Carro</h1>
                        <div class="cantidad" id="Conjunto">
                            <span>Artículos</span>
                            
                        </div>
                    </div>
                </div>
`;

    }
    AddProducts(){
        const conj=document.getElementById('Conjunto')
        const jsonRetrieve=JSON.parse(localStorage.getItem('Product'))||[];
        conj.innerHTML = '';
        for(const hats of jsonRetrieve){
            const div=document.createElement('div');
            const span=document.createElement('span'); //type,color,quality,name
            const div_img=document.createElement('div');
            const img=document.createElement('img');
            const spanPrice=document.createElement('div');
            const quantity=document.createElement('div');
            span.textContent=`${hats["Hats"]} `+ `${hats["nombre"]} ` + `${hats["Color"]} ` + `${hats["Calidad"]} `
            img.src=`../${hats["link"]}`
            spanPrice.textContent=`Precio:${hats['Precio']*hats['Cantidad']}`
            quantity.textContent=`Cantidad:\n`
            quantity.appendChild(this.AddMore(hats['Cantidad']));
            span.classList.add("Title-hat");
            img.classList.add("Img-Hat");
            spanPrice.classList.add("Price");
            quantity.classList.add("Quantity");
            div_img.classList.add("div_img");
            div.classList.add("Photos");
            conj.classList.add("Set-Items")
            div.appendChild(span);
            div.appendChild(div_img);
            div_img.appendChild(img);
            div.appendChild(spanPrice);
            div.appendChild(quantity);
            conj.appendChild(div)
        }
        console.log(jsonRetrieve)
    }
    AddMore(number){
        const Add=document.createElement('div');
        for(let i=0;i<3;i++){
            const AddDiv=document.createElement('div');
            if(i==1){
                AddDiv.innerHTML=number;
            }else if(i==0){
                AddDiv.innerHTML=`-`
            }
            else{
                AddDiv.innerHTML=`+`;
            }
            AddDiv.classList.add=`Container ${i}`
        Add.appendChild(AddDiv);
        }
        Add.classList.add('Buttons')
        return Add;
    }
};
customElements.define("car-shop",CarComp);
/*
.compra{
    
    flex-grow: 1;
    display: inherit;
    align-items: center;
    justify-items:center;
}
.material-symbols-outlined{
    font-size: 40px;
    flex-grow: 5;
    justify-items: center;
    display: inherit;
}
.shopping{
    
    justify-content: center;*/

    