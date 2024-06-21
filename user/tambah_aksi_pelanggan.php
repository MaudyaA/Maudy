<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Nama = $_POST['Nama'];
$Nomor_HP = $_POST['Nomor_HP'];
$ID = $_POST['ID'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into pelanggan values('$Nama','$Nomor_HP','$ID')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>