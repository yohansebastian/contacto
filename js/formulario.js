const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');


const expresiones = {

    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{7,14}$/, // 7 a 14 numeros.
    mensaje: /^[a-zA-ZÀ-ÿ\s]{1,40}$/
}



inputs.forEach((input) => {

    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);

})

formulario.addEventListener('submit', (e) => {

});