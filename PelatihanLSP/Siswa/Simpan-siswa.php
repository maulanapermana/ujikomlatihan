<?php
//include koneksi database
include('../koneksi.php');

//get data dari form
$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$kd_kompetensi = $_POST['kd_kompetensi'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_siswa (nisn, nama_lengkap, tempat_lahir, tgl_lahir, alamat, no_telepon, kd_kompetensi) VALUES ('$nisn', '$nama_lengkap', '$tempat_lahir','$tgl_lahir', '$alamat', '$no_telepon', '$kd_kompetensi')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php
    header("location: Dashboard.php");
} else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
