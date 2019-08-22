<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Kelompok3</title>

    <style type="text/css">
    #footer{
        position: static;
        bottom: 0px;
        left: 547px;
    }
    </style>

  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
      <a class="navbar-brand" href="index.php"><p class="h4">Beranda</p></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="tugas_pertama.php"><p class="h5">Tugas Pertama</p></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tugas_kedua.php"><p class="h5">Tugas Kedua</p></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><p class="h5">Tugas Ketiga</p></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
      </div>
    </nav>
    <div class="container">
      <center>
        <p>turun<br>turun<br></p>
        <img src="img/gif/hi.gif">
        </center>
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
        <?php
        $nama_satu ="Bisma Komara D";
        $umur_satu = 16;
        $tinggi_satu = 171;
        $hobi_satu = "Rebahan";

        $nama_dua ="Siti Nur Aliyah";
        $umur_dua = 15;
        $tinggi_dua = 148;
        $hobi_dua = "Menyanyi";

        $nama_tiga ="Lisnawati";
        $umur_tiga = 16;
        $tinggi_tiga = 160;
        $hobi_tiga = "Renang";

        $rata_rata = ($tinggi_satu + $tinggi_dua + $tinggi_tiga) / 3;
        ?>
            <center>
              <p class="lead">
                Kami dari Kelompok 3<br>dan ini Website sederhana kami<br>
                Anggota kelompok :<br><b><?php echo$nama_satu?></b><br><b><?php echo$nama_dua?></b><br><b><?php echo$nama_tiga?></b>
              </p>
            </center>
          </div>
        </div>
          <div id="container">
            <div id="footer">
              <blockquote class="blockquote">
              <center>
                <p><cite title="Source Title">©2019 Designed by Kelompok 3</cite></p>
              </center>
              </blockquote>
            </div>
          </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>