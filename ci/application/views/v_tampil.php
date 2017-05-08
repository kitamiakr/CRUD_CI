<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter </title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter </h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No id</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($mahasiswa as $u){ 
		?>
		<tr>
			<td><?php echo $u->no_induk ?></td>
		 	<td><?php echo $u->nama ?></td>
		 	<td><?php echo $u->alamat ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->no_induk,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->no_induk,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>

