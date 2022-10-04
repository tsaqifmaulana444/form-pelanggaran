<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Starbhak Services - Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            body{
                overflow-x: hidden;
            }
        </style>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Starbhak Services</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Log in</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-white py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <form action="savecreate.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaSiswa">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Kelas</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="kelas">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">NISN</label>
                                <input type="number" class="form-control" id="exampleInputPassword1" name="nisn">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jam Keterlambatan</label>
                                <input type="time" class="form-control" id="exampleInputPassword1" name="menitKeterlambatan">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Guru BK Yang Menangani</label>
                            <select id="guruBk" name="guruBk" style="margin-left: 10px;">
                                <option value="Bapak Abdul">Bapak Abdul</option>
                                <option value="Ibu Ria">Ibu Ria</option>
                                <option value="Ibu Bakti">Ibu Bakti</option>
                                <option value="Bapak Santo">Bapak Santo</option>
                            </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Alasan Keterlambatan</label><br>
                                <textarea name="alasanKeterlambatan" id="alasanKeterlambatan" cols="30" rows="6"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-success" name="submit">Tambahkan</button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
    <footer class="py-5 bg-dark">
        <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; SMK Taruna Bhakti 2022</p></div>
    </footer>
    <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>