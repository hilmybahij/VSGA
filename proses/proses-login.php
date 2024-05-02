<?php
session_start();
include '../koneksi.php';

// Ambil nilai yang dikirimkan dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Periksa apakah username dan password cocok dalam database
$sql = "SELECT * FROM tblogin WHERE username='$username' AND password='$password'";
$result = $db->query($sql);

if ($result->num_rows == 1) {
    // Jika cocok, set session dan arahkan ke halaman selanjutnya
    $_SESSION['username'] = $username;
    header("Location: ../backend/back.php");
} else {
    // Jika tidak cocok, beri pesan kesalahan dan arahkan kembali ke form login
    echo "Username atau password salah. Silakan coba lagi.";
    header("refresh:2;url=../index.php");
}
?>
