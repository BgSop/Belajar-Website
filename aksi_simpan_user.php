<?php
	include "koneksi.php";
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$nohp = $_POST['nohp'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	
	mysql_query("insert into tbl_user values('','$nama_depan','$nama_belakang','$nohp','$pekerjaan','$alamat')");
	echo "<script>alert('Data Berhasil Di Simpan');
			window.location='data_user.php';	
	</script>";
?>