<?php
//include koneksi database
include('../koneksi.php');
//get data dari form
$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$no_telepon = $_POST['no_telepon'];
$kompetensi = $_POST['nama_kompetensi'];
//query insert data ke dalam database
$query = "INSERT INTO tbl_siswa (nisn, nama_lengkap, alamat, tempat_lahir, tgl_lahir, no_telepon, kd_kompetensi) VALUES ('$nisn','$nama_lengkap', '$alamat', '$tempat_lahir', '$tgl_lahir', '$no_telepon', '$kompetensi')";

//var_dump($query)die();

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {
 //redirect ke halaman index.php
	header("location: dashboard.php");
} else {
 //pesan error gagal insert data
	echo "Data Gagal Disimpan!";
}
?>