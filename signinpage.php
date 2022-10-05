<?php 
session_start();

if(isset($_SESSION["login"])){
    header("Location: dashboard.php");
    exit;
}

require 'function.php';
require 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbhak Services - Admin Sign In</title>

    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Quicksand', sans-serif;
        }
        .judul1{
            position: relative;
            top: 130px;
            left: 330px; 

        }
        .garis{
            border: 0.1px solid black;
            width: 125px;  
            position: absolute; 
        }
        .heading{
            position: relative;
            top: 180px;
            left: 235px; 
        }
     
        input{
            width: 300px;
            height: 40px;
            border-radius: 15px;
            align-items: center;
            padding-left:  10px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.51);
            border-color: transparent;
            background-color: #D9D9D9;
        }
        h5{
            margin-top: 10px;
        }
        h1{
            position: absolute;
            top: 100px;
            left: 400px;
        }
        .input-data{
            margin-top: 50px;
            margin-left: 200px;
            align-items: center;
            
        }
        .button{
            background-color: #434CE7;
            cursor: pointer;
            width: 100px;
            border-radius: 15px;
            height: 40px;
            border: none;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.51);
            border-color: transparent;
        }
        .background{
            height: 500px;
            width: 400px;
            background-color:rgb(201, 200, 200);
            margin-left: -5px;
            margin-top: -170px;
            border-radius: 15px;
        }
        table tr td{
            padding: 10px 5px 10px 5px;
        }
        #back{
            position: relative;
            top: 532px;
            left: 400px;
        }
    </style>
</head>
<body>
    <!-- image -->
    <div class="all">
       
        <h1 style="position: absolute; top:11%; left:33%;" >Sign Up</h1>
        <form action="signin.php" method="post">
            <table style="position: absolute; top:18%; left:33%;" >
                <tr>
                    <td>
                        <label for="name">Nama :</label>
                    </td>
                    <td>
                        <input type="text" name="nama" id="kode_permit" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="username">Usia :</label>
                    </td>
                    <td>
                        <input type="number" name="usia" id="username" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">NISN :</label>
                    </td>
                    <td>
                        <input type="number" name="NISN" id="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password2">Tanggal Lahir :</label>
                    </td>
                    <td>
                        <input type="date" name="ttl" id="password2">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password2">Kelas :</label>
                    </td>
                    <td>
                        <input type="text" name="kelas" id="password2">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gmail">Gmail :</label>
                        </td>
                    <td>
                        <input type="email" name="gmail" id="gmail">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gmail">Password :</label>
                        </td>
                    <td>
                        <input type="password" name="password" id="gmail">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gmail">Confirm Password :</label>
                        </td>
                    <td>
                        <input type="password" name="password2" id="gmail">
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="btn btn-primary" href="login.php" role="button">Back</a>
                    </td>
                    <td >
                        <button type="submit" class="btn btn-success" name="register" id="register" style="float:right;">Register</button>
                    </td>
                </tr>
            </table>
        </form>
       
    </div>
</body>
</html>























