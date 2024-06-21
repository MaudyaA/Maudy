<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title><center><h2>EDIT PESANAN</h2></center>
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
		</li>
        <a class="nav-link" href="index4.php"> Detail Pesanan</a>
  </div>
</nav>
<!DOCTYPE html>
<html>
<head>
	
	<title>DATA PESANAN</title>
</head>
<body>
 
	<br/>
	<a href="index3.php">KEMBALI</a>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$id = $_GET['ID_Pesanan'];
	$data = mysqli_query($koneksi,"select * from pesanan WHERE ID_Pesanan='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi_pesanan.php">
			<table>
				<tr>			
					<td></td>
					<td>
						<input type="hidden" name="ID_Pesanan" value="<?php echo $d['ID_Pesanan']; ?>">
						
					</td>
				</tr>
				<tr>
					<td>Tanggal_Pesanan</td>
					<td><input type="date" name="Tgl_Pesanan" value="<?php echo $d['Tgl_Pesanan']; ?>"></td>
				</tr>

				<tr>
					<td>ID_Pelanggan</td>
					<td><input type="text" name="ID_Pelanggan" value="<?php echo $d['ID_Pelanggan']; ?>"></td>
				</tr>
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