<?php
require_once("auth.php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Katalog Buku</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script> 
	<style>
		.menu {
			margin-left: -15px; 
			margin-right: 15px;
		}
		.daftar{
			border: 1px solid #e5e5e5; 
			border-radius: 5px; 
			padding: 5px;
		}
		.daftar a{
			margin-top: 2%;
		}
		.detail{
			padding: 10px 0px;
		}
		.nav{
			padding: 0px; 
			border: 1px solid #e5e5e5;
			border-radius: 5px;
		}
		.nav li{
			border-bottom: 1px solid #e5e5e5;
			border-radius: 5px;
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="jumbotron row">
			<h1>KATALOG BUKU</h1>
			<p>PRAKTIKUM SBD 2018</p>
		</div>
		<div class="row content">
			<div class="col-md-2 menu" style="">
			  <ul class="nav nav-pills nav-stacked" style="">
			    <li><a href="sudahmasuk.php">Home</a></li>
			    <li><a href="buku.php">Daftar Buku</a></li>
			    <li><a href="kategori.php">Daftar Kategori</a></li>
			    <li><a class="btn btn-default" href="logout.php">Logout</a></li>
			  </ul>
			</div>
			<div class="col-md-10 text-center daftar">
				<?php 
					require_once "koneksi.php";
					$sql = "SELECT * FROM buku limit 9";
					$query = mysqli_query($connect, $sql) or die (mysqli_error($connect));
					while($row = mysqli_fetch_assoc($query)){

				?>
				<div class="col-md-4 detail">
					<img src="assets/img/buku.png" alt="" height="200" width="200">
					<h5><b><?php echo $row['judul_buku']; ?></b></h5>
					<p><?php echo 'Rp '.$row['harga_buku']; ?></p>
					<a href="detail.php?id=<?= $row['id_buku'];?>" class="btn btn-info">LIHAT DETAIL</a>
				</div>
				<?php 
					}
				?>
			</div>
		</div>
	</div>
	
</body>
</html>
