<?php
include 'conn.php';

if(isset($_POST['submit'])){
    $a = $_POST['id'];
    $b = $_POST['jenis'];
    $c = $_POST['poin'];
    
    $sql = "UPDATE pelanggaran SET deskripsi ='$b', poin_pelanggaran='$c' WHERE id='$a'";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>
        alert('data berhasil diubah');
        document.location.href = 'dashboard2.php';
        </script>";
    }else{
        header('Location: editform2.php?status=failed');
    }
}
?>
