<?php
include'view.php';
$data = mysqli_query($conn,"SELECT * FROM kuliah");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<table border="1">
		<tr>
		<th>Nama</th>
		<th>Nim</th>
		<th>Tanggal Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Prodi</th>
		<th>Fakultas</th>
		<th>Asal</th>
		<th>Moto</th>
		<th>Aksi</th>
		</tr>
		<?php
		while ($y=mysqli_fetch_assoc($data)) :?>
		<tr>
			<td><?php echo $y["nama"]; ?></td>
			<td><?php echo $y["nim"]; ?></td>
			<td><?php echo $y["tgl"]; ?></td>
			<td><?php echo $y["jk"]; ?></td>
			<td><?php echo $y["prodi"]; ?></td>
			<td><?php echo $y["fakultas"]; ?></td>
			<td><?php echo $y["alamat"]; ?></td>
			<td><?php echo $y["moto"]; ?></td>
			<td> <a href="hapus.php?id=<?php echo $y['id']; ?>">Hapus</a></td>
		</tr>
		<?php endwhile; ?>
	</table>
	<a href="input.php"> Tambah Lagi Lah Biar Enak</a>
	<form>
		
		<input type="search" name="cari"><input type="submit" name="kirim" value="cari">
	</form>
</body>
</html>