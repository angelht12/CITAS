<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('img/logo.png',8,6,10);
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de usuario',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(8, 10, 'id', 1, 0, 'c', 0);
    $this->Cell(20, 10, "Nombre", 1, 0, 'c', 0);
    $this->Cell(40, 10, "Apellido", 1, 0, 'c', 0);
    $this->Cell(45, 10, "Correo", 1, 0, 'c', 0);
    $this->Cell(25, 10, "Telefono", 1, 0, 'c', 0);
    $this->Cell(20, 10, "PASS", 1, 0, 'c', 0);
    $this->Cell(20, 10, "IDTIPO", 1, 1, 'c', 0);
   
    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}
require 'imprimir/imprimir_usuario.php';
$consulta = "SELECT * FROM usuarios"; 
$resultado = $mysqli->query($consulta);


$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row = $resultado -> fetch_assoc()){
    $pdf->Cell(8, 10, $row['id'], 1, 0, 'c', 0);
    $pdf->Cell(20, 10, $row['nombre'], 1, 0, 'c', 0);
    $pdf->Cell(40, 10, $row['apellido'], 1, 0, 'c', 0);
    $pdf->Cell(45, 10, $row['correo'], 1, 0, 'c', 0);
    $pdf->Cell(25, 10, $row['telefono'], 1, 0, 'c', 0);
    $pdf->Cell(20, 10, $row['pass'], 1, 0, 'c', 0);
    $pdf->Cell(20, 10, $row['tipoUsuario'], 1, 1, 'c', 0);
   
    
} 
$pdf->Output();

?>