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
$pdf->SetDrawColor(10,80,180);
$pdf->SetFillColor(230,230,0);
$pdf->Cell(90, 8, 'SOLICITUD DE LICENCIA MEDICA', 1, 0 , 'C');
$pdf->Ln(15);
$pdf->Cell(50);
$pdf->Cell(80, 8, 'DATOS DEL TRABAJADOR', 0, 0 , 'C');
$pdf->Ln(10);
$pdf->SetFont('Arial', '', 8);
$pdf->SetDrawColor(0,0,0);
$pdf->SetFillColor(0,0,0);
$pdf->Cell(100, 5, 'NOMBRES Y APELLIDOS', 1, 1, 'L');
$pdf->Cell(150,-5, 'CEDULA IDENTIDAD', 1, 1, 'R');
$pdf->Cell(200,5, 'FIRMA', 1,1,'R');
$pdf->output();
?>
