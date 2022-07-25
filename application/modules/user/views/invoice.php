<!DOCTYPE html>
<html>
<head>
	<title>invoice</title>
</head>
<body>
	
	<h2>Invoice</h2>

	Nama : <?= $nama ?> <br>
	No hp : <?= $nohp?><br>
	Pesanan : <br>
	<?php foreach ($order as $key) {
		$jumlah = $key->jumlah * $key->harga;
		echo "*".$key->nama." : ".$key->jumlah."(Rp.".$jumlah.")<br>";
	} ?>
	Total harga : <?= $totalharga?>
		
	*Harap Screenshoot halaman ini untuk konfirmasi ke penjual melalui kontak

</body>
</html>