<?php
// Include file koneksi.php untuk menghubungkan ke database
include '../koneksi.php';

// Periksa apakah ID barang (id_barang) telah diteruskan melalui parameter GET
if (isset($_GET['id'])) {
    $id_barang = $_GET['id'];

    // Lakukan query untuk mengambil data barang berdasarkan ID
    $query_select = "SELECT * FROM tbbarang WHERE id_barang='$id_barang'";
    $result_select = mysqli_query($db, $query_select);

    // Periksa apakah query SELECT berhasil dieksekusi
    if ($result_select) {
        // Ambil data barang dari hasil query
        $data_barang = mysqli_fetch_assoc($result_select);

        // Periksa apakah tombol 'Simpan' ditekan (data dikirim via POST)
        if (isset($_POST['simpan'])) {
            // Ambil nilai baru dari formulir edit
            $nama = $_POST['nama'];
            $merk = $_POST['merk'];
            $jumlah = $_POST['jumlah'];

            // Lakukan query UPDATE untuk mengubah data barang berdasarkan ID
            $query_update = "UPDATE tbbarang SET nama='$nama', merk='$merk', jumlah='$jumlah' WHERE id_barang='$id_barang'";
            $result_update = mysqli_query($db, $query_update);

            // Periksa apakah query UPDATE berhasil dieksekusi
            if ($result_update) {
                // Redirect kembali ke halaman backend setelah berhasil menyimpan perubahan
                header("Location: ../backend/back.php");
                exit; // Pastikan exit setelah redirect untuk menghentikan eksekusi script
            } else {
                // Tampilkan pesan error jika query UPDATE gagal
                echo "Error: " . mysqli_error($db);
            }
        }
    } else {
        // Tampilkan pesan error jika query SELECT gagal
        echo "Error: " . mysqli_error($db);
    }
} else {
    // Jika ID barang tidak ditemukan dalam parameter GET, redirect atau tampilkan pesan error
    echo "ID barang tidak valid.";
}
?>
<div id="label-page"><h3>Edit Data Barang</h3></div>
<div id="content">
	<form method="post">
	<table id="tabel-input">

		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="nama" value="<?php echo $data_barang['nama']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Merk</td>
			<td class="isian-formulir"><input type="text" name="merk" value="<?php echo $data_barang['merk']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jumlah Barang</td>
			<td class="isian-formulir"><input type="text" name="jumlah" value="<?php echo $data_barang['jumlah']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan Perubahan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>
