<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_jadwal= $_GET['id_jadwal'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from daftar_hadir where id_jadwal='$id_jadwal'");
 
// mengalihkan halaman kembali ke index.php
header("location:detail_jadawal.php");
 
?>