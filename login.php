<?php
	include "koneksi.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$login = mysql_query("select * from tbl_user where username='$username' and password='$password'");
	$cek = mysql_num_rows($login);
	
	echo $cek;
	echo "<script>alert('Anda Berhasil Login');
			window.location='data_user.php';	
	</script>";
?>