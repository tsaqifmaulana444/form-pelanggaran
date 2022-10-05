<?php
include 'conn.php';
include 'function.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['namaSiswa'];
    $kelas = $_POST['kelas'];
    $NISN = $_POST['nisn'];
    $telat = $_POST['menitKeterlambatan'];
    $guruBk = $_POST['guruBk'];
    $alasan = $_POST['alasanKeterlambatan'];

    $sql = "INSERT INTO keterlambatan VALUES ('','$nama','$kelas','$NISN','$telat','$guruBk','$alasan',1)";
    $query = mysqli_query($conn,$sql);

    $result = mysqli_query($conn, "SELECT * FROM profil WHERE id = '$id'");
    $row = mysqli_fetch_array($result);
    if($query){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index2.php?id=$row[0]';
        </script>";
    }else{
        header('Location: savecreate.php?status=failed');
    }

   
}
?>
 