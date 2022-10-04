<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing page</title>
    <!-- link css -->
    <link rel="stylesheet" href="style.css">

    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: 'Quicksand', sans-serif;
    overflow-x: hidden;
}
.container{
    background: radial-gradient(circle at top left , #5012c4, #72FFFF);  
    width: 100%;
    height: 780px;
    padding-right:5% ;

}
.navbar{
    background-color: rgba(255, 255, 255, 0.256);
    width: 100%;
    height: 60px;
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
    display: flex;
    align-items: center;
    padding-left: 5%;
}
.nav-link{
    display: flex;
    width:400px;
    justify-content: space-between;
    position: absolute;
    right: 15%; 
}
.nav-link a{
    text-decoration: none;
    color: black;
    font-weight:600;
}
.nav-link a:hover{
    color: #0096FF;
}
img{
    width: 40px;
}
.user{
    display: flex;
    justify-content: space-between;
    position: relative;
    right: -63%; 
}

/* hero */

.hero{
    position: absolute;
    left: 30%;
    top: 300px;
    align-items: center;
}
.hero p{
    text-align: center;
    margin-bottom: 20px;
    font-weight:600;
    font-size: 30px;

}
.button1{
    width: 250px;
    height: 35px;
    border-radius: 10px;
    background-color: white;
    border: none;
}
.button2{
    width: 250px;
    height: 35px;
    border-radius: 10px;
    background-color: transparent;
    border: solid 1px black;
}

/* contact */
.contact{
    width: 100%;
    height: 250px;
    padding-right: 400px;
    background-color: grey;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-right: 20px;
    color: white;
}
.contact p{
    font-weight: 500;
}
.garis{
    width: 500px;
    height: 5px;
    border-bottom: 2px solid white;
    margin-bottom: 15px;
}
.contact button{
    width: 100px;
    height: 35px;
    font-size: 11px;
    border: 1px solid black;
}
.footer{
    width: 100%;
    height: 300px;
    background-color: #dfe6e9;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.footer p:first-child{
    font-size: 25px;
    font-weight: bold;
}
.footer p:nth-child(2){
    width: 700px;
    text-align: center;
    font-size: 14px;
    font-weight:500;
}
    </style>

    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- navbar -->
        <div class="navbar">
            <h2>Form Keterlambatan</h2>
            
            <div class="nav-link">
                <a href="http://">Home</a>
                <a href="http://">About</a>
                <a href="http://">Contact</a>
                <a href="http://">form keterlambatan</a>
            </div>
            <!-- icon user -->
            <div class="user">
                <a href="http://"><img src="toppng.com-circled-user-icon-user-pro-icon-2240x2240.png" alt=""></a>
            </div>
        </div>
            <!-- hero -->
            <div class="hero">
                <p>Lorem ipsum dolor sit amet.</p>
                <button class="button1">klik di sini</button>
                <button class="button2">klik di sini</button>
            </div>
    </div>
        <!-- contact -->
        <div class="contact">
            <p>Lorem ipsum dolor sit amet</p>
            <div class="garis"></div>
            <button>Contact Me</button>
        </div>
        <!-- footer -->
        <div class="footer">
            <p>jangan terlambat sekolah</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, dolor?</p>

            <div class="icon">
                <div><i class="fa-brands fa-instagram"></i></div>
            </div>
        </div>
</body>
</html>