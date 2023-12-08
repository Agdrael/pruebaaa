// Función para desplegar los formularios
function toggleForm() {
    var loginForm = document.getElementById("loginForm");
    var registroForm = document.getElementById("registroForm");

    if (loginForm.style.display !== "none") {
        loginForm.style.display = "none";
        registroForm.classList.remove("hidden");
    } else {
        loginForm.style.display = "block";
        registroForm.classList.add("hidden");
    }
}

// Llamada inicial para ocultar la segunda form al cargar la página
document.addEventListener("DOMContentLoaded", function() {
    var registroForm = document.getElementById("registroForm");
    registroForm.classList.add("hidden");
});

// este codigo hace que se muestre la contraseña
    function togglePassword(inputId) {
      var passwordInput = document.getElementById(inputId);

      if (passwordInput.type === "password") {
          passwordInput.type = "text";
      } else {
          passwordInput.type = "password";
      }
  }