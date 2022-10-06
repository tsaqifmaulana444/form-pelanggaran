<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

include 'conn.php';

if(isset($_GET['id'])){
    header('Location: dashboard4.php');
}

$id = $_GET['id'];

    $sql = "DELETE FROM guru WHERE id='$id'";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>
        alert('data berhasil dihapus');
        document.location.href = 'dashboard3.php';
        </script>";
        // pasang sweet alert
    }else{
        header('Location: delete3.php?status=failed');
    }
 
?>