<?php
include('koneksi.php');
 
$ID_Pesanan = $_GET['ID_Pesanan'];
 
$query = mysqli_query($koneksi, "DELETE FROM pesanan WHERE ID_Pesanan='$ID_Pesanan'");
$koneksi->query($delete_query);
header("Location: index3.php");
?>