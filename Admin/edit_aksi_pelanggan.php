<?php 
 
include 'koneksi.php';
$Nama= $_POST['Nama'];
$Nomor_HP = $_POST['Nomor_HP'];
$ID = $_POST['ID'];

mysqli_query($koneksi,"UPDATE pelanggan SET Nama='$Nama', Nomor_HP='$Nomor_HP'  WHERE  ID='$ID'");
 
header("location:index.php?pesan=update");
 
?>