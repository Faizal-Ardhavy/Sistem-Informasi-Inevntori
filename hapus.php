<?php
require_once "sidebar.php";
include "connection.php";

//$_GET[id] untuk mengambil nilai dari address bar ?id=nilainya 

$id_barang = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM barang WHERE id_barang = '$id_barang'");

if($query) {
	echo "Data Terhapus";

header("location:index.php?nama=$nama");

}else{

echo "Data tidak terhapus";

}

?>