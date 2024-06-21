<!DOCTYPE html>
<html>
<body>
 
	<center>
 
		<h2>DATA LAPORAN PEMBAYARAN</h2>
		
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>NIK</th>
			<th>NAMA </th>
			<th>ID JADWAL</th>
			<th>TANGGAL BERTUGAS</th>
			<th>MINGGU</th>
            <th>SHIFT</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from jadwal");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nik']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['id_jadwal']; ?></td>
			<td><?php echo $data['tanggal_bertugas']; ?></td>
			<td><?php echo $data['Minggu']; ?></td>
            <td><?php echo $data['Shift']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>