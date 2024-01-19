const linkAbrirModal = 
document.querySelector("#abrir")
const btnCerrarModal = 
document.querySelector("#cerrar")
const modal = 
document.querySelector("#modalIni")

linkAbrirModal.addEventListener("click",()=>{
    modalIni.showModal();
})

btnCerrarModal.addEventListener("click",()=>
{
    modalIni.close();
})