<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Sistema de Hospital</title>
</head>
<body>
    <!-- Formulario de inicio de sesión -->
    <form id="loginForm" class="active-form">
        <div class="container">
            <table class="login-table">
                <!-- Contenido de la tabla de inicio de sesión -->
                <tr>
                    <td colspan="2"><img src="../imagenes2/Hospital Divina providencia.gif" height="300" alt="Logo de Iniciar Sesión"></td>
                </tr>
                <tr>
                    <td colspan="2"><h2>Iniciar Sesión</h2></td>
                </tr>
                <tr>
                    <td><label for="username">Usuario:</label></td>
                    <td><input type="text" id="username" name="username"></td>
                </tr>
                <tr>
                    <td><label for="password">Contraseña:</label></td>
                    <td>
                        <input type="password" id="password" name="password">
                        <span class="toggle-password" onclick="togglePassword('password')">Mostrar Contraseña</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Iniciar Sesión"></td>
                    <?php 
                    include("../php/conexion_bd.php");
                    include("../php/controlador.php");
                ?>
                </tr>
                <tr>
                    <td colspan="2"><span class="toggle-modal" onclick="toggleForm()">¿No tienes una cuenta?</span></td>
                </tr>
            </table>
        </div>
    </form>
    <!-- Formulario de registro de cuenta -->
    <form id="registroForm" class="hidden-form">
        <div class="container">
            <table class="login-table">
                <!-- Contenido de la tabla de registro de cuenta -->
                <tr>
                    <td colspan="2"><img src="../imagenes2/Hospital Divina providencia.gif" height="300" alt="Logo de Registro"></td>
                </tr>
                <tr>
                    <td colspan="2"><h2>Registrar Usuario</h2></td>
                </tr>
                <tr>
                    <td><label for="newUsername">Nuevo usuario:</label></td>
                    <td><input type="text" id="newUsername" name="newUsername"></td>
                </tr>
                <tr>
                    <td><label for="newPassword">Contraseña:</label></td>
                    <td>
                        <input type="password" id="newPassword" name="newPassword">
                        <span class="toggle-password" onclick="togglePassword('newPassword')">Mostrar Contraseña</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Registrar Usuario"></td>
                </tr>
            </table>
        </div>
    </form>
    <script>
        function togglePassword(inputId) {
            var passwordInput = document.getElementById(inputId);
            var type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
            passwordInput.setAttribute("type", type);
        }

        function toggleForm() {
            var loginForm = document.getElementById("loginForm");
            var registroForm = document.getElementById("registroForm");

            loginForm.classList.toggle("hidden-form");
            loginForm.classList.toggle("active-form");
            registroForm.classList.toggle("hidden-form");
            registroForm.classList.toggle("active-form");
        }
    </script>
</body>
</html>