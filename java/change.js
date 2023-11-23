document.addEventListener("DOMContentLoaded", function() {
    // Obtén las referencias a las etiquetas "Agregar paciente", "Actualizar paciente" y "Eliminar paciente".
    var agregarLink = document.querySelector('a[href="#agregar"]');
    var actualizarLink = document.querySelector('a[href="#actualizar"]');
    var eliminarLink = document.querySelector('a[href="#eliminar"]');

    // Obtén las referencias a las formas "Agregar", "Actualizar" y "Eliminar".
    var agregarForm = document.querySelector('.form1');
    var actualizarForm = document.querySelector('.form2');
    var eliminarForm = document.querySelector('.form3');

    // Oculta las formas de actualización y eliminación al cargar la página.
    actualizarForm.style.display = 'none';
    eliminarForm.style.display = 'none';

    // Agrega un manejador de eventos al enlace "Agregar paciente".
    agregarLink.addEventListener('click', function(event) {
        event.preventDefault(); // Evita que el enlace redirija.
        agregarForm.style.display = 'block';
        actualizarForm.style.display = 'none';
        eliminarForm.style.display = 'none';
    });

    // Agrega un manejador de eventos al enlace "Actualizar paciente".
    actualizarLink.addEventListener('click', function(event) {
        event.preventDefault(); // Evita que el enlace redirija.
        agregarForm.style.display = 'none';
        actualizarForm.style.display = 'block';
        eliminarForm.style.display = 'none';
    });

    // Agrega un manejador de eventos al enlace "Eliminar paciente".
    eliminarLink.addEventListener('click', function(event) {
        event.preventDefault(); // Evita que el enlace redirija.
        agregarForm.style.display = 'none';
        actualizarForm.style.display = 'none';
        eliminarForm.style.display = 'block';
    });
});