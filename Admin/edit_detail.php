<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title><center><h2>EDIT DETAIL</h2></center>
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
        </li>
        
        </li>
  </div>
</nav>

<!DOCTYPE html>
<html>
<head>
	
	<title>Detail Pesanan</title>
</head>
<body>
 
	<br/>
	<a href="index4.php">KEMBALI</a>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$id = $_GET['ID_Detail'];
	$data = mysqli_query($koneksi,"select * from detail_pesanan WHERE ID_Detail='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi_detail.php">
			<table>
				<tr>			
					<td>ID Pesanan</td>
					<td>
						<input type="hidden" name="Pesanan_ID" value="<?php echo $d['Pesanan_ID']; ?>">
						<input type="text" name="Pesanan_ID" value="<?php echo $d['Pesanan_ID']; ?>">
					</td>
				</tr>
				<tr>
					<td>ID Detail</td>
					<td><input type="text" name="ID_Detail" value="<?php echo $d['ID_Detail']; ?>"></td>
				</tr>
                <tr>
					<td>ID Menu</td>
					<td><input type="text" name="ID_Menu" value="<?php echo $d['ID_Menu']; ?>"></td>
                <tr>
					<td>Nama_Menu</td>
					<td><input type="text" name="Nama_Menu" value="<?php echo $d['Nama_Menu']; ?>"></td>
                <tr>
					<td>Jumlah</td>
					<td><input type="text" name="Jumlah" value="<?php echo $d['Jumlah']; ?>"></td>

				<tr>
					<td>Harga Menu</td>
					<td><input type="text" name="Harga_Menu" value="<?php echo $d['Harga_Menu']; ?>"></td>
				</tr>
                <tr>
					<td>Total Bayar</td>
					<td><input type="text" name="Total_Bayar" value="<?php echo $d['Total_Bayar']; ?>"></td>
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