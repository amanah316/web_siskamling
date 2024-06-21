<?php 
include 'koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$no_rumah = $_POST['no_rumah'];

mysqli_query($koneksi,"insert into warga values('$nik','$nama','$no_telepon','$no_rumah')");
 
header("location:index.php");
?>