// Función para cambiar el fondo a negro y guardar la preferencia
function cambiarColorNegro() {
    var colorNegro = '#000000'; // Negro oscuro
    document.body.style.background = colorNegro;
    localStorage.setItem('fondo', colorNegro);
}

// Función para cambiar el fondo a azul oscuro y guardar la preferencia
function cambiarColorAzul() {
    var colorAzul = 'rgb(10, 10, 24)'; // Azul oscuro
    document.body.style.background = colorAzul;
    localStorage.setItem('fondo', colorAzul);
}

// Función para restaurar el color de fondo original y eliminar la preferencia guardada
function restaurarColor() {
    var colorOriginal = '-webkit-linear-gradient(to right, #434343, #000000), linear-gradient(to right, #434343, #000000)';
    document.body.style.background = colorOriginal;
    localStorage.removeItem('fondo'); // Eliminar la preferencia guardada
}

// Verificar si hay un color de fondo guardado en localStorage al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    var colorGuardado = localStorage.getItem('fondo');
    if (colorGuardado) {
        document.body.style.background = colorGuardado;
    }
},

function irAPaginaPrincipal() {
    window.location.href = "Inicio.html"; // Cambia "pagina-principal.html" por la URL de tu página principal
});
