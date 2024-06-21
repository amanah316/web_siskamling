<?php 
include 'koneksi.php';
$id_jadwal = $_POST['id_jadwal'];
$Nama_warga = $_POST['Nama_warga'];
$Kehadiran = $_POST['Kehadiran'];


mysqli_query($koneksi,"insert into daftar_hadir values('$id_jadwal','$Nama_warga','$Kehadiran')");
 
header("location:detail_jadawal.php");
?>