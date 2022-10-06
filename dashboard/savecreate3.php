<?php
include 'conn.php';
include 'function.php';

if(isset($_POST['submit'])){
    $a = $_POST['namaGuru'];
    $b = $_POST['usia'];
    $c = $_POST['ttl'];
    $d = $_POST['nip'];
    $e = $_POST['password'];
    $f = $_POST['gmail'];
    $g = password_hash($e, PASSWORD_DEFAULT);

    $sql = "INSERT INTO guru VALUES ('','$a','$b','$c','$d','$g','$f')";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'dashboard4.php';
        </script>";
    }else{
        header('Location: savecreate3.php?status=failed');
    }

   
}
?>
 