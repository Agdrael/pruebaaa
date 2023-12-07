<?php
include("../php/conexion_bd.php");
include("../php/controlador.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/iconos-blancos/home.png" type="image/x-icon">
    <title>inicio</title>
    <!-- boxicons link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- css -->
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/menulateral.css">
    <link rel="stylesheet" href="../css/contenidoinicio.css">
    <!-- java -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../java/change.js"></script>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu"><i class='bx bx-menu-alt-left'></i></label>
            </div>
            <div class="logo">
                <!-- aqui puede ir el logo del hospital -->
                <h1>Hospital divina Providencia</h1>
            </div>
            <nav class="menu">
                <!-- opciones para un menú superior -->
                <a href="#agregar">Agregar paciente</a>
                <a href="#actualizar">Actualizar paciente</a>
                <a href="#eliminar">Eliminar paciente</a>
            </nav>
        </div>
    </header>
    <div class="capa"></div>
    <!--	--------------->
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav class="imagenLateral">
                <img src="../imagenes/descarga.png" alt="">
            </nav>
            <nav style="padding-top: 40px;">
                <a href="AgendarCita.php" class="items-links"><img src="../imagenes/calendar-white.png" alt="">Agendar citas</a>
                <a href="registro.php" class="items-link"><img src="../imagenes2/doctor-white.png" alt="">Editar citas</a>
            </nav>
            <nav class="redes">
                <a href="../index.html">Cerrar sesión</a>
                <!--      <a href="#">Salir</a> -->
            </nav>
            <label for="btn-menu">x</label>
        </div>
    </div>
    <div class="separador"></div>
    <div class="espacio"></div>
    <!-- opciones del dashboard (actualizar, eliminar, etc.) -->
    <section class="forms">
        <img src="../imagenes/descarga.png" alt="">
        <!-- opción de agregar -->

        <form action="" method="post" class="form1 card" data-content id="agregar">
            <h1>Datos</h1>
            <div>
                <label for="">Nombre:</label>
                <input name="nombre" type="text" placeholder="paciente..">
            </div>
            <div>
                <label for="">Apellido:</label>
                <input name="apellido" type="text" placeholder="apellido paciente..">
            </div>
            <div>
                <label for="">Carnet:</label>
                <input name="carnet" type="text" placeholder="1234-56">
            </div>
            <div>
                <label for="">Sexo:</label>
                <input type="radio" name="M" id="" value="Maculino">
                <label for="">Masculino</label>
                <input type="radio" name="M" id="" value="Femenino">
                <label for="">Femenino</label>
            </div>
            <div>
                <label for="">Dui:</label>
                <input name="dui" type="text" placeholder="00000000-1">
            </div>
            <div>
                <label for="">Motivo:</label>
                <input name="motivo" type="textarea">

            </div>
            <div class="direccionlabel">
                <label for="">Dirección:</label>
                <input name="direccion" type="text" placeholder="direccion....">
            </div>
            <div>
                <input name="btnagregar" type="submit" value="Agregar">
            </div>
        </form>
        <!-- fin de opción agregar -->
        <form action="" method="post" class="form2" data-content id="actualizar">
            <form action="" class="form2" data-content id="actualizar">
                <h1>Actualizar</h1>
                <div class="duidiv">
                    <label for="SeleccionDui">Seleccione el Dui del paciente: </label>
                    <select id="duiSelect" onchange="cargarInfo()">
                        <?php
                        $sql = "SELECT dui FROM pacientes";
                        $result = $conexion->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['dui'] . "'>" . $row['dui'] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
                <div>
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido">
                </div>
                <div>
                    <label for="carnet">Carnet:</label>
                    <input type="text" id="carnet" name="carnet">
                </div>
                <div>
                    <label for="dui">Dui:</label>
                    <input type="text" id="dui" name="dui">
                </div>
                <div>
                    <label for="motivo">Motivo:</label>
                    <input type="text" id="motivo" name="motivo">
                </div>
                <div>
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion">
                </div>
                <div>
                    <input name="actPaciente" type="submit" value="actualizar">
                </div>
            </form>
            <!-- fin form actualizar -->
            <!-- form para eliminar paciente -->
            <form action="" method="post" class="form3" data-content id="eliminar">
                <h1>Eliminar</h1>
                <div>
                    <label for="SeleccionDui">Seleccione el Dui del paciente: </label>

                    <select id="duiSelectDelete" onchange="cargarInfoDelete()">
                        <?php
                        $sql = "SELECT dui FROM pacientes";
                        $result = $conexion->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['dui'] . "'>" . $row['dui'] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="">Nombre:</label>
                    <input type="text" name="nombreeliminar" id="nombreeliminar">
                </div>
                <div>
                    <label for="">Apellido:</label>
                    <input type="text" name="apellidoelimnar" id="apellidoelimnar">
                </div>
                <div>
                    <label for="">Carnet:</label>
                    <input type="text" name="carneteliminar" id="carneteliminar">
                </div>
                <div>
                    <label for="">Dui:</label>
                    <input type="text" name="duieliminar" id="duieliminar">
                </div>
                <div>
                    <label for="">Motivo:</label>
                    <input type="text" name="motivoeliminar" id="motivoeliminar">
                </div>
                <div>
                    <input name="eliPaciente" type="submit" value="eliminar">
                </div>

            </form>
            <!-- fin form Eliminar -->
            <!-- código JavaScript para hacer menú desplegable con tabs -->
            <script>
                function cargarInfoDelete() {
                    var select = document.getElementById("duiSelectDelete");
                    var selectedDui = select.options[select.selectedIndex].value;
                    $.ajax({
                        type: "POST",
                        url: "../php/obtener_info.php",
                        data: {
                            dui: selectedDui
                        },
                        success: function(data) {
                            var paciente = JSON.parse(data);
                            document.getElementById("nombreeliminar").value = paciente.nombre;
                            document.getElementById("apellidoelimnar").value = paciente.apellido;
                            document.getElementById("carneteliminar").value = paciente.Carnet;
                            document.getElementById("duieliminar").value = paciente.dui;
                            document.getElementById("motivoeliminar").value = paciente.motivo;
                        }
                    });
                }

                function cargarInfo() {
                    var select = document.getElementById("duiSelect");
                    var selectedDui = select.options[select.selectedIndex].value;
                    $.ajax({
                        type: "POST",
                        url: "../php/obtener_info.php",
                        data: {
                            dui: selectedDui
                        },
                        success: function(data) {
                            var paciente = JSON.parse(data);
                            document.getElementById("nombre").value = paciente.nombre;
                            document.getElementById("apellido").value = paciente.apellido;
                            document.getElementById("carnet").value = paciente.Carnet;
                            document.getElementById("dui").value = paciente.dui;
                            document.getElementById("direccion").value = paciente.direccion;
                            document.getElementById("motivo").value = paciente.motivo;
                        }
                    });
                }
            </script>
</body>

</html>