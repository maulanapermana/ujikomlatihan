<?php
//include koneksi database
include('../koneksi.php');

//get data dari form
$id_siswa = $_POST['id_siswa'];
$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$kd_kompetensi = $_POST['kd_kompetensi'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_siswa SET nisn='$nisn', nama_lengkap='$nama_lengkap', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', no_telepon='$no_telepon', kd_kompetensi='$kd_kompetensi' WHERE id_siswa='$id_siswa'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php
    header("location: Dashboard.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
