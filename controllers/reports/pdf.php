<?php
class PDF extends FPDF()
{
    function createHeader($tipo)
    {   // here we add the logo
        $this->Image(IMG_DIR . 'logo.png', 10, 6, 30);
        // here we set the font
        $this->setFont('Arial', 'B' 15);
        $pdf->AddPage();

        if(strcmp($tipo, 'licencia_medica') == 0)
        {
            $this->Cell(145);
            $this->Cell(50,7, 'FSLM-1',1,1,'C');
            $this->Ln(5);
            $this->Cell(145);
            $this->Cell(50, 7, 'Fecha Solicitud: 12/11/2016 ', 1, 0, 'C');
            $this->Ln(20);
            $this->Cell(50);
            $this->SetDrawColor(10,80,180);
            $this->SetFillColor(230,230,0);
            $this->Cell(90, 8, 'SOLICITUD DE LICENCIA MEDICA', 1, 0 , 'C');
        }
    }
    function  createFooter()
    {
        $pdf->output();
    }
}

?>
