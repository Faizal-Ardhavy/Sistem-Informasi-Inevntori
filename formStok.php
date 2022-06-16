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
    <title>Input Barang</title>
</head>
<body>
    <div id = main>
        <form action="redirect.php?nama=<?=$nama?>" method="POST" class="mx-5" enctype="multipart/form-data">
            <div class="form-group row mb-2">
                <label for="namaBarang" class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-9">
                    <select class="custom-select form-control" name = "namaBarang">
                        <?php foreach($data as $d){ ?>
                            <option value=<?= $d["namaBarang"] ?>><?= $d["namaBarang"] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="jumlahBarang" class="col-sm-3 col-form-label">Jumlah Barang</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="jumlahBarang" id="jumlahBarang" placeholder="Jumlah Barang" required autocomplete="off" autofocus>
                </div>
            </div>
            <input onclick="return confirm('Apakah anda yakin mengubah data ini ?')"
            type="submit" value="Simpan" name = "stok" class="btn btn-success">
            <a href="index.php?nama=<?=$nama?>" class="btn btn btn-outline-danger"> Kembali</a>
        </form>
    </div>
</body>
</html>