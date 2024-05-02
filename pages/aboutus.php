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
        <a class="nav-link" href="klien.php">Barang</a>
      </li>
      <li>
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
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-9">
      <h2>Club Medan</h2>
      <h5>Dec 7, 2017</h5>
    <img src="image/1112804616.jpg" class="rounded">
      <p></p>
      <p>Kami adalah club motor medan yang baik hati dan ramah</p>
			 </div>
  </div>
</div>
<div class="mt-5 p-4 bg-dark text-white text-center">
	<p>No HP. 0888888888</p>
	<p>clubmedan@gmail.com</p>
</div>

</body>
</html>
