<?php
include("../php/conexion_bd.php");
include("../php/controlador_agendarCita.php");
if (isset($_GET['id'])) {
    $idUsuario = $_GET['id'];

    $sql = "SELECT * FROM citas WHERE paciente_id = $idUsuario";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
    } else {

        echo "Usuario no encontrado";
        exit;
    }
} else {

    echo "ID de usuario no proporcionado";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/iconos-blancos/home.png" type="image/x-icon">
    <title>Editar Citas</title>
    <!-- boxicons link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- css -->
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/menulateral.css">
    <link rel="stylesheet" href="../css/citas.css">
    <!-- java -->
    <!--  <script src="../java/change.js"></script> -->
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
                <a href="inicioHospital.php" class="items-link"><img src="../imagenes2/area-white.png" alt="">Agregar Pacientes</a>
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
        <form method="post" action="" class="form1 card" data-content id="editar">
            <h1>Editar Citas</h1>
            <div>
                <label for="selectCitas">Seleccionar Cita:</label>
                <select name="selectCitas" id="selectCitas" onchange="cargarInfoCita()">
                    <?php
                    // Obtener todas las citas del paciente
                    $sqlCitas = "SELECT id,fecha FROM citas WHERE paciente_id = $idUsuario";
                    $resultCitas = $conexion->query($sqlCitas);

                    if ($resultCitas->num_rows > 0) {
                        while ($rowCita = $resultCitas->fetch_assoc()) {
                            echo "<option value='" . $rowCita['id'] . "'>" . $rowCita['fecha'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div>
                <input type="hidden" name="id_cita" id="id_cita">
                <label for="nombre">Nombre:</label>
                <input name="nombre" id="nombre" type="text" value="<?php echo $usuario['nombre']; ?>">
            </div>
            <div>
                <label for="apellido">Apellido:</label>
                <input name="apellido" id="apellido" type="text" value="<?php echo $usuario['apellido']; ?>">
            </div>
            <div>
                <label for="carnet">Carnet:</label>
                <input name="carnet" id="carnet" type="text" value="<?php echo $usuario['carnet']; ?>">
            </div>
            <div>
                <label for="fecha">Fecha: </label>
                <input name="fecha" type="datetime-local" id="fecha" value="<?php echo $usuario['fecha']; ?>">
            </div>
            <div>
                <label for="motivo">Motivo:</label>
                <input name="motivo" id="motivo" type="text" value="<?php echo $usuario['motivo']; ?>">
            </div>
            <div>
                <input name="btnEditarCita" type="submit" value="Guardar Cambios">
            </div>
        </form>
        <!-- fin de opción editar -->
    </section>
    <!-- fin de opción agregar -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function cargarInfoCita() {
            var selectCitas = document.getElementById("selectCitas");
            var selectedCitaId = selectCitas.options[selectCitas.selectedIndex].value;
            console.log("ID de Cita seleccionada:", selectedCitaId);

            $.ajax({
                type: "POST",
                url: "../php/obtener_info.php",
                data: {
                    paciente_id: selectedCitaId
                },
                success: function(data) {
                    console.log("Datos de la cita obtenidos:", data);
                    var cita = JSON.parse(data);
                    document.getElementById("nombre").value = cita.nombre;
                    document.getElementById("apellido").value = cita.apellido;
                    document.getElementById("carnet").value = cita.carnet;
                    document.getElementById("fecha").value = cita.fecha;
                    document.getElementById("motivo").value = cita.motivo;
                    document.getElementById("id_cita").value = cita.id;
                }
            });
        }
    </script>
</body>

</html>