<?php

include('../koneksi.php');

// $kd_kompetensi = $_GET['kd_kompetensi'];

$query = "SELECT * FROM kompetensi";
$result = mysqli_query($connection, $query);
// $row = mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <link rel="stylesheet" href="../Assets/CSS/bootstrap.min.css">
    <title>Tambah Siswa</title>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH KOMPETENSI
                    </div>

                    <div class="card-body">
                        <form action="simpan-kompetensi.php" method="POST">
                            <div class="form-group">
                                <label>Nama Kompetensi</label>
                                <input type="text" name="nama_kompetensi" placeholder="Masukkan Kompetensi" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Program Keahlian</label>
                                <input type="text" name="prog_keahlian" placeholder="Masukkan Program Keahlian" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../Assets/JS/jquery-3.4.1.slim.min.js"></script>
    <script src="../Assets/JS/bootstrap.min.js">
    </script>
</body>

</html>