<?php
    include("conexion_bd.php");

    if(isset($_POST['dui']))
    {
        $duiseleccionado = $_POST['dui'];
        $sql = "SELECT * FROM pacientes WHERE dui = '$duiseleccionado'";
        $result = $conexion->query($sql);

        if($result->num_rows>0)
        {
            $paciente = $result->fetch_assoc();
            echo json_encode($paciente);
        }
        else
        {
            echo "No se econtro ningun paciente";
        }
    }
?>