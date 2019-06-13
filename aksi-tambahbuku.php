<?php  
	require_once("auth.php"); 

	include "koneksi.php";

	$judul = $_POST['judul'];
	$harga = $_POST['harga'];
	$penerbit = $_POST['penerbit'];
	$tgl_terbit = $_POST['tgl_terbit'];
	$kategori = $_POST['kategori'];

	if($_POST['submit']=="Submit"){

		$query = mysqli_query($connect,"INSERT INTO buku VALUES('','$judul','$harga','$penerbit','$tgl_terbit',$kategori)");

		if ($query) {
			header('location: buku.php');
		}
		else{
		echo "gagal";
		}
	}
?>
