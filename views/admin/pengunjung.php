<?php
session_start();
include '../controller/koneksi.php';
$id = $_SESSION['id_user'];
$sql = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id'");
$penjaga = mysqli_fetch_array($sql);
if($_SESSION['level']==""){
  header("location:../login.php");
}elseif($_SESSION['level']=="1"){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>sipti app</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../src/fron/animate/animate.min.css" rel="stylesheet">
    <link href="../../src/fron/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="../../src/fron/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../src/fron/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../src/fron/css/style.css" rel="stylesheet">

    <!-- Web App Manifest -->
    <link rel="manifest" href="./manifest.json">

    <!-- CSS DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- JavaScript DataTables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
</head>
<body>
    <div class="container-fluid nav-bar">
        <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg py-4">
                <a href="admin.php" class="navbar-brand">
                    <h1 class="text-primary fw-bold mb-0">Sipti<span class="text-dark">App</span> </h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="admin.php" class="nav-item nav-link">Dashboard</a>
                        <a href="pengunjung.php" class="nav-item nav-link active">Pengunjung</a>
                        <a href="pengguna.php" class="nav-item nav-link">Pengguna</a>
                        <a href="profil_admin.php" class="nav-item nav-link">Profil</a>
                        <a href="about.php" class="nav-item nav-link">Tentang</a>
                    </div>
                    <a href="../controller/logout.php" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Logout</a>
                </div>
            </nav>
        </div>
    </div>

    <div class="container-fluid bg-light py-6 my-6 mt-0">
        <div class="container">
            <h1 align="center">Daftar pengunjung</h1><br><br><br>
            <table align="center" cellpadding="10" id="example">
                <thead>
                    <tr>
                        <td>Nama pengguna</td>
                        <td>Kunjungan</td>
                        <td>Lorem</td>
                        <td>aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John doe</td>
                        <td>Bali</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                    </tr>
                    <tr>
                        <td>John doe</td>
                        <td>Bali</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                    </tr>
                    <tr>
                        <td>John doe</td>
                        <td>Bali</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                    </tr>
                    <tr>
                        <td>John doe</td>
                        <td>Bali</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        <div class="footer-logo" style="padding: 10px;"><h1 align="center">SIPTI APP</h1></div>
        <div class="footer-copyright"style="padding: 10px;"><p align="center">Copyright 2024</p></div>
    </div>
    <script>
        $(document).ready( function () {
            $('#example').DataTable();
        });
    </script>
</body>
</html>

<?php } else{
  header("location:../login.php");
} ?>