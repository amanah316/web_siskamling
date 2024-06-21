<?php 
 
include 'koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$id_jadwal = $_POST['id_jadwal'];
$tanggal_bertugas = $_POST['tanggal_bertugas'];
$Minggu = $_POST['Minggu'];
$Shift = $_POST['Shift'];
 
 
mysqli_query($koneksi,"UPDATE jadwal SET nik = '$nik', nama='$nama', tanggal_bertugas ='$tanggal_bertugas', Minggu='$Minggu', Shift='$Shift' WHERE  id_jadwal='$id_jadwal'");
 
header("location:jadwal.php?pesan=update");
 
?>