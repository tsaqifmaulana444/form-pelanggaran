<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Sidebar Menu</title>

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
    border-radius:15px;
}

.content th{
    background-color: #0275d8;
    color: white;
    height: 30px;
    font-family: 'Roboto', sans-serif;
}

td {
    font-size: 13px;
    left: 30px;
}
    </style> 
     <!--css devi  -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Starbhak Services</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Log in</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- body devi -->
     <!-- <input type="checkbox" id="check">
        <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
        </label>

    <div class="sidebar">
        <header>Starbhak Services</header>
    <ul>
        <li><a href="index.php"><i class="fas fa-qrcode"></i>Home</a></li>
        <li><a href="formtelat.php"><i class="fas fa-sliders-h"></i>Form Keterlambatan</a></li>
        <li><a href=""><i class="far fa-envelope"></i>Daftar Pelanggaran</a></li>
    </ul>
    </div> 
    <section></section> -->

    <!-- content devi -->
        <!-- <div class="content">
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
        </div> -->

        <table class="table table-striped" style="margin-top:10%; width:81%; margin-left:9.5%; ">
  <thead>
    <tr class="table-secondary">
      <th scope="col">No</th>
      <th scope="col">Nama Pelanggaran</th>
      <th scope="col">Point</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

 <!-- Footer-->
    <footer class="py-5 bg-dark " style="margin-top:10%;">
        <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; SMK Taruna Bhakti 2022</p></div>
     </footer>
</body>
</html>