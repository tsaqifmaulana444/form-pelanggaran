<?php 
session_start();
include 'conn.php';

if(!isset($_SESSION["login"])){
    header("Location: loginuser.php");
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM profil WHERE id = '$id'";
$query = mysqli_query($conn,$sql);
$value = mysqli_fetch_assoc($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Sidebar Menu</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">Starbhak Services</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page"  href="index2.php?id=<?= $value['id']?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index2.php?id=<?= $value['id']?>">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="index2.php?id=<?= $value['id']?>">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
                    <li class="nav-item"><a class="nav-link" href="profil.php?id=<?= $value['id']?>">Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="title" style="width:50%; margin-top:3%; position:relative; left:11.5%">
        <h1 class="display-7 fw-semibold text-dark mb-2" style="position:relative; ">List Peraturan Yang Berlaku Di SMK Taruna Bhakti</h1>
    </div>
    <table class="table table-hover" style="position:relative; width:77%; margin-left:11.5%; box-sizing:border-box; margin-top:3.5%; margin-bottom:4.5%">
        <thead>
            <tr class="table-secondary">
                <th scope="col">No</th>
                <th scope="col">Nama Pelanggaran</th>
                <th scope="col">Point</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $i = 1;
        include 'conn.php';
        $sql = "SELECT * FROM pelanggaran";
        $query = mysqli_query($conn,$sql);
        while($value = mysqli_fetch_assoc($query)){    
            echo"
            <tr>
                <td>$i</td>
                <td style='word-wrap:break-word; max-width:70%;'>$value[deskripsi]</td>
                <td>$value[poin_pelanggaran]</td>  
            </tr>";
            $i++;
        }?> 
        </tbody>
        
    </table>

 <!-- Footer-->
    <footer class="py-5 bg-dark ">
        <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; SMK Taruna Bhakti 2022</p></div>
     </footer>
</body>
</html>