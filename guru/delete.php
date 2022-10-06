<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

include 'conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM keterlambatan WHERE id='$id'";
    $query = mysqli_query($conn,$sql);
    
    if($query){
        echo "<script>
        alert('data berhasil dihapus');
        document.location.href = 'formtelat.php?id=$id';
        </script>";
        // pasang sweet alert
    }else{
        header('Location: delete.php?status=failed');
    }
}
    
?>