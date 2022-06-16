<?php
require('pdf/fpdf.php');
include("connection.php");

$query = "SELECT * FROM barang";
$data = mysqli_query($conn, $query);
$pdf = new FPDF();
$result = $conn->query($query);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,10,'id',1);
$pdf->Cell(50,10,'Nama Barang',1);
$pdf->Cell(50,10,'Jenis Barang',1);
$pdf->Cell(40,10,'Jumlah Barang',1);
$pdf->Cell(40,10,'Status Barang',1);
$pdf->Ln();
while($row = $result->fetch_object()){
  $pdf->SetFont('Arial','',12);
  $id = $row->id_barang;
  $name = $row->namaBarang;
  $jenis = $row->jenisBarang;
  $jumlah = $row->jumlahBarang;
  $status = $row->StatusBarang;
  $pdf->Cell(10,10,$id,1);
  $pdf->Cell(50,10,$name,1);
  $pdf->Cell(50,10,$jenis,1);
  $pdf->Cell(40,10,$jumlah,1);
  $pdf->Cell(40,10,$status,1);
  $pdf->Ln();
}
$pdf->Output();
?>