<?php 
session_start();
include "conn.php";
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
$id = $_GET['id'];
$sql = "SELECT * FROM guru WHERE id = '$id'";
$query = mysqli_query($conn,$sql);
$value = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Starbhak Services - Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            body{
                overflow-x: hidden;
            }
        </style>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Starbhak Services Teacher</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page"  href="index2.php?id=<?= $value['id']?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#fff">Form</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
                        <li class="nav-item"><a class="nav-link" href="profil.php?id=<?= $value['id']?>">Profile</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Selamat datang di Starbhak Services!</h1>
                            <p class="lead text-white-50 mb-4"><?= $value['nama'];?></p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-dark btn-lg px-4 me-sm-3" href="#fff">Formulir Laporan</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="datapel.php?id=<?= $value['id']?>">Daftar Peraturan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="bg-light py-5 border-bottom" id="fff">
            <div class="container px-5 my-5" style="display:flex; justify-content: space-between;">
                <div class="image" style="width: 37%; height: 37%;">
                    <img src="lapangantb.png" alt="" style="width:100%">
                    <p class="text-dark fs-6">Gedung SMK Taruna Bhakti</p>
                </div>
                <div class="p" style="width: 47%;">
                    <h1 class="display-5 fw-bold text-dark mb-2" style="width: 100%;;">Approve submission</h1> 
                    <p class="lead text-dark-50 mb-4">Setujui formulir keterlambatan siswa melalui tombol dibawah ini</p>
                    <a class="btn btn-outline-dark btn-lg px-4" href='formtelat.php?id=<?= $value['id'] ?>' style="position: relative ; margin-top:7%;">Approve submission</a>
                </div>
            </div>
        </section>
      
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; SMK Taruna Bhakti 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
