<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/contenidoinicio.css">
    <link rel="stylesheet" href="../css/areas.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="stylesheet" href="../css/registros.css">
    <title>Formulario de Registro de Pacientes</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label,
        input,
        select,
        textarea {
            display: block;
            margin-bottom: 15px;
            width: 100%;
            box-sizing: border-box;
        }



        #pacientesTabla {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        #pacientesTabla th,
        #pacientesTabla td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
            border-radius: 4px;
            /* Añadido para redondear los bordes */
        }

        button:hover {
            background-color: #8645a0;
        }
    </style>
</head>

<body>
<!-- para salir xd -->
<div class="salir">
    <a href="#">Regresar</a>
</div>
<!-- para salir fin xd -->
    <h2>Formulario de Registro de Pacientes</h2>
    <h2>Registro de Pacientes</h2>
    <table id="pacientesTabla">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Dui</th>
                <th>Editar Cita</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('../php/conexion_bd.php');
            $sql = "SELECT * FROM pacientes";
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['apellido'] . "</td>";
                    echo "<td>" . $row['direccion'] . "</td>";
                    echo "<td>" . $row['dui'] . "</td>";
                    echo "<td>";
                    echo "<a href='editarCita.php?id=" . $row['id'] . "'>Editar</a>";
                    echo "&nbsp;&nbsp;";
                    echo "<a href='eliminarCita.php?id=" . $row['id'] . "'>Eliminar</a>";
                    echo "&nbsp;&nbsp;";
                    echo "<a href='../php/generarCita.php?id=" . $row['id'] . "'>Generar Cita</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>

</body>

</html>