<?php
	include	"koneksi.php";
	$idhapus = $_GET['id'];
	mysql_query("delete from tbl_user where id_user='$idhapus'");
	echo "<script>alert('Data Berhasil Di Hapus');
			window.location='data_user.php';	
	</script>";
?>