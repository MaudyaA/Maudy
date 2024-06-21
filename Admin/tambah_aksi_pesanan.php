<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$ID_Pesanan = $_POST['ID_Pesanan'];
$Tgl_Pesanan = $_POST['Tgl_Pesanan'];
$ID_Pelanggan = $_POST['ID_Pelanggan'];
 
// menginput data ke database
mysqli_query($koneksi, " INSERT INTO pesanan values('$ID_Pesanan','$Tgl_Pesanan','$ID_Pelanggan')");
 
// mengalihkan halaman kembali ke index.php
header("location:index3.php");
 
?>