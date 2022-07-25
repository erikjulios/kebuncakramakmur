<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <img src="<?= base_url('assets/img/'.$sayur->gambar); ?>" width="300">
        </div>
        <div class="col-lg-6">
            <form id="form_edit" action="<?= site_url('user/proses_edit_jumlah/'.$cart->kode.'') ?>" 
                method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Barang</label>
                    <input type="text" class="form-control" readonly value="<?= $sayur->nama ?>">
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" class="form-control" readonly value="<?= $sayur->harga ?>">
                </div>
                <div class="form-group">
                    <label for="">Jumlah/Kg</label>
                    <input type="number" name="jumlah" value="<?= $cart->jumlah ?>" class="form-control">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $( "#form_edit" ).submit(function( event ) {
        $('#modal').modal('hide')
    });
</script>