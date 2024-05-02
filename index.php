<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Penjualan</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
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
        <a class="nav-link active" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/klien.php">Barang</a>
      </li>
    </ul>
       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Login
  </button>

  </div>
</nav>
<!-- The Modal -->
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
  <form action="proses/proses-login.php" method="post">
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
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-3">

    	<div class="card bg-secondary">
    		<h2 class="text-white">About US</h2>
       <img src="pages/image/1112804616.jpg" class="rounded" alt="Cinque Terre">
      <p class="text-center text-white">Ini adalah Kami semua</p>
      <a class="btn btn-primary btn-sm" href="pages/aboutus.php">About Us</a>
    	</div>



      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Contoh Motor Costum</h2>
      <h5>Dec 7, 2020</h5>
    <img src="pages/image/BABU.jpg" class="rounded">
      <p>Motor V6</p>
      <p>Motor ini memakai mesin V6 dengan tenaga 700hp di costum oleh kang asep</p>

      <h2 class="mt-5">Contoh Motor Costum</h2>
      <h5>Sep 2, 2021</h5>
			<img src="pages/image/v6.jpg" class="rounded">
				<p>Motor V8</p>
				<p>Motor ini memakai mesin V8 dengan tenaga 900hp di costum oleh kang asep</p>
			 </div>
  </div>
</div>
<div class="mt-5 p-4 bg-dark text-white text-center">
<p>No HP. 0888888888</p>
<p>clubmedan@gmail.com</p>
</div>


</body>
</html>
