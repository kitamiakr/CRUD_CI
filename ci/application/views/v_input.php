<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<CENTER>
		<form action="<?php echo base_url(). 'crud/tambah_aksi';  ?>" method="post">
			<table style="margin:20px auto;">
				<tr>
					<td>No Induk</td>
					<td><input type="text" name="no_induk"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="date" name="tgl"></input></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Tambah"></td>
				</tr>
				
			</table>
			
		</form>
	</CENTER>

</body>
</html>