<?php
require_once("auth.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Kategori</title>
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
		.table th, .table td{
			text-align: center;
		}
		.daftar h3{
			margin-top: 50px;
			margin-bottom: 25px;
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
			<div class="col-md-2 menu">
			  <ul class="nav nav-pills nav-stacked">
			    <li><a href="sudahmasuk.php">Home</a></li>
			    <li><a href="buku.php">Daftar Buku</a></li>
			    <li><a href="kategori.php">Daftar Kategori</a></li>
			    <li><a class="btn btn-default" href="logout.php">Logout</a></li>
			  </ul>
			</div>
			<div class="col-md-10 daftar">
				<a href="tambah-kategori.php" class="btn btn-success pull-right">Tambah Kategori Buku </a>
				<h3 align="center">Kategori Buku</h3>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th width="200">Nama</th>
							<th>Deskripsi</th>						
							<th width="200">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							include "koneksi.php";
							$i = 1;
							$query = "SELECT * FROM kategori";
							$result = mysqli_query($connect,$query) or die (mysqli_error($connect));
							while($row = mysqli_fetch_array($result)){
						?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $row['nama_kategori']; ?></td>
							<td><?php echo $row['deskripsi'] ?></td>
							<td>
								<a href="edit-kategori.php?id_kategori=<?php echo $row['id_kategori']; ?>" class="btn btn-warning btn-sm">Edit</a>
								<a href="hapus-kategori.php?id_kategori=<?php echo $row['id_kategori']; ?>" class="btn btn-danger btn-sm">Hapus</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
