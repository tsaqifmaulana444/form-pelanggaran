<?php 
session_start();
include 'conn.php';

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
        <title>Starbhak Services - Formulir</title>
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
                    <li class="nav-item"><a class="nav-link " href="index2.php?id=<?= $value['id']?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index2.php?id=<?= $value['id']?>">Form</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
                        <li class="nav-item"><a class="nav-link" href='profil.php?id=<?= $value['id'] ?>'>Profile</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-white py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <input type="hidden" value="<?= $value['id']?>">
                    <div class="table" style="width: fit-content; height: 420px; overflow: auto;">
                    <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">Waktu Keterlambatan</th>
                                    <th scope="col">Tanggal Terlambat</th>
                                    <th scope="col">Guru Bk Siswa</th>
                                    <th scope="col">Alasan Keterlambatan</th>
                                    <th scope="col">Approve</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $i = 1;
                            include 'conn.php';
                            $sql = "SELECT * FROM keterlambatan"; //lihat line 56
                            $query = mysqli_query($conn,$sql);
                            while($value = mysqli_fetch_assoc($query)){    
                            echo"
                            <tr>
                                <td>$i</td>
                                <td>$value[id]</td>
                                <td>$value[nama]</td>
                                <td>$value[kelas]</td>
                                <td>$value[NISN]</td>
                                <td>$value[menitKeterlambatan]</td>
                                <td>$value[tanggalTerlambat]</td>
                                <td>$value[guruBk]</td>
                                <td>$value[alasanKeterlambatan]</td>  
                                <td>
                                    <a href='delete.php?id=".$value['id']."' style='color: #fff;'> <button type='button' class='btn btn-primary'><i class='bi bi-trash2-fill'></i></a>
                                    <a href='approve.php?id=".$value['id']."' style='color: #fff;'> <button type='button' class='btn btn-warning'><i class='bi bi-check2-circle'></i></button></a>
                                </td>
                            </tr>";
                            $i++;
                        } 
                    ?> 
                        </table>
                    </div>
                </div>
            </div>
        </header>
    <footer class="py-5 bg-dark">
        <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; SMK Taruna Bhakti 2022 <span style="color: blue;">#stopwar</span><span style="color: yellow;"> #saveukraine</span></p></div>
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