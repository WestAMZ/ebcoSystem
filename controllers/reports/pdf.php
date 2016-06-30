<?php
class PDF extends FPDF()
{
    function  createFooter($tipo)
    {   // here we add the logo
        $this->Image(IMG_DIR . 'logo.png', 10, 6, 30);
        // here we set the font
        $this->setFont('Arial', 'B' 15);
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 20);
        if(strcmp($tipo, 'licencia_medica') == 0)
        {

        }
    }
    function  generate()
    {
        $pdf->output();
    }
}

?>
