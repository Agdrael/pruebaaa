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
                <a href="#buscar">Buscar paciente</a>
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
                <a href="inicioHospital.html" class="items-links"><img src="../imagenes/home-white.png" alt="">Inicio</a>
                <a href="#" class="items-links"><img src="../imagenes/doctor-white.png" alt="">Doctores</a>
                <a href="#" class="items-links"><img src="../imagenes/nurse-white.png" alt="">Enfermeras</a>
                <a href="AgendarCita.html" class="items-links"><img src="../imagenes/calendar-white.png" alt="">Agendar citas</a>
                <a href="areas.html" class="items-links"><img src="../imagenes/area-white.png" alt="">Areas</a>
                <a href="landing2.html" class="items-links"><img src="../imagenes/area-white.png" alt="">Nosotros</a>
            </nav>
             <nav class="redes">
                <a href="#">Cerrar sesión</a>
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
                <input name="nombre" type="text">
            </div>
            <div>
                <label for="">Apellido:</label>
                <input type="text">
            </div>
            <div>
                <label for="">Carnet:</label>
                <!-- los inputs text serán reemplazados con textbox en C# -->
                <input type="text">
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
                <input type="text">
            </div>
            <div>
                <label for="">Motivo:</label>
                <input type="text">
            </div>
            <div>
                <label for="">Dirección:</label>
                <input type="text">
            </div>
            <div>
                <input name="btnagregar"type="submit" value="Agregar">
            </div>

        </form>
        <!-- fin de opción agregar -->
        <!-- form para actualizar (aun en trabajo)= -->
        <form action="" class="form2" data-content id="actualizar">
            <h1>Actualizar</h1>

            <div>
                <label for="">Nombre:</label>
                <input type="text">
            </div>
            <div>
                <label for="">Apellido:</label>
                <input type="text">
            </div>
            <div>
                <label for="">Carnet:</label>
                <!-- los inputs text serán reemplazados con textbox en C# -->
                <input type="text">
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
                <input type="text">
            </div>
            <div>
                <label for="">Motivo:</label>
                <input type="text">
            </div>
            <div>
                <label for="">Dirección:</label>
                <input type="text">
            </div>
            <div>
                <input type="submit" value="actualizar">
            </div>

        </form>
        <!-- fin form actualizar -->
        <!-- form para eliminar paciente -->
        <form action="" class="form3" data-content id="eliminar">
            <h1>Eliminar</h1>

            <div>
                <label for="">Nombre:</label>
                <input type="text">
            </div>
            <div>
                <label for="">Apellido:</label>
                <input type="text">
            </div>
            <div>
                <label for="">Carnet:</label>
                <!-- los inputs text serán reemplazados con textbox en C# -->
                <input type="text">
            </div>
            <div>
                <label for="">Dui:</label>
                <input type="text">
            </div>
            <div>
                <label for="">Motivo:</label>
                <input type="text">
            </div>
            <div>
                <input type="submit" value="eliminar">
            </div>

        </form>
        <!-- fin form Eliminar -->
        <!-- código JavaScript para hacer menú desplegable con tabs -->
        <script>
        </script>
</body>

</html>