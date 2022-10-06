<?php
include 'conn.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $a = $_POST['namaGuru'];
    $b = $_POST['usia'];
    $c = $_POST['ttl'];
    $d = $_POST['nip'];
    $f = $_POST['gmail'];
    
    $sql = "UPDATE guru SET nama = '$a', usia='$b', tanggalLahir='$c',NIP='$d',gmail='$f' WHERE id='$id'";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>
        alert('data berhasil diubah');
        document.location.href = 'dashboard4.php';
        </script>";
    }else{
        header('Location: editform3.php?status=failed');
    }
}
?>
