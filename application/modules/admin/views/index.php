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

    <title>Admin</title>
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
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('admin')?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('admin/tampil')?>">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('login/logout')?>">Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="row" id="section1">
        <div class="col-lg-12">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="10000">
                    <img src="assets/img/s1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display-4">WELCOME <br> <span class="font-weight-bold">Admin</span></h1>
                       
                    </div>
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="assets/img/s2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/s3.jpg" class="d-block w-100" alt="...">
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
  </body>
</html>
