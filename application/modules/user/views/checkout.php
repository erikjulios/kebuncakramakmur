<!doctype html>
<html lang="en">
  <head>
        <title>Checkout</title>
  </head>
  <body>
    <?php 
        $total2 = 0;
        foreach ($cart as $key1) {
            $total = $key1->jumlah * $key1->harga;
            $total2 = $total2 + $total;
        }
    ?>  
    <div class="container">
        <div class="row">
                <div class="col-lg-6">
                    <form method="post" id="cekout" action="<?= site_url('user/addorder') ?>">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap anda" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor HP</label>
                        <input type="text" class="form-control" placeholder="No telepon anda" name="nohp" required>
                    </div>  
                <div class="form-group">
                        <label  for="">Pesanan :</label><br>
                        <textarea name="pesanan" class="form-control" style="resize: none" rows="10" readonly>
                        <?php 
                            foreach ($cart as $key) {
                                $jumlah = $key->jumlah * $key->harga;
                                echo"\n*".$key->nama." : ".$key->jumlah."Kg (".$jumlah.")";
                            }
                        ?>
                        </textarea>
                    </div> 
                    <div class="form-group">
                        <label style="font-size: " for="">Total Harga</label>
                        <input type="number" class="form-control"  readonly name="total" value="<?= $total2?>">
                    </div> 
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Pesan</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
  </body>


</html>
<script type="text/javascript">
    $( "#cekout" ).submit(function( event ) {
        $('#modal2').modal('hide')
    });
</script>

