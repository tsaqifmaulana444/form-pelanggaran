<?php 
session_start();
include 'conn.php';
$id = $_GET['id'];
$sql = "SELECT * FROM profil WHERE id = '$id'";
$query = mysqli_query($conn,$sql);
$value = mysqli_fetch_assoc($query);

if(!isset($_SESSION["login"])){
    header("Location: loginuser.php");
    exit;
}
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
            table{
                position: relative;
                top: 0;
                left: -55%;
            }
            table tr td:first-child{
                width: 3020px;
            }
            table tr td:last-child{
                width: 1200px;
                /* padding-left: 30px;
                box-sizing: border-box; */
            }
        </style>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Starbhak Services</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link " href="index2.php?id=<?= $value['id']?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index2.php?id=<?= $value['id']?>">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="index2.php?id=<?= $value['id']?>">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="">Profile</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-white py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                    <div class="content">
                        <br>
                        <table>
                            <tr>
                                <td>
                                    <p id="info" class="fs-1">Profil Lengkap <?=$value ['nama'] ?></p>   
                                </td>
                                <td></td>
                            </tr>
                            <br>
                            <tr>
                                <td><p class="fs-4">Nama Lengkap :</p></td>
                                <td><p class="fs-4"><?=$value ['nama'] ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="fs-4">Usia :</td>
                                <td><p class="fs-4"><?=$value ['usia'] ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="fs-4">NISN</td>
                                <td><p class="fs-4"><?=$value ['NISN'] ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="fs-4">Tanggal Lahir :</td>
                                <td><p class="fs-4"><?=$value ['tanggalLahir'] ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="fs-4">Kelas :</td>
                                <td><p class="fs-4"><?=$value ['kelas'] ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="fs-4">Gmail :</td>
                                <td><p class="fs-4"><?=$value ['gmail'] ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="fs-4">Total Pelanggaran Yang Dilakukan :</p></td>
                                <td><p class="fs-4"><?=$value ['totalPelanggaran'] ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="fs-4">Poin Pelanggaran Siswa :</p></td>
                                <td><p class="fs-4"><?=$value ['poin'] ?></p></td>
                            </tr>
                        </table> 
                        <br> 
                        <a href="index2.php?id=<?= $value['id']?>" style="position: relative; left:-55%"><button type="button" class="btn btn-success">Kembali</button></a>
                    </div>
                </div>
            </div>
        </header>
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
