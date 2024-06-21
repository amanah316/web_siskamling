<?php 
include 'koneksi.php';
$nik_warga = $_POST['nik_warga'];
$nama = $_POST[' nama'];
$id_jadwal = $_POST['id_jadwal'];
$tanggal_bertugas = $_POST[' tanggal_bertugas'];
$Minggu = $_POST['Minggu'];
$Shift = $_POST['Shift'];



mysqli_query($koneksi,"INSERT into jadwal (nik_warga,nama,id_jadwal,tanggal_bertugas,Minggu,Shift) values('$nik_warga','$nama','$id_jadwal','$tanggal_bertugas','$Minggu','$Shift')");
 
header("location:jadwal.php");
?>