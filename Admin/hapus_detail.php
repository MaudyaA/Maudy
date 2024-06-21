<?php
include('koneksi.php');
 
$ID_Detail = $_GET['ID_Detail'];
 
$query = mysqli_query($koneksi, "DELETE FROM detail_pesanan WHERE ID_Detail='$ID_Detail'");
$koneksi->query($delete_query);
header("Location: index4.php");
 
?>