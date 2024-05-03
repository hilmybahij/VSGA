<?php 
include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Penjualan</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
  <script src="../js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="p-5 bg-light text-white text-center">
  <h1 class="text-dark">Club Motor Kita</h1>
  <p class="text-dark">Web Costum Motor terbaik</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="../index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dklien.php">Daftar Klien</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="galery.php">Galery Foto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="klien.php">Barang</a>
      </li>
      <li>
      </li>
      <li>
      </li>
    </ul>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
Login
</button>
  </div>
</nav>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="container">
  <h2>Login form</h2>
  <form action="../proses/proses-login.php" method="post">
    <div class="mb-3 mt-3">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="password" placeholder="Enter Username" name="username">
    </div>
    <div class="mb-3">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>

      <!-- Modal footer -->
      <div class="modal-footer">

      </div>

    </div>
  </div>
</div>

<div class="container mt-3">
  <h2>daftar klien</h2>
  <p>Klien Pertama</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="image/klien.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Klien ini Meminta costum motor sesuai keinginannya</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  <br>
  
  <p>Klien Kedua</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="image/klien1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Nama Rahasia</h4>
      <p class="card-text">Salah satu pelanggan setia disini</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div>
<div class="mt-5 p-4 bg-dark text-white text-center">
 <p>No HP. 0888888888</p>
<p>clubmedan@gmail.com</p>
<p>Jl. Sana Sini</p>
</div>

</body>
</html>

</body>
</html>