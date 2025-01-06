class Slider extends HTMLElement{
    constructor (){
        super();
    }
    connectedCallback(){
        this.render();
    }
    render(){
        this.innerHTML=`
        <style>
            .img_1{
                width:40vw;
                heigh:57.5vh;
                padding: 2vw;
                }
            .gallery{
                display:grid;
                grid-template-columns:auto auto;
                padding 2vw;
            }
        </style>
        <div class="gallery">
            <img class="img_1" src="./../../assets/model_1.jpg"></img>
            <img class="img_1" src="./../../assets/model_2.jpg"></img>
        </div>
        `;
        
    }

};
customElements.define("slider-def",Slider);
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

    