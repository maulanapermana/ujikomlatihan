<?php
//include koneksi database
include('../koneksi.php');

//get data dari form
$nama_kompetensi = $_POST['nama_kompetensi'];
$prog_keahlian = $_POST['prog_keahlian'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_kompetensi (nama_kompetensi, prog_keahlian) VALUES ('$nama_kompetensi', '$prog_keahlian')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {
 //redirect ke halaman index.php
	header("location: dashboard_kompetensi.php");
} else {
 //pesan error gagal insert data
	echo "Data Gagal Disimpan!";
}
?>