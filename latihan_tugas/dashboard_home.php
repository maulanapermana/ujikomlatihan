<?php 
include 'koneksi.php';
include ("navbar.php");

// mengaktifkan session
session_start();
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
header("location:index.php");
}
?>

<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard Home</title>
</head>
<body>
	<br><br><br><br><br>
	<h1>Selamat Datang Di Latihan LSP Siswa</h1>


</body>
</html>
