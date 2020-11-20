<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body style="background-color: skyblue;">
	<center>
		<h2><font color="Purple">DATA MAHASISWA PRODI SISTEM INFORMASI</font></h2>
		<br/>
		<a href="tambah.php">Tambah Data</a>
		<br/>
		<br/>
		<table border="1">
			<tr>
				<th>NO</th>
				<th>Nama</th>
				<th>NIM</th>
				<th>OPSI</th>
			</tr>
			<?php
			include 'Koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from mahasiswa");
			while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php
		}
		?>
		</table>
	</center>
</body>
</html>