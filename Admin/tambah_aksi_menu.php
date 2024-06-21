<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$ID_Menu = $_POST['ID_Menu'];
$Nama_Menu = $_POST['Nama_Menu'];
$Harga = $_POST['Harga'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into menu values('$ID_Menu','$Nama_Menu','$Harga')");
 
// mengalihkan halaman kembali ke index.php
header("location:index2.php");
 
?>