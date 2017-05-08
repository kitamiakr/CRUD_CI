<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter</h1>
	<table border="1">
		<tr>
			<th>No id</th>
			<th>Nama</th>
			<th>Alamat</th>
			
		</tr>
		<?php foreach($mahasiswa as $u){ ?>
		<tr>
			<td><?php echo $u->$no_induk ?></td>	
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			
		</tr>
		<?php } ?>
	</table>
</body>
</html>