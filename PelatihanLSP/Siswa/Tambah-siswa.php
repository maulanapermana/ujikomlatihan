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
                        TAMBAH SISWA
                    </div>

                    <div class="card-body">
                        <form action="simpan-siswa.php" method="POST">
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="text" name="nisn" placeholder="Masukkan NISN Siswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Siswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" placeholder="Tempat lahir siswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" placeholder="Tanggal lahir siswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"></textarea>
                            </div>

                            <div class="form-group">
                                <label>No telepon</label>
                                <input type="text" name="no_telepon" placeholder="Masukkan No telepon Siswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <!-- <input type="text" name="kd_kompetensi" placeholder="Masukkan Kompetensi Siswa" class="form-control"> -->

                                <label>Kode Kompetensi</label>
                                <select class="custom-select" name="kd_kompetensi">
                                    <?php foreach ($result as $r) : ?>
                                        <option selected>Kode Kompetensi</option>
                                        <option value="<?= $r['kd_kompetensi']; ?>"><?= $r['nama_kompetensi']; ?></option>
                                    <?php endforeach; ?>
                                </select>
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