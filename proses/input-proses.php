<?php
include '../koneksi.php';


$id_barang = $_POST['id_barang'];
$nama = $_POST['nama'];
$merk = $_POST['merk'];
$jumlah = $_POST['jumlah'];



if (isset($_POST['simpan'])) {

    $sql = "INSERT INTO tbbarang (id_barang, nama, merk, jumlah)
            VALUES ('$id_barang', '$nama', '$merk', '$jumlah')";


    $query = mysqli_query($db, $sql);


    if ($query) {

        header("location: ../backend/back.php?p=databarang");
        exit();
    } else {

        echo "Error: " . mysqli_error($db);
    }
}
?>
