<?php 
 
include 'koneksi.php';
$ID_Pesanan= $_POST['ID_Pesanan'];
$Tgl_Pesanan = $_POST['Tgl_Pesanan'];
$ID_Pelanggan = $_POST['ID_Pelanggan'];

mysqli_query($koneksi,"UPDATE pesanan SET Tgl_Pesanan='$Tgl_Pesanan', ID_Pelanggan='$ID_Pelanggan' WHERE  ID_Pesanan='$ID_Pesanan'");
 
header("location:index3.php?pesan=update");
 
?>