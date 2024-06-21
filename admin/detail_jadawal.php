<!DOCTYPE html>
<html>
<head>
	<title>WEB SITI AMANAH FAUZIAH</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg"style ="background-color : #c0a0c3;color:#FFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
     
        </li>
          <a class="nav-link active" aria-current="page" href="index.php">Data warga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jadwal.php">Jadwal siskamling</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="detail_jadawal.php">Daftar Hadir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 
<center><h2> Daftar Hadir</h2></center>
	<br/>
	<center><a href="tambah3.php"class= "btn btn-secondary">+ TAMBAH DATA </a><center>
	<br/>
	<br/>
	<table border="1"class="table bordered">
		<tr>
		<th style= "background-color:  #dfcae1; color:#fff;">NO</th>
		<th style= "background-color:  #dfcae1; color:#fff;">ID JADWAL</th>
		<th style= "background-color:  #dfcae1; color:#fff;">NAMA WARGA</th>
		<th style= "background-color:  #dfcae1; color:#fff;">KEHADIRAN</th>
		<th style= "background-color:  #dfcae1; color:#fff;">OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from daftar_hadir ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_jadwal']; ?></td>
				<td><?php echo $d['Nama_warga']; ?></td>
				<td><?php echo $d['Kehadiran']; ?></td>
				<td>
					<a href="edit_daftarhadir.php?id_jadwal=<?php echo $d['id_jadwal'] ?>"type="button" class="btn btn-warning">UBAH</a>
					<a href="hapus_hadir.php?id_jadwal=<?php echo $d['id_jadwal'] ?>"type="button" class="btn btn-danger" onclick="confirm('Apakah anda yakin untuk menghapus data ini?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>