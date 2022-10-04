<?php
include 'conn.php';
include 'function.php';

if(isset($_POST['submit'])){
    $nama = $_POST['namaSiswa'];
    $kelas = $_POST['kelas'];
    $NISN = $_POST['nisn'];
    $telat = $_POST['menitKeterlambatan'];
    $guruBk = $_POST['guruBk'];
    $alasan = $_POST['alasanKeterlambatan'];
    $sql = "INSERT INTO keterlambatan VALUES ('','','$nama','$kelas','$NISN','$telat','$guruBk','$alasan')";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'dashboard.php';
        </script>";
    }else{
        header('Location: savecreate.php?status=failed');
    }

   
}
?>
 