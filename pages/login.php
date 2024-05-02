<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <script src="../js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="bg-image" style="background-image: url('image/Logo.jpg') height: 100vh;">
</div>

<div class="container mt-5 col-2">
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

    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>

</body>
</html>
