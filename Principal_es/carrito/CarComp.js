class CarComp extends HTMLElement{
    constructor (){
        super();
    }
    connectedCallback(){
        this.render();
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

            justify-items: center;
            align-items:center ;
        }
        </style>
            <link rel="stylesheet" href="style.css">
                <div class="carrito_1" id="carrito">
                    <div class="layer" id="layer">
                        <div class="imagexlogo">
                            <img src="/assets/icono/dibujo-1.svg" width="30" height="40" class="imagex" id="close"> 
                        </div>
                        <h1>Carro</h1>
                        <div class="cantidad">
                            <span>Artículos</span>
                            <span></span>
                        </div>
                    </div>
                </div>
`;
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

    