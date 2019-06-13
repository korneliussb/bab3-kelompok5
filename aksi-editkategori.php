<?php  

	require_once("auth.php"); 

	include "koneksi.php";

	$id_kategori = $_GET['id_kategori'];
	$nama = $_POST['nama'];
	$deskripsi = $_POST['deskripsi'];
	
	if($_POST['submit']=="Submit"){

		$query = mysqli_query($connect,"UPDATE kategori SET nama_kategori='$nama', deskripsi='$deskripsi' where id_kategori = $id_kategori ");

		if ($query) {
			header('location: kategori.php');
		}
		else{
		echo "gagal";
		}
	}
?>
