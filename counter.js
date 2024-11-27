// Función para obtener el valor de una cookie por su nombre
function getCookie(name) {
    let cookieArr = document.cookie.split(";");

    for (let i = 0; i < cookieArr.length; i++) {
        let cookiePair = cookieArr[i].split("=");

        if (name == cookiePair[0].trim()) {
            return decodeURIComponent(cookiePair[1]);
        }
    }

    return null;
}

// Función para establecer una cookie
function setCookie(name, value, days) {
    let date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    let expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + encodeURIComponent(value) + ";" + expires + ";path=/";
}

// Función para manejar el contador de visitas
function handleVisitCounter() {
    // Nombre de la cookie
    const cookieName = "visited";

    // Buscar la cookie 'visited'
    let visited = getCookie(cookieName);

    if (!visited) {
        // Obtener el contador actual del almacenamiento local
        let visitCount = localStorage.getItem("visitCount");

        // Incrementar el contador o inicializarlo si no existe
        visitCount = visitCount ? parseInt(visitCount) + 1 : 1;

        // Guardar el nuevo valor en el almacenamiento local
        localStorage.setItem("visitCount", visitCount);

        // Establecer la cookie 'visited' que expira en 24 horas
        setCookie(cookieName, "true", 1);

        // Actualizar el contador en la página
        document.getElementById("visit-count").textContent = visitCount;
    } else {
        // Mostrar el contador actual sin incrementarlo
        document.getElementById("visit-count").textContent = localStorage.getItem("visitCount");
    }
}

// Ejecutar la función para manejar el contador de visitas al cargar la página
window.onload = handleVisitCounter;
