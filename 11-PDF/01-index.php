<?php 

require('fpdf/fpdf.php');

$pdf = new FPDF();

$pdf->addPage();

$pdf->setFont("Arial", 'B', 16);
$pdf->setFillColor(230,230,230);
$pdf->cell(90, 10, "Hello Out There!", 1, 0, 'C', true);

$pdf->output();

 ?>