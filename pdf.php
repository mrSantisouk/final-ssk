<?php
header('Content-Type: text/html; charset=utf-8');
require('./fpdf186/fpdf.php');

// Create instance of FPDF class
$pdf = new FPDF();
$pdf->AddPage();

// Add the Lao font
$pdf->AddFont('phetsarath_ot', '', 'phetsarath_ot.php');

// Set the Lao font
$pdf->SetFont('phetsarath_ot', '', 16);

// Add a cell with Lao text
$pdf->Cell(0, 10, 'ສະບາຍດີ, ທ່ານມາຈາກໃສ?', 0, 1);

// Output the PDF
$pdf->Output();
?>
