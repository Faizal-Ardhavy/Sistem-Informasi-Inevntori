<?php
    require_once "sidebar.php";
    $id_barang = $_GET['id'];
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
    <title>Edit data Barang</title>
</head>
<body>
    <div id = main>
        <form action="edit.php?nama=<?=$nama?>" method="POST" class="mx-5" enctype="multipart/form-data">
        <div class="form-group row mb-2">
                <label for="namaBarang" class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-9">
                <input type="hidden" name="id_barang" value="<?= $id_barang ?>">
                    <select class="custom-select form-control" name = "namaBarang">
                        <?php foreach($data as $d){ ?>
                            <option value=<?= $d["namaBarang"] ?>><?= $d["namaBarang"] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="jenisBarang" class="col-sm-3 col-form-label">Jenis Barang</label>
                <div class="col-sm-9">
                    <select class="custom-select form-control" name = "jenisBarang">
                            <option selected=Konsumsi>Konsumsi</option>
                            <option value=Perkakas>Perkakas</option>
                            <option value=Elektronik>Elektronik</option>
                            <option value=Kendaraan>Kendaraan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="jumlahBarang" class="col-sm-3 col-form-label">Jumlah Barang</label>
                <div class="col-sm-9">
                    <input required type="number" class="form-control" name="jumlahBarang" id="jumlahBarang" placeholder="Jumlah Barang" required autocomplete="off" autofocus>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="statusBarang" class="col-sm-3 col-form-label">Status Barang</label>
                <div class="col-sm-9">
                    <select class="custom-select form-control" name = "StatusBarang">
                            <option selected=Dipesan>Sudah dipesan</option>
                            <option value=OTW>Sedang dalam perjalanan</option>
                            <option value=Sampai>Telah sampai</option>
                    </select>
                </div>
            </div>
            
            <button onclick="return confirm('Apakah Ingin melakukan perubahan pada data ini ?')" type="submit" name = "submit" class="btn btn-success">Simpan</button>
            <a href="index.php?nama=<?=$nama?>" class="btn btn btn-outline-danger"> Kembali</a>
        </form>
    </div>
</body>
</html>