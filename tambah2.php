<!DOCTYPE html>
<html lang="en">
<head>
<style>
        /* Styling untuk form */
        .form-container {
            width: 300px;
            margin: 0 auto;
            padding: 60px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
        }

        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Styling untuk tata letak */
        .container {
            display: flex;
            justify-content: space-between;
        }

        .container .left {
            width: 70%; /* Lebar tabel */
        }

        .container .right {
            width: 30%; /* Lebar formulir */
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>JADWAL </title>
</head>
<body>
<li><a href="jadwal.php">kembali</a></li>
    <?php
include 'koneksi.php';

if (isset($_POST['nik']) && isset($_POST['nama']) && isset($_POST['id_jadwal']) && isset($_POST['tanggal_bertugas']) && isset($_POST['Minggu']) && isset($_POST['Shift'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
	$id_jadwal= $_POST['id_jadwal'];
    $tanggal_bertugas = $_POST['tanggal_bertugas'];
    $Minggu = $_POST['Minggu'];
    $Shift = $_POST['Shift'];
	 
    $query = "INSERT INTO jadwal (nik,nama,id_jadwal,tanggal_bertugas,Minggu,Shift) VALUES ('$nik', '$nama', '$id_jadwal', '$tanggal_bertugas', '$Minggu', '$Shift' )";

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
<div class="right">
            <div class="form-container">
                <h2>JADWAL </h2>
                <form action="tambah2.php" method="post">
                    <label for="nik">NIk:</label>
                    
                    <td><select name="nik">
				

  				<option value="">-----</option>
 			<?php
  				include 'koneksi.php';
  				$query = mysqli_query($koneksi, "SELECT nik, nama FROM warga") or die (mysqli_error($koneksi));
  
  				while($data = mysqli_fetch_array($query)){
    			echo "<option value=$data[nik]>, $data[nama]>$data[nik]</option>";
  				}                          
  				?>
 </select></td>
                   
					<label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama"><br>
                    <label for="id_jadwal">ID.JADWAL:</label>
                    <input type="text" id="id_jadwal" name="id_jadwal"><br>
                    <label for="tanggal_bertugas">Tanggal Bertugas:</label>
                    <input type="date" id="tanggal_bertugas" name="tanggal_bertugas"><br>
					<label for="Minggu">Minggu:</label>
                    <input type="text" id="Minggu" name="Minggu"><br>
                    <label for="Shift">Shift:</label>
                    <input type="text" id="Shift" name="Shift"><br>

                    <input type="submit" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</body>
</html>