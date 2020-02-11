<?php
	$host = mysql_connect("localhost","root","");
	if($host){
		echo "Koneksi Server Berhasil <br>";
	}else{
		echo "Koneksi Server Gagal";
	}
	$db = mysql_select_db("db_belajar");
	if($db){
		echo "Koneksi Database Berhasil <br>";
	}else{
		echo "Koneksi Database Gagal";
	}
?>