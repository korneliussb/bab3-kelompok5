<?php

require_once("auth.php"); 

	include "koneksi.php";
	$id_buku = $_GET['id_buku'];

	$query = mysqli_query($connect,"DELETE FROM buku WHERE id_buku=$id_buku");

	if ($query) {
			header('location: buku.php');
		}
	else{
		echo "gagal";
	}
?>
