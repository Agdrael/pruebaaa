<?php 
    include("../php/conexion_bd.php");
    include("../php/controlador.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Sistema de Hospital</title>

    <!-- scripts -->
    <script src="../java/changeLogin.js"></script>
    <!-- box icons link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
        <!-- Formulario de inicio de sesión -->
        <form method="post" id="loginForm" class="form1">
                    <!-- Contenido de la tabla de inicio de sesión -->
                    <div>
                        <img src="../imagenes/descarga.png" height="200" alt="Logo de Iniciar Sesión">
                      </div>
                      <div>
                         <h2>Iniciar Sesión</h2>
                      </div>
                      <div>
                        <i class='bx bx-user'></i><!-- icono de usuario -->
                          <input type="text" id="username" name="username" placeholder="usuario">
                      </div>
                      <div>
                        <i class='bx bx-lock-alt'></i><!-- icono de contraseña -->
                              <input type="password" id="password" name="password" placeholder="contraseña">
                      </div>
                      <div>
                        <span class="toggle-password" onclick="togglePassword('password')">Mostrar Contraseña</span>
                      </div>
                      <div>
                         <input name="btningresar" type="submit" value="Iniciar Sesión">
      
                      </div>
                      <div>
                        <span class="toggle-modal" onclick="toggleForm()">¿No tienes una cuenta?</span>
                      </div>
        </form>
        
    <!-- Formulario de registro de cuenta -->
    <form method="post" id="registroForm" class="form2 hidden">
        <div class="container">
                <!-- Contenido de la tabla de inicio de sesión -->
                <div>
                  <img src="../imagenes/descarga.png" height="200" alt="Logo de Iniciar Sesión">
                </div>
                <div>
                   <h2>Registrar Usuario</h2>
                </div>
                <div>
                    <i class='bx bx-user'></i> <!-- icono de usuario -->
                    <input type="text" id="newUsername" name="newUsername"  placeholder="Nuevo usuario">
                </div>
                <div>
                    <i class='bx bx-lock-alt'></i> <!-- icono de contraseña -->
                    <input type="password" id="newPassword" name="newPassword"  placeholder="contraseña">
                </div>
                <div>
                    <span class="toggle-password" onclick="togglePassword('newPassword')">Mostrar Contraseña</span>
                </div>
                <div>
                    <input name="btncrear" type="submit" value="Registrar Usuario">

                </div>
                <div>
                    <span class="toggle-modal" onclick="toggleForm()">Inicio de sesión</span>
                  </div>
    </form>
    

</body>
</html>