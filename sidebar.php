<?php
    include("connection.php");
    $query = "SELECT * FROM admin";
    $data = mysqli_query($conn, $query);
    $nama = "Administrator";
    if(isset($_GET['nama'])){ //check if form was submitted
        $input = $_GET['nama']; //get input text
        $nama =$input;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SI Inventory</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link href="style.css" rel="stylesheet">
</head>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="form.php?nama=<?=$nama?>">Pesan Barang Baru</a>
    <a href="formStok.php?nama=<?=$nama?>">Pesan Stok Barang</a>
    <a href="olahData.php?nama=<?=$nama?>">Olah Data Pesanan</a>
    <a href="konfirmCetak.php?nama=<?=$nama?>">Buat Laporan</a>
    <hr>
    <a class="nav-link dropdown-toggle dropdown" href="#" id="offcanvasNavbarLightDropdown" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <?=$nama?> <img src="https://avatars.githubusercontent.com/u/79374894?v=4" alt="" width="32" height="32"
            class="rounded-circle me-2">
    </a>
    <form action="" method="GET">
        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarLightDropdown">
            <?php foreach($data as $d){ ?>
            <li><a class="dropdown-item" href="./?nama=<?= $d["nama"] ?>"><?= $d["nama"] ?></a></li>
            <?php } ?>
        </ul>
    </form>
</div>

<!-- Use any element to open the sidenav -->
<button class="btn" onclick="openNav()"><i class='bx bx-menu'></i></button>

<script>
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}
/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
</script>
</body>

</html>