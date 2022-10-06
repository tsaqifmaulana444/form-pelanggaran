
<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

include 'conn.php';

if(isset($_GET['id'])){    
    $id = $_GET['id'];
    $sql = "UPDATE profil SET totalPelanggaran = 1, poin = 5 WHERE id = '$id'";
    $query = mysqli_query($conn,$sql);
    
    if($query){
        echo "<script>
        alert('poin berhasil ditambahkan');
        document.location.href = 'formtelat.php?id=$id';
        </script>";
    }else{
        header('Location: approve.php?status=failed');
    }
}
 
 