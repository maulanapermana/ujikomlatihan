<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="jquery.js"></script>

	<title>Navbar</title>
</head>
<body>

	 <header>
        <div class="logo">Latihan LSP</div>
        <nav>
            <ul>
                <li><a href="dashboard_home.php">Home</a></li>
                <li><a href="siswa/dashboard.php">Data Siswa</a></li>
                <li><a href="kompetensi/dashboard_kompetensi.php">Data Kompetensi</a></li>
            </ul>
        </nav>
        <div class="menu-toggle">
            <i class="fa fa-bars"></i>
        </div>
    </header>

    <script>
        $(document).ready(function () {
            $(".menu-toggle").click(function () {
                $('nav').toggleClass('active');
            })
        })
    </script>
</body>
</html>