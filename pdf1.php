<?php
if(isset($_POST['submit'])){
    $product_name = $product['product_name'];
    $product_desc = $product['product_desc'];
    $product_cost = $product['product_cost'];
     require("fpdf/fpdf.php");
     $pdf=new FPDF();
     $pdf->AddPage();
     $pdf->SetFont("Arial","B",16);
     $pdf->Cell(0,10,"Product Details",1,1,'C');

     $pdf->Cell(25,10,"Product_Name",1,0);
     $pdf->Cell(65,10,"Product_Description",1,0);
     $pdf->Cell(45,10,"Product_cost",1,0);
     $pdf->Cell(0,10," Password",1,1);

     $pdf->Cell(25,10,$product_name,1,0);
     $pdf->Cell(65,10,$product_desc,1,0);
     $pdf->Cell(45,10,$product_cost,1,0);
     $pdf->Cell(0,10,$password,1,1);
     $file=time().'.pdf';

     $pdf->output($file,'D');
 }
    
?>
