<?php
	include "koneksi.php";
	$id_user = $_POST['id_user'];
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$nohp = $_POST['nohp'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
		mysql_query("UPDATE tbl_user SET nama_depan='$nama_depan',nama_belakang='$nama_belakang',nohp='$nohp',pekerjaan='$pekerjaan',alamat='$alamat' WHERE id_user='$id_user'");
		
		
		header("location:data_user.php?pesan=update");
?>