<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image.png" href="../assets/img/favico.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/330deea0aa.js" crossorigin="anonymous"></script>
    
    <title>Cart</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="<?= site_url('user')?>">Kebun Cakra Makmur</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('user')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('user/about')?>">About</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('user/tampil')?>">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('user/contact')?>">Contact</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="<?= site_url('user/chart')?>"><i class="fas fa-shopping-cart"> <span class="sr-only">(current)</i></a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <br><br><br>

    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center display-4 font-weight-bold judul">
          KERANJANG BELANJA
        </div>
    </div>
    <br>

    <div class="container">
        <!--Section: Block Content-->
        <section>
        <!--Grid row-->
        <div class="row">

        <!--Grid column-->
        <div class="col-lg-8">

            <!-- Card -->
            <?php foreach ($chart as $key) { ?>
            <div class="mb-3">
            <div class="pt-4 wish-list">

                <div class="row mb-4">
                <div class="col-md-5 col-lg-3 col-xl-3">
                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                    <img class="img-fluid w-100" src="<?= base_url('assets/img/'.$key->gambar);?>" alt="Gambar">
                    <a href="#!">
                        <div class="mask">
                        <div class="mask rgba-black-slight"></div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-md-7 col-lg-9 col-xl-9">
                    <div>
                    <div class="d-flex justify-content-between">
                        <div>
                        <h5><?= $key->nama ?></h5>
                        <p class="mb-3 text-muted text-uppercase small">Jumlah: <?= $key->jumlah ?> Kg</p>


                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                        <button id="edit_<?= $key->kode ?>" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal" data-id="<?= $key->kode ?>"><i class="fa fa-pencil-alt mr-1"></i>Edit</button>
                        <a href="<?= site_url('user/hapus/'.$key->kode.'') ?>" type="button" class="btn btn-sm btn-danger"><i
                            class="fas fa-trash-alt mr-1"></i>Hapus</a>
                        </div>
                        <p class="mb-0"><span><strong id="summary"><?= "Rp.". $data =  $key->harga * $key->jumlah?></strong></span></p class="mb-0">
                    </div>
                    </div>
                </div>
                </div>
                <hr class="mb-4">
                

            </div>
            </div>
            <!-- Card -->
            <?php } ?>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4">

            <!-- Card -->
            <div class="mb-3">
            <div class="pt-4">

                <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0 mb-3">
                    <strong>Total</strong>
                    <span><strong><?php 
                    $total2 = 0;
                    foreach ($chart as $key2) {
                        $total = $key2->jumlah * $key2->harga;
                        $total2 = $total2 + $total;
                    }
                    echo "Rp.".$total2;

                    ?></strong></span>
                </li>
                </ul>
                <a class="btn btn-primary btn-block" id="checkout" data-toggle="modal" data-target="#modal2">Checkout</a>
            </div>
            </div>
            <!-- Card -->
        </div>
        <!--Grid column-->

        </div>
        <!-- Grid row -->

        </section>
        <!--Section: Block Content-->
        
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>

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
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
  
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="formedit"></div>  
                </div>
            </div>
        </div>
    </div>
    <?php foreach ($chart as $key) { ?>
    <script type="text/javascript">
        $(document).ready(function() {
             $('#edit_<?= $key->kode ?>').on('click', function () {
                var Id = $(this).data('id');

                $.ajax({
                    url: "<?= site_url('user/edit_jumlah') ?>",
                    type: "POST",
                    data : {
                        Id : Id
                    },
                    success: function(data) {
                        $('#modaledit').modal('show');
                        $('#formedit').html(data);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error');
                    }
                });
            });

             //checkout button
             
             $('#checkout').on('click', function () {

                $.ajax({
                    url: "<?= site_url('user/checkout') ?>",
                    type: "POST",
                    success: function(data) {
                        $('#modal2').modal('show');
                        $('#cekout').html(data);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error');
                    }
                });
            });
            
        });
    </script>
    <?php } ?>

     <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Checkout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="cekout"></div>  
                </div>
            </div>
        </div>
    </div>
</html>