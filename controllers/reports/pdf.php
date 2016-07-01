<?php
require("../libs/fpdf/fpdf.php");
class PDF extends FPDF
{
    function createHeader($tipo)
    {   // here we add the logo
        $this->Image(IMG_DIR . 'logo.png', 10, 6, 30);
        // here we set the font
        $this->setFont('Arial', 'B', 15);
        $pdf->AddPage();

        if(strcmp($tipo, 'licencia_medica') == 0)
        {
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
$pdf->Ln(7);
$pdf->SetFont('Arial', '', 8);
$pdf->SetDrawColor(0,0,0);
$pdf->SetFillColor(0,0,0);
$pdf->Cell(100,5, 'NOMBRES Y APELLIDOS', 1 , 0 , 'C');
$pdf->Cell(40,5, 'CEDULA IDENTIDAD', 1 , 0 , 'C');
$pdf->Cell(40,5, 'FIRMA', 1 , 0 , 'C');
$pdf->Ln(5);
$pdf->Cell(100,8,'',1,0,'L');
$pdf->Cell(40,8,'',1,0,'L');
$pdf->Cell(40,8,'',1,0,'L');
$pdf->Ln(15);
$pdf->Cell(60,5, 'NOMBRE DEL SITIO', 1 , 0 , 'C');
$pdf->Cell(40,5, 'CARGO', 1 , 0 , 'C');
$pdf->Cell(40,5, 'TELEFONO', 1 , 0 , 'C');
$pdf->Cell(40,5, 'FECHA INGRESO', 1 , 0 , 'C');
$pdf->Ln(5);
$pdf->Cell(60,8, '', 1 , 0 , 'C');
$pdf->Cell(40,8, '', 1 , 0 , 'C');
$pdf->Cell(40,8, '', 1 , 0 , 'C');
$pdf->Cell(40,8, '', 1 , 0 , 'C');
$pdf->Ln(15);
$pdf->setFont('Arial', 'B', 10);
$pdf->Cell(50);
$pdf->Cell(80, 8, 'FECHAS PROPUESTAS PARA EL USO DE LICENCIA MEDICA', 0, 0 , 'C');
$pdf->Ln(7);
$pdf->setFont('Arial', '', 8);
$pdf->Cell(35,5, 'NUMERO DE DIAS', 1 , 0 , 'C');
$pdf->Cell(36,5, 'PERIODO', 1 , 0 , 'C');
$pdf->Cell(36,5, 'INICIO', 1 , 0 , 'C');
$pdf->Cell(36,5, 'TERMINA', 1 , 0 , 'C');
$pdf->Cell(36,5, 'REGRESA', 1 , 0 , 'C');
$pdf->Ln(5);
$pdf->Cell(35,7, '', 1 , 0 , 'C');
$pdf->Cell(36,7, '', 1 , 0 , 'C');
$pdf->Cell(36,7, '', 1 , 0 , 'C');
$pdf->Cell(36,7, '', 1 , 0 , 'C');
$pdf->Cell(36,7, '', 1 , 0 , 'C');
$pdf->Ln(15);
$pdf->setFont('Arial', 'B', 10);
$pdf->Cell(50);
$pdf->Cell(80, 8, 'OBSERVACIONES A DETALLAR PERSONA QUE DEJA A CARGO DE FUNCIONES', 0, 0 , 'C');
$pdf->Ln(9);
$pdf->setFont('Arial', '', 8);
$pdf->Cell(180,30, '', 1 , 0 , 'C');
$pdf->Ln(35);
$pdf->setFont('Arial', '', 8);
$pdf->Cell(180,5, 'SOLICITANTE', 1, 0, 'C');
$pdf->Ln(5);
$pdf->Cell(180,5, 'NOMBRE Y FIRMA:', 0, 0, 'L');
$pdf->Ln(5);
$pdf->Cell(180,12, '', 1, 0, 'C');
$pdf->Ln(15);
$pdf->Cell(180,5, 'APROBACION', 1, 0, 'C');
$pdf->Ln(5);
$pdf->Cell(90,5, 'JEFE INMEDIATO', 1, 0, 'C');
$pdf->Cell(90,5, 'GERENCIA GENERAL', 1, 0, 'C');
$pdf->Ln(5);
$pdf->Cell(90,15, '', 1, 0, 'C');
$pdf->Cell(90,15, '', 1, 0, 'C');
$pdf->Ln(10);
$pdf->Cell(90,5, 'FIRMA Y SELLO', 1, 0, 'C');
$pdf->Cell(90,5, 'FIRMA Y SELLO', 1, 0, 'C');
$pdf->Ln(5);
$pdf->Cell(90,15, '', 1, 0, 'C');
$pdf->Cell(90,15, '', 1, 0, 'C');
$pdf->Ln(10);
$pdf->Cell(90,5, 'NOMBRE Y APELLIDO', 1 , 0 , 'C');
$pdf->Cell(90,5, 'NOMBRE Y APELLIDO', 1 , 0 , 'C');
$pdf->Ln(5);
$pdf->Cell(90,15, '', 1 , 0 , 'C');
$pdf->Cell(90,15, '', 1 , 0 , 'C');

        }
    }
    function  createFooter()
    {
        $pdf->output();
    }
}

?>
