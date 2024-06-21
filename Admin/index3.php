<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan_Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg" style ="background-color :#9BABB8;color:#FFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="../home.php">LOGOUT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
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
        <a class="nav-link" href="index4.php">Detail Pesanan</a>
        </li>
        
</div>
  </div>
</nav>
 
	<center><h2>DATA PESANAN</h2></center>
	<br/>
	<a href="tambah_pesanan.php"> <button class="btn btn-success "> + TAMBAH</button></a>
	<br/>
  <form method="get">
			<label>PILIH TANGGAL</label>
			<input type="date" name="Tgl_Pesanan">
			<input type="submit" value="FILTER">
		</form>
	<br/>
	<table border="1" class="table table-striped">
	<tr>
			<th style= "background-color: #D7C0AE; color:#fff;">NO</th>
			<th style= "background-color: #D7C0AE; color:#fff;">ID Pesanan</th>
			<th style= "background-color: #D7C0AE; color:#fff;">Tanggal Pesanan</th>
			<th style= "background-color: #D7C0AE; color:#fff;">ID Pelanggan</th>
			<th style= "background-color: #D7C0AE; color:#fff;">OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		?>
		<?php 
			$no = 1;
 
			if(isset($_GET['Tgl_Pesanan'])){
				$tgl = $_GET['Tgl_Pesanan'];
				$sql = mysqli_query($koneksi,"select * from pesanan where Tgl_Pesanan='$tgl'");
			}else{
				$sql = mysqli_query($koneksi,"select * from pesanan");
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['ID_Pesanan']; ?></td>
				<td><?php echo $data['Tgl_Pesanan']; ?></td>
				<td><?php echo $data['ID_Pelanggan']; ?></td>
			           
				<td>
					<a href="edit_pesanan.php?ID_Pesanan=<?php echo $d['ID_Pesanan']; ?>"> <button class="btn btn-primary btn-sm"> <i class="fa fa-trash"></i> Edit </button>
					<a href="hapus_pesanan.php?ID_Pesanan=<?php echo $d['ID_Pesanan']; ?>" onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Data Ini?')">        
          <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus </button>
       </a>
  </tr>
  
  <?php
  }
  ?>
 </table>
 
</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>