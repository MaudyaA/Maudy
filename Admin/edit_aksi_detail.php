<?php 
 
include 'koneksi.php';
$Pesanan_ID= $_POST['Pesanan_ID'];
$ID_Detail = $_POST['ID_Detail'];
$ID_Menu= $_POST['ID_Menu'];
$Nama_Menu = $_POST['Nama_Menu'];
$Jumlah = $_POST['Jumlah'];
$Harga_Menu = $_POST['Harga_Menu'];
$Total_Bayar = $_POST['Total_Bayar'];

mysqli_query($koneksi,"UPDATE detail_pesanan SET Pesanan_ID='$Pesanan_ID', ID_Menu='$ID_Menu', Nama_Menu='$Nama_Menu', Harga_Menu='$Harga_Menu', Jumlah='$Jumlah', Total_Bayar='$Total_Bayar'  WHERE  ID_Detail='$ID_Detail'");
 
header("location:index4.php?pesan=update");
 
?>