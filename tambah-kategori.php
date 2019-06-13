<?php
require_once("auth.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Kategori Buku</title>
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
		.daftar h3{
			margin-bottom: 25px;
		}
		.form{
			margin-bottom: 20px;
		}
		.content {
			margin-bottom: 30px;
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
			<div class="col-md-3 menu">
			  <ul class="nav nav-pills nav-stacked">
			    <li><a href="sudahmasuk.php">Home</a></li>
			    <li><a href="buku.php">Daftar Buku</a></li>
			    <li><a href="kategori.php">Daftar Kategori</a></li>
			    <li><a class="btn btn-default" href="logout.php">Logout</a></li>
			  </ul>
			</div>
			<div class="col-md-9 daftar">
				<h3 align="center">Form Tambah Kategori Buku</h3>
				<div class="col-md-8 col-md-offset-2 form">
					<form action="aksi-tambahkategori.php" method="POST">
					  	<div class="form-group">
					    	<label>Nama Kategori</label>
					    	<input type="text" class="form-control" name="nama" required>
					  	</div>
					  	<div class="form-group">
					    	<label>Deskripsi</label>
					    	<textarea name="deskripsi" class="form-control" style="resize: none; height: 200px;" required></textarea>
					  	</div>
					  	<input type="submit" value="Submit" name="submit" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
