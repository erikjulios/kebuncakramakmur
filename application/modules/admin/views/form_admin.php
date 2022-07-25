<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/330deea0aa.js" crossorigin="anonymous"></script>
    
    <title>Tambah admin</title>
  </head>
  <body>
  	<div class="row">
        <div class="col-lg-12 d-flex justify-content-center display-4 font-weight-bold judul">
            ADD ADMIN
        </div>
    </div>
    <br>
	<div class="container">
		<form action="<?= site_url('admin/add_admin') ?>" method="post">
			<div class="form-group">
				<label >Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username">
			</div>
			<div class="form-group">
				<label >password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-success">Simpan</button>
		</form>
	</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>