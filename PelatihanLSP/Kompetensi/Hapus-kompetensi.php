<?php
include('../koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM kompetensi WHERE kd_kompetensi = '$id'";

if ($connection->query($query)) {
    header("location: Dashboard.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
