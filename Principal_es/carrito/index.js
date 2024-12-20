document.addEventListener("DOMContentLoaded",()=>{
    let car=document.getElementById('car');
    let inner=document.getElementById('carrito');
    let buttonclose=document.getElementById('close');
    car.addEventListener('click',()=>{
        inner.classList.add('active');
    })
    buttonclose.addEventListener('click',()=>{
        inner.classList.remove('active');
    })
})
/*
            <div class="compra">
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



                css
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
    
    justify-content: center;
*/