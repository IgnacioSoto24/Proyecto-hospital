<?php

session_start(); 
$Rut = $_SESSION['rut'];

require ('fpdf/fpdf.php');

class PDF extends FPDF{
    
    function Header()
    {
        $this->Image('C:\xampp\htdocs\Proyecto-hospital\img\logohospital.png',10,8,25);
        $this->SetFont('Arial', 'B', 20);
        $this->Cell(80);
        $this->Cell(30, 8, 'Ficha medica', 0, 0, 'C', 0);
        $this->Ln(20);
        $this->SetFont('Times', '', 12);
        $this->Cell(35, 18, 'Nombre completo: ', 0, 0, 'C', 0);
        $this->Ln(20);
        $this->Cell(12, 2, 'Rut: ', 0, 0, 'C', 0);
    }

    function Footer()
    {
        $this->Ln(10);
        $this->Cell(55, 0, 'Antecedentes de enfermedad: ', 0, 0, 'C', 0);
        $this->Ln(10);
        $this->Cell(20, 0, 'Alergias: ', 0, 0, 'C', 0);
        $this->Ln(10);
        $this->Cell(45, 0, 'Enfermedades Cronicas: ', 0, 0, 'C', 0);
        $this->Ln(10);
        $this->Cell(40, 0, 'Medicamento Actual: ', 0, 0, 'C', 0);
        $this->Image('C:\xampp\htdocs\Proyecto-hospital\img\logohospital.png',5,270,25);
    }
}

require_once('conexion.php');

//Consultas
$consulta = "SELECT nombres, apellido1, apellido2, rut FROM usuario WHERE rut = '$Rut' LIMIT 1";
$consulta = $conexion->query($consulta);
$fila = mysqli_fetch_assoc($consulta);

$consulta2 = "SELECT * FROM ficha WHERE rut = '$Rut' LIMIT 1";
$consulta2 = $conexion->query($consulta2);
$fila2 = mysqli_fetch_assoc($consulta2);

$pdf = new PDF();
$pdf->AddPage();
$pdf->Cell(90,-22,$fila['nombres'].' '.$fila['apellido1'].' '.$fila['apellido2'],0,0,'C',0);
$pdf->Ln(10);
$pdf->Cell(45,-18,$fila['rut'],0,0,'C',0);
$pdf->Ln(1);
$pdf->Cell(0,25,$fila2['antecedentes'],0,0,'C',0);
$pdf->Ln(1);
$pdf->Cell(0,40,$fila2['alergias'],0,0,'C',0);
$pdf->Ln(1);
$pdf->Cell(0,60,$fila2['enfermedadesCroni'],0,0,'C',0);
$pdf->Ln(1);
$pdf->Cell(0,80,$fila2['medicamento'],0,0,'C',0);
$pdf->OutPut('fichaMedica.PDF', 'I');
?>