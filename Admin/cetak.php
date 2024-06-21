<!DOCTYPE html>
<html>
<body>
 
	<center>
 
		<h2>PESANAN</h2>
		
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>			
			<th>ID Pesanan</th>
			<th>ID Detail</th>
			<th>ID Menu</th>
			<th>Nama Menu</th>
			<th>Jumlah</th>
			<th>Harga Menu</th>
			<th>Total Bayar</th>
		
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from detail_pesanan");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['Pesanan_ID']; ?></td>
			<td><?php echo $data['ID_Detail']; ?></td>
			<td><?php echo $data['ID_Menu']; ?></td>
			<td><?php echo $data['Nama_Menu']; ?></td>
			<td><?php echo $data['Jumlah']; ?></td>
			<td><?php echo $data['Harga_Menu']; ?></td>
			<td><?php echo $data['Total_Bayar']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>