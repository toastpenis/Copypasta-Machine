<?php
require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->SetMargins(0,0,0);
$rows = 7;
$input = "WTF! You need to give me some input bud";
if($_REQUEST["inputmethod"] == "template") {$input = "A Protest in Defense of\nWikiLeaks and Free Expression\n".$_REQUEST['date']."\nat\n".$_REQUEST['location'];}
if($_REQUEST["inputmethod"] == "textarea") {$input = $_REQUEST['inputtext'];}
while($rows > 0)
 {
 $rows = $rows-1;
 $pdf->SetXY(5,($rows*40)+5);
 $pdf->MultiCell(100,5,$input,0,'C');
 $pdf->Image("uploads/guyfawkesmask.gif", 81, ($rows*40)+5, 25, 30);
 $pdf->SetXY(105,($rows*40)+5);
 $pdf->MultiCell(100,5,$input,0,'C');
 $pdf->Image("uploads/guyfawkesmask.gif", 181, ($rows*40)+5, 25, 30);
 }
$pdf->Output();
?>
