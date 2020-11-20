<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];

mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim' where id='$id'");

header("location: index.php");

?>