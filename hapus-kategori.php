<?php 

require_once("auth.php"); 

	include "koneksi.php";
	$id_kategori = $_GET['id_kategori'];

	$query = mysqli_query($connect,"DELETE FROM kategori WHERE id_kategori=$id_kategori");

	if ($query) {
			header('location: kategori.php');
		}
	else{
		echo "gagal";
	}
?>
