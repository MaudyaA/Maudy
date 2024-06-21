<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan_Makanan</title><center><h2>TAMBAH DATA</h2></center>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg" style ="background-color :#9BABB8;color:#FFF;">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Pelanggan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index2.php">Menu</a>
        </li>
        <a class="nav-link" href="index3.php">Pesanan</a>
        </li>
        <a class="nav-link" href="index4.php"> Detail Pesanan</a>
  </div>
</nav>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        /* Styling untuk form */
        .form-container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
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
    <title>DATA PELANGGAN</title>
</head>
<body>
<li><a href="index.php">Kembali</a></li>

    <?php
include 'koneksi.php';

if (isset($_POST['Nama']) && isset($_POST['Nomor_HP']) && isset($_POST['ID'])) {
    $Nama = $_POST['Nama'];
    $Nomor_HP = $_POST['Nomor_HP'];	
    $ID = $_POST['ID'];

    $query = "INSERT INTO pelanggan (Nama,Nomor_HP,ID) VALUES ('$Nama','$Nomor_HP', '$ID')";

    if (mysqli_query($koneksi, $query)) {
        echo "Berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>

<div class="right">
            <div class="form-container">
                <h2>DATA PELANGGAN</h2>
                <form action="tambah_aksi_pelanggan.php" method="post">
                    <label for="Nama">Nama:</label>
                    <input type="text" id="Nama" name="Nama"><br>
                    <label for="Nomor_HP">Nomor_HP:</label> 
                    <input type="text" id="Nomor_HP" name="Nomor_HP"><br>                                    
                    <label for="ID">ID:</label>
                    <input type="text" id="ID" name="ID"><br>
					
                    <input type="submit" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>