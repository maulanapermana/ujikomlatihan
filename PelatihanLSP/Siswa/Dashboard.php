<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <link rel="stylesheet" href="../Assets/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/CSS/jquery.dataTables.min.css">
    <title>Data Siswa</title>
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA SISWA
                    </div>
                    <div class="card-body">
                        <a href="tambah-siswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px;">TAMBAH DATA</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">NAMA LENGKAP</th>
                                    <th scope="col">TEMPAT LAHIR</th>
                                    <th scope="col">TANGGAL LAHIR</th>
                                    <th scope="col">ALAMAT</th>
                                    <th scope="col">NO TELEPON</th>
                                    <th scope="col">KODE KOMPETENSI</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../koneksi.php');
                                $no = 1;
                                $query = mysqli_query($connection, "SELECT * FROM tbl_siswa AS s INNER JOIN kompetensi AS k ON s.kd_kompetensi = k.kd_kompetensi");
                                while ($row = mysqli_fetch_array($query)) { ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['nisn'] ?></td>
                                        <td><?php echo $row['nama_lengkap'] ?></td>
                                        <td><?php echo $row['tempat_lahir'] ?></td>
                                        <td><?php echo $row['tgl_lahir'] ?></td>
                                        <td><?php echo $row['alamat'] ?></td>
                                        <td><?php echo $row['no_telepon'] ?></td>
                                        <td><?php echo $row['nama_kompetensi'] ?></td>
                                        <td class="text-center">
                                            <a href="edit-siswa.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <a href="hapus-siswa.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="../Assets/JS/jquery-3.4.1.slim.min.js"></script>
        <script src="../Assets/JS/bootstrap.min.js"></script>
        <script src="../Assets/JS/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
</body>

</html>