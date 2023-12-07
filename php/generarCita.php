<?php
require('fpdf186/fpdf.php');
require('conexion_bd.php');
$id_paciente = $_GET['id'];
$consulta = "SELECT * FROM citas WHERE paciente_id = $id_paciente";
$resultado = $conexion->query($consulta);

class PDF extends FPDF
{

    function Header()
    {
        $this->Image('../imagenes/descarga.png', 10, 6, 30);
        $this->SetFont('Arial', 'B', 20);
        $this->Cell(60);
        $this->Cell(70, 10, 'Citas del Paciente', 0, 0, 'C');
        $this->Ln(40);
        $this->Cell(90, 10, 'Motivo Consulta', 1, 0, 'C','0');
        $this->Cell(90, 10, 'Fecha Consulta', 1, 1, 'C','0');
    }


    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 16);
while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(90, 10, $row['motivo'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $row['fecha'], 1, 1, 'C', 0);
}
$pdf->Output();
