<?php
include('koneksi.php');
 
$ID_Menu = $_GET['ID_Menu'];
 
$query = mysqli_query($koneksi, "DELETE FROM menu WHERE ID_Menu='$ID_Menu'");
$koneksi->query($delete_query);
header("Location: index2.php");
 
?>