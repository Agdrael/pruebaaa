<?php

//login
if (!empty($_POST["btningresar"])) {
    if (empty($_POST["username"]) and empty($_POST["password"])) {
        // aqui hechate el arte para hacerlo bonito xd
        echo '
                <script>
                    alert("Campos vacios");
                </script>
            
            ';
    } else {
        $usuario = $_POST["username"];
        $clave = $_POST["password"];
        $sql = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' and contra = '$clave'");
        if ($datos = $sql->fetch_object()) {
            header("location: ../template/inicioHospital.php");
        } else {
            // aqui hechate el arte para hacerlo bonito xd
            echo '
                <script>
                    alert("Error: usuario y contraseña inexistente");
                </script>
            
            ';
        }
    }
}

//Crear usuario
if (!empty($_POST["btncrear"])) {
    if (empty($_POST["check-username"]) and empty($_POST["check-password"])) {
        // aqui hechate el arte para hacerlo bonito xd
        echo '
                <script>
                    alert("Campos vacios");
                </script>
            
            ';
    } else {
        $usuario = $_POST["check-username"];
        $clave = $_POST["check-password"];
        $sql = $conexion->query("INSERT INTO usuarios (usuario, contra) VALUES ('$usuario','$clave') ");
        if ($sql) {

            // aqui hechate el arte para hacerlo bonito xd
            echo '
            <script>
                alert("Usuario creado exitosamente");
            </script>
            ';
            header("location: ../index.html");
        } else {
            // aqui hechate el arte para hacerlo bonito xd
            echo '
                <script>
                    alert("Error: usuario y contraseña no creado");
                </script>
            
            ';
        }
    }
}

//crear paciente
if (!empty($_POST["btnagregar"])) {
    if (empty($_POST["nombre"]) and empty($_POST["apellido"]) and empty($_POST["carnet"]) and empty($_POST["M"]) and empty($_POST["dui"]) and empty($_POST["motivo"]) and empty($_POST["direccion"])) {
        echo '
        <script>
            alert("Campos vacios");
        </script>
    
        ';
    } else {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $carnet = $_POST["carnet"];
        $sexo = $_POST["M"];
        $dui = $_POST["dui"];
        $motivo = $_POST["motivo"];
        $direccion = $_POST["direccion"];
        $sql = $conexion->query("INSERT INTO pacientes (nombre,apellido,Carnet,dui,direccion,motivo) VALUES ('$nombre','$apellido','$carnet','$dui','$direccion','$motivo')");
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

//actualizar paciente
if (!empty($_POST["actPaciente"])) {
    if (empty($_POST["nombre"]) and empty($_POST["apellido"]) and empty($_POST["carnet"])  and empty($_POST["dui"]) and empty($_POST["motivo"]) and empty($_POST["direccion"])) {
        echo '
        <script>
            alert("Campos vacios");
        </script>
    
        ';
    } else {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $carnet = $_POST["carnet"];
        $dui = $_POST["dui"];
        $motivo = $_POST["motivo"];
        $direccion = $_POST["direccion"];
        $sql = $conexion->query("UPDATE pacientes SET nombre = '$nombre', apellido = '$apellido', Carnet = '$carnet', motivo = '$motivo', direccion = '$direccion' WHERE dui = '$dui'");
        if ($sql) {
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

//eliminar paciente
if (!empty($_POST["eliPaciente"])) {
    if (empty($_POST["nombreeliminar"]) and empty($_POST["apellidoelimnar"]) and empty($_POST["carneteliminar"])  and empty($_POST["duieliminar"]) and empty($_POST["motivoeliminar"])) {
        echo '
        <script>
            alert("Campos vacios");
        </script>
    
        ';
    } else {
        $dui = $_POST["duieliminar"];
        $sql = $conexion->query("DELETE FROM pacientes WHERE dui = '$dui'");
        if ($sql) {
            echo '
        <script>
            alert("Paciente eliminado");
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
