<?php

if (!empty($_POST["btnCrearCita"])) {
    if (empty($_POST["carnet"]) and empty($_POST["fecha"]) and empty($_POST["motivo"])) {
        echo '
        <script>
            alert("Campos vacios");
        </script>
    
        ';
    } else {
        $carnet = $_POST["carnet"];
        $fecha = $_POST["fecha"];
        $motivo = $_POST["motivo"];
        $sql = $conexion->query("INSERT INTO citas (nombre,apellido,paciente_id, fecha,carnet, motivo) VALUES ((SELECT nombre FROM pacientes WHERE Carnet = '$carnet'),(SELECT apellido FROM pacientes WHERE Carnet = '$carnet'),(SELECT id FROM pacientes WHERE Carnet = '$carnet'),'$fecha','$carnet','$motivo')");
        if ($sql) {

            // aqui hechate el arte para hacerlo bonito xd
            echo '
            <script>
                alert("Usuario creado exitosamente");
            </script>
            ';
        } else {
            // aqui hechate el arte para hacerlo bonito xd
            echo '
                <script>
                    alert("Error: Paciente no creado");
                </script>
            
            ';
        }
    }
}

if (!empty($_POST["btnEditarCita"])) {
    if (empty($_POST["nombre"]) and empty($_POST["apellido"]) and empty($_POST["carnet"])  and empty($_POST["fecha"]) and empty($_POST["motivo"])) {
        echo '
        <script>
            alert("Campos vacios");
        </script>
    
        ';
    } else {
        $id_cita = $_POST["id_cita"];
        $fecha = $_POST["fecha"];
        $motivo = $_POST["motivo"];
        $sql = $conexion->query("UPDATE citas SET fecha = '$fecha', motivo = '$motivo' WHERE id = '$id_cita'");
        if ($sql) {
            header("location: registro.php");
            echo '
        <script>
            alert("Campos actualizados");
        </script>
        ';
        } else {
            echo '
            <script>
                alert("Campos actualizacion fallida");
            </script>
        
            ';
        }
    }
}

if (!empty($_POST["btneliminar"])) {
    if (empty($_POST["nombreeliminar"]) and empty($_POST["apellidoeliminar"]) and empty($_POST["carneteliminar"])  and empty($_POST["motivoeliminar"])) {
        echo '
        <script>
            alert("Campos vacios");
        </script>
    
        ';
    } else {
        $id_cita = $_POST["id_cita"];
        $sql = $conexion->query("DELETE FROM citas WHERE id = '$id_cita'");
        if ($sql) {
            echo '
        <script>
            alert("Cita eliminada");
        </script>
    
        ';
        } else {
            echo '
            <script>
                alert("Eliminacion fallida");
            </script>
        
            ';
        }
    }
}

