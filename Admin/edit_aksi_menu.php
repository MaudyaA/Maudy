<?php 
 
include 'koneksi.php';
$ID_Menu= $_POST['ID_Menu'];
$Nama_Menu = $_POST['Nama_Menu'];
$Harga = $_POST['Harga'];

mysqli_query($koneksi,"UPDATE menu SET Nama_Menu='$Nama_Menu', Harga='$Harga' WHERE  ID_Menu='$ID_Menu'");
 
header("location:index2.php?pesan=update");
 
?>