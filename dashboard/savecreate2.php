<?php
include 'conn.php';
include 'function.php';

if(isset($_POST['submit'])){
    $a = $_POST['jenisPelanggaran'];
    $b = $_POST['poin'];
    $sql = "INSERT INTO pelanggaran VALUES ('','$a','$b')";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'dashboard2.php';
        </script>";
    }else{
        header('Location: savecreate2.php?status=failed');
    }

   
}
?>
 