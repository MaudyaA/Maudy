<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title><center><h2>EDIT DATA</h2></center>
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
<html>
<head>
	
	<title>DATA PELANGGAN</title>
</head>
<body>
 
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$id = $_GET['ID'];
	$data = mysqli_query($koneksi,"select * from pelanggan WHERE ID='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi_pelanggan.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="Nama" value="<?php echo $d['Nama']; ?>">
						<input type="text" name="Nama" value="<?php echo $d['Nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nomor_HP</td>
					<td><input type="text" name="Nomor_HP" value="<?php echo $d['Nomor_HP']; ?>"></td>
				</tr>

				<tr>
					<td>ID_Pelanggan</td>
					<td><input type="text" name="ID" value="<?php echo $d['ID']; ?>"></td>
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