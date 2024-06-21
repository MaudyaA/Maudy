<?php
include('koneksi.php');
 
$ID = $_GET['ID'];
 
$query = mysqli_query($koneksi, "DELETE FROM pelanggan WHERE ID='$ID'");
$koneksi->query($delete_query);
header("Location: index.php");
?>