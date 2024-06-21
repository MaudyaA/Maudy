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
 
	<center><h2>DETAIL PESANAN</h2></center>
	<br/>
	<a href="tambah_detail.php"> <button class="btn btn-success "> + TAMBAH</button></a>
	<br/>
	<br/>
	<table border="1" class="table table-striped">
	<tr>
			<th style= "background-color: #D7C0AE; color:#fff;">NO</th>
			<th style= "background-color: #D7C0AE; color:#fff;">ID Pesanan</th>
			<th style= "background-color: #D7C0AE; color:#fff;">ID Detail</th>
			<th style= "background-color: #D7C0AE; color:#fff;">ID Menu</th>
            <th style= "background-color: #D7C0AE; color:#fff;">Nama Menu</th>
			<th style= "background-color: #D7C0AE; color:#fff;">Jumlah</th>
			<th style= "background-color: #D7C0AE; color:#fff;">Harga Menu</th>
            <th style= "background-color: #D7C0AE; color:#fff;">Total Bayar</th>
			<th style= "background-color: #D7C0AE; color:#fff;">OPSI</th>
		</tr>
		<?php
    include 'koneksi.php';
      // Proses pencarian  
      $data = mysqli_query($koneksi, "SELECT * FROM detail_pesanan");
			$no = 1;
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Pesanan_ID']; ?></td>
				<td><?php echo $d['ID_Detail']; ?></td>
        <td><?php echo $d['ID_Menu']; ?></td>
        <td><?php echo $d['Nama_Menu']; ?></td>
				<td><?php echo $d['Jumlah']; ?></td>
        <td><?php echo $d['Harga_Menu']; ?></td>
        <td><?php echo $d['Total_Bayar']; ?></td>           
             
             
				<td>
					<a href="edit_detail.php?ID_Detail=<?php echo $d['ID_Detail']; ?>"> <button class="btn btn-primary btn-sm"> <i class="fa fa-trash"></i> Edit </button>
					<a href="hapus_detail.php?ID_Detail=<?php echo $d['ID_Detail']; ?>" onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Data Ini?')">        
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