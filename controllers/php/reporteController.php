<?php

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image(IMG_DIR . 'logo.png', 10, 6, 30);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(145);
$pdf->Cell(50,7, 'FSLM-1',1,1,'C');
$pdf->Ln(5);
$pdf->Cell(145);
$pdf->Cell(50, 7, 'Fecha Solicitud: 12/11/2016 ', 1, 0, 'C');
$pdf->Ln(20);
$pdf->Cell(50);
$pdf->SetFillColor(230,230,0);
$pdf->SetDrawColor(0,80,180);
$pdf->Cell(90, 8, 'SOLICITUD DE LICENCIA MEDICA', 1, 0 , 'C');
$pdf->output();
?>
