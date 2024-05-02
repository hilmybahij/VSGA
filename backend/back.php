<?php
include'../koneksi.php';
$tgl=date('Y-m-d');
?>
<!doctype html>
<html>
<head>
	<title>Dashboard Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
	<div id="container">
		<div id="header">
			<div id="logo-perpustakaan-container">
				<image id="logo-perpustakaan" src="../pages/image/Logo.jpg" border=0 style="border:0; text-decoration:none; outline:none">
			</div>
			<div id="nama-alamat-perpustakaan-container">
				<div class="nama-alamat-perpustakaan">
					<h1> Dashboard Admin </h1>
				</div>
				<div class="nama-alamat-perpustakaan">

				</div>
			</div>
		</div>
		<div id="header2">
			<div id="nama-user">Hai Admin !</div>
		</div>
		<div id="sidebar">
			<a href="index.php?p=beranda"></a>
			<p class="label-navigasi">Entry Data Dan Transaksi</p>
			<ul>
				<li><a href="back.php?p=databarang">Data Buku</a></li>

			</ul>
		</div>
		<div id="content-container">
			    <div class="container">
		<div class="row"><br/><br/><br/>
			<div class="col-md-10 col-md-offset-1" style="background-image:url('../asanoer-background.jpg')">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-warning login-panel" style="background-color:rgba(255, 255, 255, 0.6);position:relative;">

						<div class="panel-footer">

						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
		<div id="label-page"><h3>Tampil Data barang</h3></div>
		<div id="content">
			<p id="tombol-tambah-container"><a href="tambahdata.php" class="tombol">Tambah Barang</a></p>
			<table id="tabel-tampil">
				<tr>
					<th id="label-tampil-no">No</td>
					<th>ID Buku</th>
					<th>NAMA BARANG</th>
					<th>MERK</th>
					<th>JUMLAH</th>
					<th id="label-opsi">Opsi</th>
				</tr>



				<?php
				$sql="SELECT * FROM tbbarang ORDER BY id_barang DESC";
				$q_tampil_barang = mysqli_query($db, $sql);

				$nomor=1;
				while($r_tampil_barang=mysqli_fetch_array($q_tampil_barang)){
				?>
				<tr>
					<td><?php echo $nomor++; ?></td>
					<td><?php echo $r_tampil_barang['id_barang']; ?></td>
					<td><?php echo $r_tampil_barang['nama']; ?></td>
					<td><?php echo $r_tampil_barang['merk']; ?></td>
					<td><?php echo $r_tampil_barang['jumlah']; ?></td>
					<td>

						<div class="tombol-opsi-container"><a href="edit.php?id=<?php echo $r_tampil_barang['id_barang'];?>" class="tombol">Edit</a></div>
						<div class="tombol-opsi-container"><a href="../proses/hapus.php?id=<?php echo $r_tampil_barang['id_barang']; ?>" class="tombol">Hapus</a></div>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
		</div>
		<div id="footer"><h3>Sistem Informasi </h3></div>
	</div>
</body>
</html>
