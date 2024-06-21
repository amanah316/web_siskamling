<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
  }

  $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>WEB SITI AMANAH FAUZIAH</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>
<nav class="navbar navbar-expand-lg"style ="background-color :#c0a0c3 ;color:#FFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">JADWAL SISKAMLING</a>
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
		<li class="nav-item">
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 <br>
	<center><h2> Data Warga</h2></center>
<br/>
	<br/>
	<center><a href="tambah.php"class="btn btn-secondary">+ TAMBAH DATA WARGA</a><center>
	<br/>
	<br/>
	<table border="1"class="table bordered">
		<tr>
			<th style= "background-color: #dfcae1; color:#fff;">NO</th>
			<th style= "background-color: #dfcae1; color:#fff;">NIK</th>
			<th style= "background-color: #dfcae1; color:#fff;">NAMA</th>
			<th style= "background-color: #dfcae1; color:#fff;">NO.TELEPON</th>
            <th style= "background-color: #dfcae1; color:#fff;">NO.RUMAH</th>
			<th style= "background-color: #dfcae1; color:#fff;">OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from warga ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['no_telepon']; ?></td>
                <td><?php echo $d['no_rumah']; ?></td>
				<td>
				<a href="edit.php?nik=<?php echo $d['nik']; ?>">UBAH</a>
				<a href="hapus.php?hapus=<?php echo $d['nik'] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>