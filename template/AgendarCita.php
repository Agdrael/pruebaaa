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
    <title>Citas</title>
    <!-- boxicons link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- css -->
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/menulateral.css">
    <link rel="stylesheet" href="../css/citas.css">
    <!-- java -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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

            <nav>
                <a href="inicioHospital.php" class="items-links"><img src="../imagenes/home-white.png" alt="">Inicio</a>
                <a href="#" class="items-links"><img src="../imagenes/doctor-white.png" alt="">Doctores</a>
                <a href="#" class="items-links"><img src="../imagenes/nurse-white.png" alt="">Enfermeras</a>
                <a href="areas.html" class="items-links"><img src="../imagenes/area-white.png" alt="">Areas</a>
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
        <form action="" class="form1 card" data-content id="agregar">
            <h1>Agendar</h1>
            <div>
                <label for="SeleccionDui">Seleccione el Dui del paciente: </label>
                <select id="duiSelect" onchange="cargarInfo()">
                    <?php
                        $sql = "SELECT dui FROM pacientes";
                        $result =$conexion->query($sql);
                        if($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {
                                echo "<option value='" . $row['dui'] . "'>" . $row['dui']. "</option>";
                            }
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="">Nombre:</label>
                <input id="nombre" type="text">
            </div>
            <div>
                <label for="">Apellido:</label>
                <input id="apellido" type="text">
            </div>
            <div>
                <label for="">Carnet:</label>
                <!-- los inputs text serán reemplazados con textbox en C# -->
                <input id="carnet" type="text">
            </div>
            <div>
                <label for="">Fecha: </label>
                <input type="datetime-local" id="fecha" id="">
            </div>
            <div>
                <label for="">Motivo:</label>
                <input id="motivo" type="text">
            </div>
            <div>
                <input type="submit" value="Agendar">
            </div>
        </form>
        <!-- fin de opción agregar -->
        
        <script>
            function cargarInfo() 
            {
                var select = document.getElementById("duiSelect");
                var selectedDui = select.options[select.selectedIndex].value;
                $.ajax
                ({
                    type: "POST",
                    url: "../php/obtener_info.php",
                    data: { dui: selectedDui },
                    success: function (data)
                    {
                        var paciente = JSON.parse(data);
                        document.getElementById("nombre").value = paciente.nombre;
                        document.getElementById("apellido").value = paciente.apellido;
                        document.getElementById("carnet").value = paciente.Carnet;
                        document.getElementById("motivo").value = paciente.motivo;
                    }   
                });
            }
        </script>
</body>

</html>