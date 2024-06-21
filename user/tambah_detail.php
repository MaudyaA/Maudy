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
    <title>DETAIL PESANAN</title>
</head>
<body>
<li><a href="index4.php">Kembali</a></li>

    <?php
include 'koneksi.php';

if (isset($_POST['Pesanan_ID']) && isset($_POST['ID_Detail']) && isset($_POST['ID_Menu'])&& isset($_POST['Nama_Menu']) && isset($_POST['Jumlah']) && isset($_POST['Harga_Menu'])&& isset($_POST['Total_Bayar'])) {
    $Pesanan_ID = $_POST['Pesanan_ID'];
    $ID_Detail = $_POST['ID_Detail'];	
    $ID_Menu = $_POST['ID_Menu'];
    $Nama_Menu = $_POST['Nama_Menu'];
    $Jumlah = $_POST['Jumlah'];	
    $Harga = $_POST['Harga_Menu'];
    $Total_Bayar = $_POST['Total_Bayar'];

    $query = "INSERT INTO detail_pesanan (Pesanan_ID,ID_Detail,ID_Menu,Nama_Menu,Jumlah,Harga_Menu,Total_Bayar) VALUES ('$Pesanan_ID','$ID_Detail','$ID_Menu','$Nama_Menu','$Jumlah','$Harga_Menu', '$Total_Bayar')";

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
                <h2>DATA MENU</h2>
                <form action="tambah_aksi_detail.php" method="post">
                <label for="Pesanan_ID">ID Pesanan:</label>
                    <input type="text" id="Pesanan_ID" name="Pesanan_ID"><br>
                    <label for="ID_Detail">ID Detail:</label> 
                    <input type="text" id="ID_Detail" name="ID_Detail"><br>                                    
                    <label for="ID_Menu">ID Menu:</label>
                    <input type="text" id="ID_Menu" name="ID_Menu"><br>					
                    <label for="Nama_Menu">Nama Menu:</label>
                    <input type="text" id="Nama_Menu" name="Nama_Menu"><br>
                    <label for="Jumlah">Jumlah:</label> 
                    <input type="text" id="Jumlah" name="Jumlah"><br>                                    
                    <label for="Harga_Menu">Harga:</label>
                    <input type="text" id="Harga_Menu" name="Harga_Menu"><br>
                    <label for="Total_Bayar">Total Bayar:</label>
                    <input type="text" id="Total_Bayar" name="Total_Bayar"><br>
					
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