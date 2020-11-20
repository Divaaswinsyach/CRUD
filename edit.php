<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body style="background-color: skyblue">
	<center>
		<h2><font color="purple">DATA MAHASISWA PRODI SISTEM INFORMASI</font></h2>
		<br>
		<h3>EDIT DATA</h3>

		<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
		while ($d = mysqli_fetch_array($data)) {
		?>
		<form method="post" action="update.php">
			<table>
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"><input type="submit" value="KEMBALI"><a href="index.php"></a></td>
				</tr>
			</table>
		</form>
		<?php
		}
		?>
	</center>
</body>
</html>