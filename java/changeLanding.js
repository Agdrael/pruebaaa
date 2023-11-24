document.addEventListener("DOMContentLoaded", function() {
    // Obtén las referencias a las etiquetas "Agregar paciente", "Actualizar paciente" y "Eliminar paciente".
    var atencionlink = document.querySelector('a[href="#Atencion"]');
    var personallink = document.querySelector('a[href="#personal"]');
    var tecnolink = document.querySelector('a[href="#tecnologia"]');
    var historialink = document.querySelector('a[href="#historia"]');

    // Obtén las referencias a las forms de atencion, personal...
    var atencionForm = document.querySelector('.form1');
    var personaForm = document.querySelector('.form2');
    var tecnologiaForm = document.querySelector('.form3');
    var historiaForm = document.querySelector('.form4');

    // Oculta las forms
    atencionForm.style.display = 'none';
    personaForm.style.display = 'none';
    tecnologiaForm.style.display = 'none';
    historiaForm.style.display = 'none';

    // Agrega un manejador de eventos al enlace "Atencion".
    atencionlink.addEventListener('click', function(event) {
        event.preventDefault();
        atencionForm.style.display = 'block';
        personaForm.style.display = 'none';
        tecnologiaForm.style.display = 'none';
        historiaForm.style.display = 'none';
    });

    // Agrega un manejador de eventos al enlace "Personal".
    personallink.addEventListener('click', function(event) {
        event.preventDefault();
        atencionForm.style.display = 'none';
        personaForm.style.display = 'block';
        tecnologiaForm.style.display = 'none';
        historiaForm.style.display = 'none';
    });

    // Agrega un manejador de eventos al enlace "Tecnologia".
    tecnolink.addEventListener('click', function(event) {
        event.preventDefault();
        atencionForm.style.display = 'none';
        personaForm.style.display = 'none';
        tecnologiaForm.style.display = 'block';
        historiaForm.style.display = 'none';
    });

    // Agrega un manejador de eventos al enlace "Historia".
    historialink.addEventListener('click', function(event) {
        event.preventDefault();
        atencionForm.style.display = 'none';
        personaForm.style.display = 'none';
        tecnologiaForm.style.display = 'none';
        historiaForm.style.display = 'block';
    });

});