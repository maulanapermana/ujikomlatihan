<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <link rel="stylesheet" href="../Assets/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/CSS/jquery.dataTables.min.css">
    <title>Data Kompetensi</title>
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA KOMPETENSI
                    </div>
                    <div class="card-body">
                        <a href="Tambah-kompetensi.php" class="btn btn-md btn-success" style="margin-bottom: 10px;">TAMBAH DATA</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">KODE KOMPETENSI</th>
                                    <th scope="col">NAMA KOMPETENSI</th>
                                    <th scope="col">PROGRAM KEAHLIAN</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../koneksi.php');
                                $no = 1;
                                $query = mysqli_query($connection, "SELECT * FROM kompetensi");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['kd_kompetensi'] ?></td>
                                        <td><?php echo $row['nama_kompetensi'] ?></td>
                                        <td><?php echo $row['prog_keahlian'] ?></td>
                                        <td class="text-center">
                                            <a href="edit-kompetensi.php?id=<?php echo $row['kd_kompetensi'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <a href="hapus-kompetensi.php?id=<?php echo $row['kd_kompetensi'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
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