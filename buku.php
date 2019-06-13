<?php
require_once("auth.php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Buku</title>
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
		.nav{
			padding: 0px; 
			border: 1px solid #e5e5e5;
			border-radius: 5px;
		}
		.nav li{
			border-bottom: 1px solid #e5e5e5;
			border-radius: 5px;
		}
		.daftar h3{
			margin-top: 50px;
			margin-bottom: 25px;
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
				<a href="tambah-buku.php" class="btn btn-success pull-right">Tambah Data Buku </a>
				<h3 align="center">Daftar Buku</h3>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Harga</th>
							<th>Penerbit</th>
							<th>Tanggal Terbit</th>
							<th>Kategori</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							include "koneksi.php";
							$i = 1;
							$query = "SELECT * FROM buku";
							$result = mysqli_query($connect,$query) or die (mysqli_error($connect));
							while($row = mysqli_fetch_array($result)){
						?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $row['judul_buku']; ?></td>
							<td><?php echo 'Rp '.$row['harga_buku']; ?></td>
							<td><?php echo $row['penerbit']; ?></td>
							<td><?php echo $row['tanggal_terbit']; ?></td>

							<?php 
								$kategori=$row['kategori'];
								$querys = "SELECT nama_kategori FROM kategori WHERE id_kategori=$kategori";
								$results = mysqli_query($connect,$querys) or die (mysqli_error($connect));
								$rows = mysqli_fetch_array($results);
							?>
							<td><?php echo $rows['nama_kategori']; ?></td>


							<td>
								<a href="edit-buku.php?id_buku=<?php echo $row['id_buku']; ?>" class="btn btn-warning btn-sm">Edit</a>
								<a href="hapus-buku.php?id_buku=<?php echo $row['id_buku']; ?>" class="btn btn-danger btn-sm">Hapus</a>
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
