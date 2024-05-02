<?php
include'../koneksi.php';
$id_barang=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbbarang
	WHERE id_barang='$id_barang'"
);
header("location:../backend/back.php");
?>
