<?php
$nama=$_GET["nama"];

$stok = "berhasil melakukan penambahan stok";
$baru = "berhasil melakukan pemesanan baru";
$tmp;
include("connection.php");
if (isset($_POST["submit"])) {
    $namaBarang = $_POST["namaBarang"];
    $jenisBarang = $_POST["jenisBarang"];
    $jumlahBarang = $_POST["jumlahBarang"];
    $query = "INSERT INTO barang VALUES ('','$namaBarang ',' $jenisBarang','$jumlahBarang','')";
    mysqli_query($conn, $query);
    $tmp = $baru;
}
if (isset($_POST["stok"])) {
   $namaBarang = $_POST["namaBarang"];
   $jumlahBarang = $_POST["jumlahBarang"];
   $query2 = "INSERT INTO pesanan VALUES ('','$namaBarang ','','$jumlahBarang')";
   mysqli_query($conn, $query2);
   $tmp = $stok;
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Redirect</title>
      <meta http-equiv = "refresh" content = "1; url =index.php?nama=<?= $nama ?>" />
   </head>
   <body>
      <p><?=$tmp?></p>
   </body>
</html>