<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image.png" href="assets/img/favico.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/330deea0aa.js" crossorigin="anonymous"></script>

    <title>Kebun Cakra Makmur</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#section1">Kebun Cakra Makmur</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('user')?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('user/about')?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('user/tampil')?>">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('user/contact')?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" 
                    href="<?= site_url('user/chart')?>"><i class="fas fa-shopping-cart"></i></a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="row" id="section1">
        <div class="col-lg-12 mb-5">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                  </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="10000">
                    <img src="assets/img/s1.JPG" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display-4">BELANJA MUDAH BERSAMA <br> <span class="font-weight-bold">KEBUN CAKRA MAKMUR</span></h1>
                        <a class="btn btn-light btn-lg" role="button" href="#section2">LANJUTKAN</a>
                    </div>
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="assets/img/s2.JPG" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="assets/img/s3.JPG" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="assets/img/s4.JPG" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="assets/img/s5.JPG" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="assets/img/s6.JPG" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container" id="section2">
      <div class="row">
        <div class="col-md-4 mb-5">
          <div class="card">
            <img class="card-img-top" src="assets/img/cabai.jpeg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Cabai</h5>
              <p class="card-text">Cabai segar dipanen dari hasil perkebunan dimana kualitas sayur terbaik yang akan kami berikan</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <div class="card">
            <img class="card-img-top" src="assets/img/kol.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Kol</h5>
              <p class="card-text">Kol segar dipanen dari hasil perkebunan dimana kualitas sayur terbaik yang akan kami berikan</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <div class="card">
            <img class="card-img-top" src="assets/img/kentang.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Kentang</h5>
              <p class="card-text">Kentang segar dipanen dari hasil perkebunan dimana kualitas sayur terbaik yang akan kami berikan</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
        <a href="<?= site_url('user/tampil')?>" class="btn btn-primary">SELENGKAPNYA</a>
      </div>
    </div>
    <br><br>

    <footer class="page-footer font-small teal pt-4">
        <!-- Footer Text -->
        <div class="container">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
              <li class="list-inline-item">
                <a class="btn-floating btn-ig mx-1" href="https://www.instagram.com/kebun_cakramakmur/">
                    <i class="fa-2x fab fa-instagram text-light"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-wa mx-1" href="https://www.kebuncakramakmur.com/">
                    <i class="fa-2x fab fa-whatsapp text-light"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-wa mx-1" href="<?= site_url('login')?>">
                  <i class="fa-2x far fa-user text-light"></i>
                </a>
              </li>
            </ul>
            <!-- Social buttons -->
        
          </div>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-light">© 2020 Copyright:
          <a href="https://www.kebuncakramakmur.com/"> kebuncakramakmur.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
