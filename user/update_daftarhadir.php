<?php 
 
include 'koneksi.php';
$id_jadwal = $_POST['id_jadwal'];
$Nama_warga = $_POST['Nama_warga'];
$Kehadiran = $_POST['Kehadiran'];

 
mysqli_query($koneksi,"UPDATE daftar_hadir SET Nama_warga='$Nama_warga',  Kehadiran='$Kehadiran'  WHERE  id_jadwal='$id_jadwal'");
 
header("location:detail_jadawal.php?pesan=update");
 
?>