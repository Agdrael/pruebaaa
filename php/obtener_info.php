<?php
include("conexion_bd.php");

if (isset($_POST['dui'])) {
    $duiseleccionado = $_POST['dui'];
    $sql = "SELECT * FROM pacientes WHERE dui = '$duiseleccionado'";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        $paciente = $result->fetch_assoc();
        echo json_encode($paciente);
    } else {
        echo "No se encontró ningún paciente con DUI: $duiseleccionado";
    }
} elseif (isset($_POST['paciente_id'])) {
    $idCita = $_POST['paciente_id'];
    $sqlCita = "SELECT * FROM citas WHERE id = $idCita";
    $resultCita = $conexion->query($sqlCita);

    if ($resultCita->num_rows > 0) {
        $cita = $resultCita->fetch_assoc();
        echo json_encode($cita);
    } else {
        echo "No se encontró ninguna cita con ID: $idCita";
    }
} else {
    echo "Parámetros incorrectos en la solicitud";
}
