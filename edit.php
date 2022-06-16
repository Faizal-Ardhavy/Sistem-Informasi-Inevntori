<?php
$nama=$_GET["nama"];
include("connection.php");
$id_barang = mysqli_real_escape_string($conn, $_POST['id_barang']);
$namaBarang = $_POST["namaBarang"];
$jenisBarang = $_POST["jenisBarang"];
$jumlahBarang = $_POST["jumlahBarang"];
$statusBarang = $_POST["StatusBarang"];
$queryInsert = "UPDATE barang SET namaBarang = '$namaBarang', jenisBarang = '$jenisBarang', jumlahBarang = '$jumlahBarang', StatusBarang = '$statusBarang' Where id_barang = '$id_barang'";
mysqli_query($conn, $queryInsert);

?>

<!DOCTYPE html>
<html>
   <head>
      <title>Kelola Data</title>
      <meta http-equiv = "refresh" content = "1; url =index.php?nama=<?= $nama ?>" />
   </head>
   <body>
      <p>Berhasil Mengelola data</p>
   </body>
</html>
