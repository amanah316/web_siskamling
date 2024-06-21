<!DOCTYPE html>
<html>
<head>
	
	<title>DATA SISWA XI PPLG A</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
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
</head>
<body>
 
	<Center><h2>EDIT DATA WARGA</h2></center>
	<br/>
	<a href="jadwal.php">KEMBALI</a>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$id = $_GET['id_jadwal'];
	$data = mysqli_query($koneksi,"select * from jadwal WHERE id_jadwal='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_jadwal.php">
			<table>
				<tr>			
					<td>NIK</td>
					<td>
						<input type="text" name="nik" value="<?php echo $d['nik']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>

				<tr>
					<td>ID JADWAL</td>
					<td><input type="text" name="id_jadwal" value="<?php echo $d['id_jadwal']; ?>"></td>
				</tr>
                <tr>
					<td>Tanggal Bertugas</td>
					<td><input type="text" name="tanggal_bertugas" value="<?php echo $d['tanggal_bertugas']; ?>"></td>
				</tr>
				<tr>
					<td>Minggu</td>
					<td><input type="text" name="Minggu" value="<?php echo $d['Minggu']; ?>"></td>
				</tr>
				<tr>
					<td>Shift</td>
					<td><input type="text" name="Shift" value="<?php echo $d['Shift']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>