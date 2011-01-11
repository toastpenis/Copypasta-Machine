<?php
require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);
$rows = 9;
while($rows > 0)
 {
 $rows = $rows-1;
 $pdf->SetXY(10,$rows*30);
 $pdf->MultiCell(0,10,"A protest to save the free and open Internet.\nTake the fight to Real Life\n".$_REQUEST['date']." at ".$_REQUEST['location'],1);
 $pdf->Image("uploads/guyfawkesmask.gif", 70, $rows*30, 25, 30);
 $pdf->SetXY(110,$rows*30);
 $pdf->MultiCell(0,10,"A protest to save the free and open Internet.\nTake the fight to Real Life\n".$_REQUEST['date']." at ".$_REQUEST['location'],1);
 $pdf->Image("uploads/guyfawkesmask.gif", 170, $rows*30, 25, 30);
 }
$pdf->Output();
?>
