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
    
    $sql = "UPDATE keterlambatan SET id='', namaSiswa='$nama', kelas='$kelas', NISN='$NISN',menitKeterlambatan='$telat', guruBk='$guruBk', keterangan='$alasan' WHERE id='$id'";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>
        alert('data berhasil diubah');
        document.location.href = 'dashboard.php';
        </script>";
    }else{
        header('Location: editform.php?status=failed');
    }
}
?>
