<?php  

if(isset($_POST['submit'])){
	require_once("auth.php"); 

		include "koneksi.php";

		$id_buku = $_GET['id_buku'];
		$judul = $_POST['judul'];
		$harga = $_POST['harga'];
		$penerbit = $_POST['penerbit'];
		$tgl_terbit = $_POST['tgl_terbit'];
		$kategori = $_POST['kategori'];

		if($_POST['submit']=="Submit"){

			$query = mysqli_query($connect,"UPDATE buku SET judul_buku='$judul', harga_buku='$harga', penerbit='$penerbit', tanggal_terbit='$tgl_terbit', kategori=$kategori where id_buku = $id_buku ");

			if ($query) {
				header('location: buku.php');
			}
			else{
			echo "gagal";
			}
		}
}
else {
	header("Location: sudahmasuk.php");
}
?>
