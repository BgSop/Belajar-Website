<html>
	<head>
		<title>Edit Data User</title>
	</head>
	<body>
		<h3>Edit Data User</h3>
	<?php
		include "koneksi.php";
		$id = $_GET['id'];
		$edit = mysql_query("SELECT * FROM tbl_user WHERE id_user='$id'");
		while($data = mysql_fetch_array($edit)) {
	?>
	<form action="aksi_edit_user.php" method="POST">		
		<table>
			<tr>
				<td>Nama Depan</td>
				<td>
					<input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
					<input type="text" name="nama_depan" value="<?php echo $data['nama_depan']; ?>">
				</td>					
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td><input type="text" name="nama_belakang" value="<?php echo $data['nama_belakang']; ?>"></td>					
			</tr>
			<tr>
				<td>NO HP</td>
				<td><input type="text" name="nohp" value="<?php echo $data['nohp']; ?>"></td>					
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>"></td>					
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>					
			</tr>				
		</table>
	</form>
		<?php } ?>
	</body>
</html>