<?php 
session_start();

require 'conn.php';
// belom bener di membawa id
// $id = $_GET['id'];
// $sql = "SELECT id FROM profil WHERE id = '$id'";
// $query = mysqli_query($conn,$sql);
// $value = mysqli_fetch_assoc($query);

// if(isset($_SESSION["login"])){
//     header("Location: index2.php?id=$value");
//     exit;
// }

if(isset($_POST["login"])){
    $nama = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM guru WHERE nama = '$nama'");

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_array($result);
        if (password_verify($password, $row["password"])){
            // set session
            $_SESSION["login"] = true;
            header("Location: index2.php?id=$row[0]");
            exit;
        }

        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbhak Services - Admin Login </title>
    <style>
        <?php include 'dropdown.css';?>
    </style>
    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
        <form action="" method="post">
            <div class="login">
            <div class="judul1">
                <h3>Starbhak Services</h3>
                <div class="garis"></div>
            </div>
           
            <div class="heading">
                <h4>Welcome!</h4>
                <h1>Login For Teacher</h1>
                <h5 style="margin-top: 5px;">Or Login as <a href="../login.php">Student</a> <br></h5>
            </div>
            <?php if(isset($error)) :?>
                <h2 style="color:red; position:absolute; top:77%; left:44%;">wrong password!</h2>
            <?php endif;?>
            <div class="input-data">
                <td><input type="text" name="username" placeholder="Name" id="username" autocomplete="off"></td>
                <br>
                <br>
                <td><input type="password" name="password" placeholder="Password" id="username"></td>
                <br>
                <div class="background"></div>    
                <td><a href="index2.php" ><button class="button" type="submit" name="login"> Login</button style="cursor: pointer;"></a></td>
            </div>
            </div>
        </form>
<script src="script.js"></script>
</body>
</html>