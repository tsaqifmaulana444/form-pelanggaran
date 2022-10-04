<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

include 'conn.php';

if(isset($_GET['id'])){
    header('Location: dashboard.php');
}

$id = $_GET['id'];

    $sql = "DELETE FROM pelanggaran WHERE id='$id'";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>
        alert('data berhasil dihapus');
        document.location.href = 'dashboard2.php';
        </script>";
        // pasang sweet alert
    }else{
        header('Location: delete2.php?status=failed');
    }
 
?>