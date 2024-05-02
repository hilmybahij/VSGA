<?php
include '../koneksi.php';

// Pastikan nama variabel $_POST sesuai dengan atribut 'name' pada input dalam formulir
$id_barang = $_POST['id_barang']; // Ubah nama variabel menjadi $id_barang
$nama = $_POST['nama'];
$merk = $_POST['merk'];
$jumlah = $_POST['jumlah'];

// Periksa apakah tombol 'Simpan' sudah ditekan (diakses melalui $_POST)
if (isset($_POST['simpan'])) {
    // Lakukan query UPDATE untuk mengubah data barang berdasarkan ID barang
    $query = "UPDATE tbbarang SET nama='$nama', merk='$merk', jumlah='$jumlah' WHERE id_barang='$id_barang'";

    // Jalankan query menggunakan mysqli_query
    if (mysqli_query($db, $query)) {
        // Redirect kembali ke halaman backend setelah berhasil menyimpan perubahan
        header("location: ../backend/back.php");
        exit; // Pastikan exit setelah redirect untuk menghentikan eksekusi script
    } else {
        // Jika query gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($db);
    }
}
?>
