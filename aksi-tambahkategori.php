<?php  
	require_once("auth.php"); 

	include "koneksi.php";

	$nama = $_POST['nama'];
	$deskripsi = $_POST['deskripsi'];


	if($_POST['submit']=="Submit"){

		$query = mysqli_query($connect,"INSERT INTO kategori VALUES('','$nama','$deskripsi')");

		if ($query) {
			header('location: kategori.php');
		}
		else{
		echo "gagal";
		}
	}
?>
