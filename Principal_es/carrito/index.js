let car=document.getElementById('car');
let inner=document.getElementById('carrito');
let buttonclose=document.getElementById('close');
car.addEventListener('click',()=>{
    inner.classList.add('active');
})
buttonclose.addEventListener('click',()=>{
    inner.classList.remove('active');
})