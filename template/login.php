<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Sistema de Hospital</title>
</head>
<body>
    <form method="post" id="registroForm">
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
                    <td colspan="2"><input name="btningresar" type="submit" value="Iniciar Sesión"></td>
                    <?php 
                        include("../php/conexion_bd.php");
                        include("../php/controlador.php");
                    ?>
                </tr>
                <tr>
                    <td colspan="2"><span class="toggle-modal" onclick="openModal()">¿No tienes una cuenta?</span></td>
                </tr>
            </table>
    </form>
    <form method="post" id="registroForm">
            <!-- Ventana modal -->
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>¿No tienes una cuenta?</h2>
                        <span class="modal-close" onclick="closeModal()">×</span>
                    </div>
                    <table class="account-check-table">
                        <!-- Contenido de la tabla de verificación de cuenta -->
                        <tr>
                            <td colspan="2"><img src="../imagenes2/Hospital Divina providencia.gif"height="300"  alt="Logo de ¿Tiene una cuenta?"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><h2>¿No tiene una cuenta?</h2></td>
                        </tr>
                        <tr>
                            <td><label for="check-username">Ingrese su usuario:</label></td>
                            <td><input type="text" id="check-username" name="check-username"></td>
                        </tr>
                        <tr>
                            <td><label for="check-password">Ingrese su Contraseña:</label></td>
                            <td>
                                <input type="password" id="check-password" name="check-password">
                                <span class="toggle-password" onclick="togglePassword('check-password')">Mostrar Contraseña</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><input name="btncrear" type="submit" value="Crear Cuenta"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </form>

    <script>
        function togglePassword(inputId) {
            var passwordInput = document.getElementById(inputId);
            var type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
            passwordInput.setAttribute("type", type);
        }

        function openModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "flex";
        }

        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }

        // Cierra la ventana modal si el usuario hace clic fuera de ella
        window.onclick = function(event) {
            var modal = document.getElementById("myModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>