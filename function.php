<?php 
include 'conn.php';

function register($data){
    global $conn;

    $a = $data["nama"];
    $b = $data["usia"];
    $c = $data["NISN"];
    $d = $data["ttl"];
    $e = $data["kelas"];
    $f = $data["gmail"];
    $password = $data["password"];
    $password2 = $data["password2"];

    if($password !== $password2){
        header("Location: signinpage.php");
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO profil VALUES('','$a','$b','$c','$d','$e','$f','$password','','') ");

    return mysqli_affected_rows($conn);
}

?>