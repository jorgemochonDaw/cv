const btnFormulario1 = document.querySelector('#formulario1');
const btnFormulario2 = document.querySelector('#formulario2');
const btnFormulario3 = document.querySelector('#formulario3');
const btnFormulario4 = document.querySelector('#formulario4');
const btnFormulario5 = document.querySelector('#formulario5');
const btnCrear = document.querySelector('#btn-crear');

eventos();

function eventos() {
    btnFormulario1.addEventListener('click', formulario1);
    btnFormulario2.addEventListener('click', formulario2);
    btnFormulario3.addEventListener('click', formulario3);
    btnFormulario4.addEventListener('click', formulario4);
    btnFormulario5.addEventListener('click', formulario5);
}

function formulario1(e) {
    e.preventDefault();
    let section1 = e.target.parentElement.parentElement.parentElement;
    if (section1.classList.contains('mostrar')) {
        section1.remove('mostrar');
        let section2 = btnFormulario2.parentElement.parentElement.parentElement;
        section2.classList.remove('ocultar');
        section2.classList.add('mostrar');
    }
}

function formulario2(e) {
    e.preventDefault();
    let section2 = e.target.parentElement.parentElement.parentElement;
    if (section2.classList.contains('mostrar')) {
        section2.remove('ocultar');
        let section3 = btnFormulario3.parentElement.parentElement.parentElement;
        section3.classList.remove('ocultar');
        section3.classList.add('mostrar');
    }
}

function formulario3(e) {
    e.preventDefault();
    let section3 = e.target.parentElement.parentElement.parentElement;
    if (section3.classList.contains('mostrar')) {
        section3.remove('ocultar');
        let section4 = btnFormulario4.parentElement.parentElement.parentElement;
        section4.classList.remove('ocultar');
        section4.classList.add('mostrar');
    }
}

function formulario4(e) {
    e.preventDefault();
    let section4 = e.target.parentElement.parentElement.parentElement;
    if (section4.classList.contains('mostrar')) {
        section4.remove('ocultar');
        let section5 = btnFormulario5.parentElement.parentElement.parentElement;
        section5.classList.remove('ocultar');
        section5.classList.add('mostrar');
    }
}

function formulario5(e) {
    e.preventDefault();
    let section5 = e.target.parentElement.parentElement.parentElement;
    if (section5.classList.contains('mostrar')) {
        section5.remove('ocultar');
        let section6 = btnCrear.parentElement;
        section6.classList.remove('ocultar');
        section6.classList.add('mostrar');
    }
}