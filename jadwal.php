<!DOCTYPE html>
<html>
<head>
	<title>WEB SITI AMANAH FAUZIAH</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg"style ="background-color :#84b6f4;color:#FFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
		<a class="nav-link active" aria-current="page" href="login.php">Login Admin</a>
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
		<div>
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
 
	<center><h2> JADWAL SISKAMLING</h2></center>
	<br/>
	 
	<br/>
	<br/>
	<table border="1"class="table bordered">
		<tr>
		<th style= "background-color:  #b2dafa; color:#fff;">NO</th>
		<th style= "background-color:  #b2dafa; color:#fff;">NIK</th>
		<th style= "background-color:  #b2dafa; color:#fff;">NAMA</th>
		<th style= "background-color:  #b2dafa; color:#fff;">ID JADWAL</th>
		<th style= "background-color:  #b2dafa; color:#fff;">TANGGAL BERTUGAS</th>
		
		<th style= "background-color:  #b2dafa; color:#fff;">SHIFT</th>
		 
			 
		</tr>
		 
		 <?php
		 include 'koneksi.php';
			 // Proses pencarian
		 if(isset($_GET['cari'])){
		   $cari = $_GET['cari'];
		   $data = mysqli_query($koneksi, "SELECT * FROM vjadwal WHERE id_jadwal LIKE '%$cari%' OR nik LIKE '%$cari%' OR nama LIKE '%$cari%' OR tanggal_bertugas LIKE '%$cari%' OR Shift LIKE '%$cari%'");
		 } else {
		   $data = mysqli_query($koneksi, "SELECT * FROM vjadwal");
		 }
		$no = 1;
	 
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nik']; ?></td>
                <td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['id_jadwal']; ?></td>
                <td><?php echo $d['tanggal_bertugas']; ?></td>
                <td><?php echo $d['Shift']; ?></td>
				<td>
			 
			</tr>
			<?php 
		}
		?>
	</table> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>