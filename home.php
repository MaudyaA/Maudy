<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg" style ="background-color :#9BABB8;color:#FFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">BERANDA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <a class="navbar-brand" href="login.php">Login Admin</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <a class="navbar-brand" href="login_user.php">Login User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Pelanggan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index2.php">Menu</a>
        </li>
          <a class="nav-link" href="index3.php">Pesanan</a>
        </li>
      <div>    
    </div>
  </div>
</nav>

	<center><h2> </h2></center>
  <div class="row mb-2">
  <style>
    div {
      display: flex;
      justify-content: center;
      align-items: center;
      flex wrap: wrap:
    }
    div img {
      width: 400px;
      height: 300px;
      border: 2px solid #ff3d0036;
      border radius: 13px;
      box-shadow: 4px 7px 7px 0px #00000042;
      cursor: pointer;
      margin: 10px;
      transition: 400ms;
    }
    div img:hover {
      filter: grayscale(1);
      transform: scale(1.03);
    }
    </style>
      <div>
        <img src="gambar/ikan_goreng.jpeg" alt="">
        <img src="gambar/ikan_acar.jpeg" alt="">
        <img src="gambar/telur_balado.jpeg" alt="">
</div>	
</style>
      <div>
        <img src="gambar/ayam_goreng.jpeg" alt="">
        <img src="gambar/ayam_geprek.jpeg" alt="">
        <img src="gambar/ayam_bakar.jpeg" alt="">
</div>

	<br/>
	</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>