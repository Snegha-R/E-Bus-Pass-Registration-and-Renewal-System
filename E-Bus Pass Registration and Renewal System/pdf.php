<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
</head>
<body>
	
<?php
$name=$_POST['name'];
	$regno=$_POST['regno'];
	$year=$_POST['year'];
	$Sem=$_POST['Sem'];
	$billno=$_POST['billno'];
	$bp=$_POST['bp'];
	$busno=$_POST['busno'];
ob_start();

require("fpdf/fpdf.php");

$pdf = new FPDF('P','mm','A4');
$pdf->ADDPage();
$pdf->SetFont('Times', 'B', 20); 
$pdf->Image('fpdf/mkce.jpg', 5,8,80); 
  $pdf->Image('fpdf/logo.jpg', 170, 10, 30); 
       
// Framed rectangular area 
$pdf->Cell(176, 50, 'E-Card', 0, 0, 'C'); 
  $pdf->ln();
  $pdf->Cell(50);
  $pdf->SetFont('Times', '', 20); 
  $pdf->Cell(25,10,'Name:',0,0);
  $pdf->Cell(20);
  $pdf->Cell(40,10,$name);
 $pdf->ln();
  $pdf->Cell(50);
 $pdf->Cell(40,10,'Register Id:',0,0);
 $pdf->Cell(5);
  $pdf->Cell(40,10,$regno);
 $pdf->ln();
  $pdf->Cell(50);
  
  $pdf->Cell(20,10,'Year:',0,0,);
  $pdf->Cell(30);
 
  $pdf->Cell(40,10,$year);
 $pdf->ln();
  $pdf->Cell(50);
  
$pdf->Cell(35,10,'Semester:',0,0);
$pdf->Cell(15);

  $pdf->Cell(20,10,$Sem);
 $pdf->ln();
  $pdf->Cell(50);
  
$pdf->Cell(25,10,'Bill No:',0,0);
$pdf->Cell(20);

  $pdf->Cell(40,10,$billno);
 $pdf->ln();
  $pdf->Cell(50);
  
 $pdf->Cell(45,10,'Boarding Point:',0,0);
// $pdf->Cell(5);
 
  $pdf->Cell(40,10,$bp);
 $pdf->ln();
 $pdf->Cell(50);
  

$pdf->Cell(30,10,'Bus No:',0,0);
$pdf->Cell(20);

  $pdf->Cell(40,10,$busno);
 $pdf->ln();
  $pdf->Cell(50);
  $pdf->ln(100);
$pdf->Cell(130,45,'',0,0,'C');
 
 $pdf->Cell(40,45,'Principal Signature',0,0,'C');
  //$pdf->Cell(40,10,$billno);
 $pdf->ln();
 date("m/d/Y");
//SELECT DATE_FORMAT( CURDATE( ) ,  '%d/%m/%Y' );
$pdf->Output();
ob_end_flush();


?>
</body>
</html>