document.addEventListener('DOMContentLoaded', () => {
    const carrusel = document.querySelector('.carrusel-contenedor');
    const items = document.querySelectorAll('.carrusel-item');
    const totalItems = items.length;
    let index = 0;
  
    document.querySelector('.carrusel-boton.izquierda').addEventListener('click', () => {
      index = (index > 0) ? index - 1 : totalItems - 1;
      carrusel.style.transform = `translateX(-${index * 100}%)`;
    });
  
    document.querySelector('.carrusel-boton.derecha').addEventListener('click', () => {
      index = (index < totalItems - 1) ? index + 1 : 0;
      carrusel.style.transform = `translateX(-${index * 100}%)`;
    });
  });
  
