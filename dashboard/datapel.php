<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylebar.css">
    <title>Sidebar Menu</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@500&display=swap');
*{
    padding: 0;
    margin: 0;
    list-style: none;
    text-decoration: none;
}
body {
    font-family: 'Roboto', sans-serif;
}
.sidebar {
    position: fixed;
    left: 0px;
    width: 250px;
    height: 100%;
    background: #256D85;
    transition: all .5s ease;
}
.sidebar header {
    font-size: 20px;
    color: white;
    line-height: 70px;
    text-align: center;
    background: #06283D;
    user-select: none;
    font-family: 'Pacifico', cursive;
}
.sidebar ul a{
    display: block;
    height: 100%;
    width: 100%;
    line-height: 65px;
    font-size: 18px;
    color: white;
    padding-left: 40px;
    box-sizing: border-box;
    border-bottom: 1px solid #5F6F94;
    border-top: 1px solid rgba(255,255,255,.1);
    transition: .4s;
}
ul li:hover a{
    padding-left: 50px;
}
.sidebar ul a i{
    margin-right: 16px;
}
#check{
    display: none;
}
label #btn,label #cancel{
    position: absolute;
    background: #990000;
    border-radius: 3px;
    cursor: pointer;
}
label #btn{
    left: 250px;
    top: 25px;
    font-size: 35px;
    color: white;
    padding: 6px 12px;
    opacity: 0;
    pointer-events: none;
    transition: all .5s;
}
label #cancel{
    z-index: 1111;
    left: 195px;
    top: 17px;
    font-size: 30px;
    color: #D2DAFF;
    padding: 4px 9px;
    transition: all .5s ease;
}
#check:checked ~ .sidebar{
    left: -250px;
}
#check:checked ~ label #btn{
    left: 40px;
    opacity: 1;
    pointer-events: auto;
}
#check:checked ~ label #cancel{
    left: -195px;
}
#check:checked ~ section{
    margin-left: 0px;
}

.content {
    position: relative;
    width: 50%;
    top: 100px;
    left: 330px;
}

.content table{
    border-collapse: collapse;
    font-size: 12pt;
    border: 1px solid #5F6F94;
    left: 500px;
    top: 400px;
    width: 100%;
}

.content th{
    background-color: #06283D;
    color: white;
    height: 30px;
    font-family: 'Roboto', sans-serif;
}

td {
    font-size: 13px;
    left: 30px;
}
    </style>
</head>


<body>
    <input type="checkbox" id="check">
        <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
        </label>

    <div class="sidebar">
        <header>Starbhak Services</header>
    <ul>
        <li><a href="#"><i class="fas fa-qrcode"></i>Home</a></li>
        <li><a href="#"><i class="fas fa-sliders-h"></i>Form Keterlambatan</a></li>
        <li><a href="#"><i class="far fa-envelope"></i>Daftar Pelanggaran</a></li>
    </ul>
    </div>
    <section></section>

        <div class="content">
            <table border="1" cellspacing="0">
                <tr>
                    <th>No.</th>
                    <th>Nama Pelanggaran</th>
                    <th>Point</th>
                </tr>
                <tr>
                    <td>001</td>
                    <td>Rizki A.</td>
                    <td>Tidur dikelas / 50</td>
                </tr>
        </div>
</body>
</html>