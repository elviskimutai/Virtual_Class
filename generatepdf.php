<?php

require("fpdf/fpdf.php");
$pdf=new FPDF();
//var_dump(get_class_methods($pdf));

$pdf->Addpage();
//$pdf->Image('images/kim.png'); 

$pdf->SetFont("Arial","B","20");
$pdf->Cell(0,10," MY PDF PAGE",1,1,"C");

$pdf->SetFont("Arial","I","20");
$pdf->Cell(0,10," econd line",0,1,"C");

$pdf->SetFont("","","20");
$pdf->Write(5,"dwefrgtyuiop'[[p;olikuyjthgrftyuiop[pouiyutyrgfgh");

$pdf->Output();
?>