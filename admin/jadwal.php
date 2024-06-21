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
<form class="d-flex" role="search">
	

<!-- Button -->
    <input class="form-control me-2" type="search" name="cari" placeholder="Cari..." aria-label="Search" value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
    <button class="btn btn-outline-success" class="spinner-border spinner-border-sm" type="submit">Cari</button>

    <?php if(isset($_GET['cari'])): ?>
      <a href="index.php" class="btn btn-danger ml-2">X</a>
    <?php endif; ?>
  </form>
</div>
	
      </ul>
    </div>
  </div>
</nav>

 <br>
	<center><h2> JADWAL SISKAMLING</h2></center>
	<br/>
	<br/>
	<center><a href="tambah2.php"class= "btn btn-secondary">+ TAMBAH  JADWAL</a><center>
	<br/>
	<a href="cetak.php"class= "btn btn-secondary" target="_blank">CETAK</a>
	<br/>

	
	<form method="get">
			<label>PILIH TANGGAL</label>
			<input type="date" name="tanggal_bertugas">
			<input type="submit" value="FILTER">
		</form>

	<table border="1"class="table bordered">
		<tr>
		<th style= "background-color:  #dfcae1; color:#fff;">NO</th>
		<th style= "background-color:  #dfcae1; color:#fff;">NIK</th>
		<th style= "background-color:  #dfcae1; color:#fff;">NAMA</th>
		<th style= "background-color:  #dfcae1; color:#fff;">ID JADWAL</th>
		<th style= "background-color:  #dfcae1; color:#fff;">TANGGAL BERTUGAS</th>
	
		<th style= "background-color:  #dfcae1; color:#fff;">SHIFT</th>
		<th style= "background-color:  #dfcae1; color:#fff;">OPSI</th>
		</tr>

		<?php 
			$no = 1;
			include 'koneksi.php';
			if(isset($_GET['tanggal_bertugas'])){
				$tgl = $_GET['tanggal_bertugas'];
				$sql = mysqli_query($koneksi,"SELECT* from vjadwal where tanggal_bertugas='$tgl'");
			}else{
				$sql = mysqli_query($koneksi,"SELECT * from vjadwal");
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['nik_warga']; ?></td>
                <td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['id_jadwal']; ?></td>
                <td><?php echo $data['tanggal_bertugas']; ?></td>
                <td><?php echo $data['Shift']; ?></td>
				<td>
				<a href="edit_jadwal.php?id_jadwal=<?php echo $d['id_jadwal'];?>"type="button" class="btn btn-warning">UBAH</a>
					<a href="hapus_jadwal.php?id_jadwal=<?php echo $d['id_jadwal'] ?>"type="button" class="btn btn-danger" onclick="confirm('Apakah anda yakin untuk menghapus data ini?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>