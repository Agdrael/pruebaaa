<?php

//login
if(!empty($_POST["btningresar"]))
{
    if(empty($_POST["username"]) and empty($_POST["password"]))
    {
        // aqui hechate el arte para hacerlo bonito xd
        echo '
                <script>
                    alert("Campos vacios");
                </script>
            
            ';
    }
    else
    {
        $usuario=$_POST["username"];
        $clave = $_POST["password"];
        $sql = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' and contra = '$clave'");
        if($datos=$sql->fetch_object())
        {
            header("location: ../template/inicioHospital.html");
        }
        else
        {
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
if(!empty($_POST["btncrear"]))
{
    if(empty($_POST["check-username"]) and empty($_POST["check-password"]))
    {
        // aqui hechate el arte para hacerlo bonito xd
        echo '
                <script>
                    alert("Campos vacios");
                </script>
            
            ';
    }
    else
    {
        $usuario=$_POST["check-username"];
        $clave = $_POST["check-password"];
        $sql = $conexion->query("INSERT INTO usuarios (usuario, contra) VALUES ('$usuario','$clave') ");
        if($sql)
        {

            // aqui hechate el arte para hacerlo bonito xd
            echo '
            <script>
                alert("Usuario creado exitosamente");
            </script>
            ';
            header("location: ../index.html");
        }
        else
        {
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
if(!empty($_POST["btnagregar"]))
{

}
?>