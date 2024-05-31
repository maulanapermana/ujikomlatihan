<?php
//include koneksi database
include('../koneksi.php');

//get data dari form
// $kd_kompetensi = $_POST['kd_kompetensi'];
$nama_kompetensi = $_POST['nama_kompetensi'];
$prog_keahlian = $_POST['prog_keahlian'];

//query insert data ke dalam database
$query = "INSERT INTO kompetensi (nama_kompetensi, prog_keahlian) VALUES ('$nama_kompetensi', '$prog_keahlian')";

// var_dump($query);
// die;

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php
    header("location: Dashboard.php");
} else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
