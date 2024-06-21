<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Pesanan_ID = $_POST['Pesanan_ID'];
$ID_Detail = $_POST['ID_Detail'];
$ID_Menu = $_POST['ID_Menu'];
$Nama_Menu = $_POST['Nama_Menu'];
$Jumlah = $_POST['Jumlah'];
$Harga_Menu = $_POST['Harga_Menu'];
$Total_Bayar = $_POST['Total_Bayar'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into detail_pesanan values('$Pesanan_ID','$ID_Detail','$ID_Menu','$Nama_Menu','$Jumlah','$Harga_Menu','$Total_Bayar')");
 
// mengalihkan halaman kembali ke index.php
header("location:index4.php");
 
?>