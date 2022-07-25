<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image.png" href="assets/img/favico.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/330deea0aa.js" crossorigin="anonymous"></script>
    
    <title>Product</title>
  </head>
  <body>
  	<div class="row">
        <div class="col-lg-12 d-flex justify-content-center display-4 font-weight-bold judul">
          DAFTAR PRODUK
        </div>
    </div>
    <br>
	<table class="table">
		<thead class="thead-dark">
			<tr>
			<th scope="col">ID</th>
			<th scope="col">Nama</th>
			<th scope="col">Harga</th>
			<th scope="col">Gambar</th>
			<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($sayur_1 as $key) { ?>
			<tr>
				<th scope="row"><?= $key->id ?></th>
				<td><?= $key->nama ?></td>
				<td>Rp.<?= $key->harga ?>/Kg</td>
				<td><img src="../assets/img/<?= $key->gambar ?> " width="150"></td>
				<td>
					<button type="button" class="btn btn-primary" onclick="location.href='<?= site_url('admin/edit/'.$key->id.'') ?>'"><i class="fa fa-pencil"></i> Edit</button>
					<button type="button" class="btn btn-danger" onclick="location.href='<?= site_url('admin/hapus/'.$key->id.'') ?>'"><i class="fa fa-trash"></i> Delete</button>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>

	<button type="button" class="btn btn-success" onclick="location.href='<?= site_url('admin/create') ?>'"><i class="fa fa-plus"></i> Tambah Produk</button>
	<button type="button" class="btn btn-secondary" onclick="location.href='<?= site_url('admin/form_admin')?>'"><i class="fa fa-user-plus"></i> Tambah Admin</button>
	<button type="button" class="btn btn-primary" onclick="location.href='<?= site_url('admin/tampilpesanan')?>'"><i class="fa fa-shopping-cart"></i> Pesanan</button>
	<button type="button" class="btn btn-danger" onclick="location.href='<?= site_url('login/logout')?>'"><i class="fa fa-sign-out"></i> Logout</button>
	<br><br><br>

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