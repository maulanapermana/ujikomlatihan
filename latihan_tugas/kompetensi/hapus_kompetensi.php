<?php
include('../koneksi.php');
//get id
$id = $_GET['id'];
$query = "DELETE FROM tbl_kompetensi WHERE kd_kompetensi = '$id'";
if($connection->query($query)) {
 header("location: dashboard_kompetensi.php");
} else {
 echo "DATA GAGAL DIHAPUS!";
}
?>