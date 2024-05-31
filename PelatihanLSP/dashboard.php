<?php
include 'koneksi.php';
// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if ($_SESSION['status'] != "login") {
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/CSS/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><?php echo $_SESSION['username']; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/PeltihanLSP/siswa/Dashboard.php">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/PeltihanLSP/kompetensi/Dashboard.php">Kompetensi</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form action="logout.php" method="post">
                        <button type="submit" class="btn btn-danger" name="logout">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <script src="./Assets/JS/jquery-3.4.1.slim.min.js"></script>
    <script src="./Assets/JS/bootstrap.min.js"></script>
</body>

</html>