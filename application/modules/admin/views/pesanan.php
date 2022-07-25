<!DOCTYPE html>
<html>
<head>
	<title>Pesanan</title>
</head>
<body>
	<table border="3">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>No.Hp</th>
			<th>Tanggal</th>
			<th>Pesanan</th>
			<th>Total Harga</th>
		</tr>
		<?php foreach ($dipesan as $key) {?>
		<tr>
				<td><?= $key->id_order?></td>
				<td><?= $key->nama?></td>
				<td><?= $key->no_hp?></td>
				<td><?= $key->tanggal?></td>
				<td><?=	$key->pesanan?></td>
				<td><?= $key->totalharga?></td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>