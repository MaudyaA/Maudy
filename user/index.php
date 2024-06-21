<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan_Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
  session_start();

  if (!isset($_SESSION['Username'])) {
    header("Location: login.php");
    exit();
  }

  $Username = $_SESSION['Username'];
?>
<nav class="navbar navbar-expand-lg" style ="background-color :#9BABB8;color:#FFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="../home.php">LOGOUT</a>  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </li>
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
        </ul>
          <form class="d-flex" role="search">

        <!-- Button -->
        <input class="form-control me-2" type="search" name="cari" placeholder="Cari..." aria-label="Search" value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
        <button class="btn btn-outline-success" class="spinner-border spinner-border-sm" type="submit">Cari</button>

       <?php if(isset($_GET['cari'])): ?>
        <a href="index.php" class="btn btn-danger ml-2">X</a>
       <?php endif; ?>
       </form>
    </div>
  </div>
</nav>
 
	<center><h2>DATA PELANGGAN</h2></center>
	<br/>
	<div class="nav-item">
      <a href="tambah_pelanggan.php"><button class="btn btn-success "> + TAMBAH</button></a>
       </div>
	<br/>
	<table border="1" class="table table-striped">
	<tr>
			<th style= "background-color: #D7C0AE; color:#fff;">NO</th>
			<th style= "background-color: #D7C0AE; color:#fff;">Nama</th>
			<th style= "background-color: #D7C0AE; color:#fff;">Nomor HP</th>
			<th style= "background-color: #D7C0AE; color:#fff;">ID</th>
			<th style= "background-color: #D7C0AE; color:#fff;">OPSI</th>
		</tr>
		<?php
    include 'koneksi.php';
      // Proses pencarian
      if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $data = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id LIKE '%$cari%' OR Nama LIKE '%$cari%' OR ID LIKE '%$cari%'");
      } else {
        $data = mysqli_query($koneksi, "SELECT * FROM pelanggan");
      }
		$no = 1;
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['Nomor_HP']; ?></td>
				<td><?php echo $d['ID']; ?></td>
				<td>
					<a href="edit_pelanggan.php?ID=<?php echo $d['ID']; ?>"> <button class="btn btn-primary btn-sm"> <i class="fa fa-trash"></i> Edit </button>
					<a href="hapus_pelanggan.php?ID=<?php echo $d['ID']; ?>"  onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Data Ini?')">
          <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus </button>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>