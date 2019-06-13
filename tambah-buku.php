<?php
require_once("auth.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Buku</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<STYLE>
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
				<h3 align="center">Form Tambah Data Buku</h3>
				<div class="col-md-8 col-md-offset-2 form">
					<form action="aksi-tambahbuku.php" method="POST">
					  	<div class="form-group">
					    	<label>Judul</label>
					    	<input type="text" class="form-control" name="judul" required>
					  	</div>
					  	<div class="form-group">
					    	<label>Harga</label>
					    	<input type="text" class="form-control" name="harga" required>
					  	</div>
					  	<div class="form-group">
					    	<label>Kategori</label>
							<select class="form-control" name="kategori" required>
							<?php 
								include "koneksi.php";
								$query = "SELECT * FROM kategori";
								$result = mysqli_query($connect,$query) or die (mysqli_error($connect));
								while($row = mysqli_fetch_array($result)){
							?>
							<option value="<?php echo $row['id_kategori']; ?>"><?php echo $row['nama_kategori']; ?></option>
							<?php } ?>
							</select>
					  	</div>
					  	<div class="form-group">
					    	<label>Penerbit</label>
					    	<input type="text" class="form-control" name="penerbit" required>
					  	</div>
					  	<div class="form-group">
					    	<label>Tanggal Terbit</label>
					    	<input type="date" class="form-control" name="tgl_terbit" required>
					  	</div>
					  	<input type="submit" value="Submit" name="submit" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
