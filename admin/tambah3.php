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
<li><a href="detail_jadawal.php">kembali</a></li>
    <?php
include 'koneksi.php';

if (isset($_POST['id_jadwal']) && isset($_POST['Nama_warga']) && isset($_POST['Kehadiran'])) {
    $id_jadwal = $_POST['id_jadwal'];
    $Nama_warga = $_POST['Nama_warga'];
	$Kehadiran= $_POST['Kehadiran'];
    $query = "INSERT INTO daftar_hadir (id_jadwal,Nama_warga,Kehadiran) VALUES ('$id_jadwal', '$Nama_warga', '$Kehadiran')";

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
                <form action="tambah3.php" method="post">
                    <label for="id_jadwal">id_jadwal:</label>
                    
                    <td><select name="id_jadwal">
				

  				<option value="">-----</option>
 			<?php
  				include 'koneksi.php';
  				$query = mysqli_query($koneksi, "SELECT id_jadwal, nama FROM vjadwal") or die (mysqli_error($koneksi));
  
  				while($data = mysqli_fetch_array($query)){
    			echo "<option value=$data[id_jadwal]>, $data[nama]>$data[id_jadwal]</option>";
  				}                          
  				?>
 </select></td>
                   
					 
                    <label for="Nama_warga">Nama warga:</label>
                    <input type="text" id="Nama_warga" name="Nama_warga"><br>
                    <label for="Kehadiran">Kehadiran:</label>
                    <input type="text" id="Kehadiran" name="Kehadiran"><br>
					 
                    <input type="submit" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</body>
</html>