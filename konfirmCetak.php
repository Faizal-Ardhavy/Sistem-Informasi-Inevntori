<?php
require_once "sidebar.php";
include("connection.php");

$query = "SELECT * FROM barang";
$data = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal</title>
</head>
<body>
    <div id = main>
        <div class ="judul mb-5" >
            <h1 style= "text-align:center">
                Sistem Informasi Inventori
            </h1>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered" align="center">

            <thead>
                <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Jumlah Barang</th>
                <th>Status Barang</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $d){ ?>
                <tr>
                    <td>
                        <?= $d["id_barang"] ?>
                    </td>
                    <td>
                        <?= $d["namaBarang"] ?>
                    </td>
                    <td>
                        <?= $d["jenisBarang"] ?>
                    </td>
                    <td>
                        <?= $d["jumlahBarang"] ?>
                    </td>
                    <td>
                        <?= $d["StatusBarang"] ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
            <form action="cetak.php" method="POST" class="mx-5" enctype="multipart/form-data">
                <input onclick="return confirm('Apakah Ingin mencetak laporan ini ?')" type="submit" value="Cetak" name = "submit" class="btn btn-success">
                <a href="index.php?nama=<?=$nama?>" class="btn btn btn-outline-danger"> Batal</a>
            </form>
        </div>
    </div>
</body>
</html>