<html>
<head>
	<title>Cara Design Table Dengan CSS</title>	
	<link rel="stylesheet" type="text/css" href="css/tabel.css">
</head>
<?php
	include "koneksi.php";
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data Berhasil Di Simpan";
		}else if($pesan == "update"){
			echo "Data Berhasil Di Update";
		}else if($pesan == "hapus"){
			echo "Data Berhasil Di Hapus";
		}
	}
?>
<body>
	<h1 align="center">Menampilkan Data</h1>
	<h4 align="center">Daftar Nama User</h4>
	<div><a href="input_user.php">Tambah Data User</a></div>
	<br>
	<table class="table1" align="center">
		<tr>
			<th>No</th>
			<th>Nama Depan</th>
			<th>Nama Belakang</th>
			<th>No HP</th>
			<th>Pekerjaan</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php
			$query = mysql_query("select * from tbl_user");
			$nomor = 1;
			while($data = mysql_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $nomor++;?></td>
			<td><?php echo $data['nama_depan'];?></td>
			<td><?php echo $data['nama_belakang'];?></td>
			<td><?php echo $data['nohp'];?></td>
			<td><?php echo $data['pekerjaan'];?></td>
			<td><?php echo $data['alamat'];?></td>
			<td><a href="edit.php?id=<?php echo $data['id_user']; ?>">EDIT</a> | <a href="hapus.php?id=<?php echo $data['id_user']; ?>">HAPUS</a></td>
		</tr>
			<?php } ?>
	</table>	
</body>
</html>