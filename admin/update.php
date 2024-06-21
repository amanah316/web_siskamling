<?php 
 
include 'koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$no_rumah = $_POST['no_rumah'];
 
mysqli_query($koneksi,"UPDATE warga SET nik='$nik', nama='$nama', no_telepon='$no_telepon', no_rumah='$no_rumah' WHERE  nik='$nik'");
 
header("location:index.php?pesan=update");
 
?>