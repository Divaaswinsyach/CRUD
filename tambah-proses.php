<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];

mysqli_query($koneksi, "insert into mahasiswa values('','$nama','$nim')");
header("location:index.php");
?>