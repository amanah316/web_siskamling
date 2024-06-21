
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg"style ="background-color : #c0a0c3;color:#FFF;"  >
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
<style>
        /* Styling untuk form */
        .form-container {
            width: 500px;
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
     <title>DATA WARGA </title>
</head>
<body>
<li><a href="index.php">kembali</a></li>
    <?php
include 'koneksi.php';

if (isset($_POST['nik']) && isset($_POST['nama']) && isset($_POST['no_telepon']) && isset($_POST['no_rumah'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
	$no_telepon= $_POST['no_telepon'];
    $no_rumah = $_POST['no_rumah'];
	 
    $query = "INSERT INTO warga (nik,nama,no_telepon,no_rumah) VALUES ('$nik', '$nama', '$no_telepon', '$no_rumah')";

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
                <h2>DATA WARGA</h2>
                <form action="tambah.php" method="post">
                    <label for="nik">NIk:</label>
                    <input type="text" id="nik" name="nik"><br>
                    
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama"><br>
					<label for="no_telepon">NO.TELEPON:</label>
                    <input type="text" id="no_telepon" name="no_telepon"><br>
                    <label for="no_rumah">NO.RUMAH:</label>
                    <input type="text" id="no_rumah" name="no_rumah"><br>
                    <input type="submit" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</body>
</html>