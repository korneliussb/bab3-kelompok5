<?php 

require_once("auth.php"); 

	include "koneksi.php";
	$id_buku = $_GET['id_buku'];
	$query = "SELECT * FROM buku WHERE id_buku=$id_buku";
	$result = mysqli_query($connect,$query) or die (mysqli_error($connect));
	$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Buku</title>
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
			    <li><a href="index.php">Home</a></li>
			    <li><a href="buku.php">Daftar Buku</a></li>
			    <li><a href="kategori.php">Daftar Kategori</a></li>
			  </ul>
			</div>
			<div class="col-md-10 daftar">
				<h3 align="center">Form Edit Data Buku</h3>
				<div class="col-md-8 col-md-offset-2 form">
					<form action="aksi-editbuku.php?id_buku=<?php echo $row['id_buku'];?>" method="POST">
					  	<div class="form-group">
					    	<label>Judul</label>
					    	<input type="text" class="form-control" name="judul" value="<?php echo $row['judul_buku']; ?>" required>
					  	</div>
					  	<div class="form-group">
					    	<label>Harga</label>
					    	<input type="text" class="form-control" name="harga" value="<?php echo $row['harga_buku']; ?>" required>
					  	</div>
					  	<div class="form-group">
					    	<label>Kategori</label>
							<select class="form-control" name="kategori" required>
							    <?php 
									include "koneksi.php";
									$querys = "SELECT * FROM kategori";
									$results = mysqli_query($connect,$querys) or die (mysqli_error($connect));
									while($rows = mysqli_fetch_array($results)){
								?>
								<option <?php if($row['kategori']==$rows['id_kategori']){ echo "selected=''" ;} ?> value="<?php echo $rows['id_kategori']; ?>"><?php echo $rows['nama_kategori']; ?></option>
								<?php } ?>
							</select>
					  	</div>
					  	<div class="form-group">
					    	<label>Penerbit</label>
					    	<input type="text" class="form-control" name="penerbit" value="<?php echo $row['penerbit']; ?>" required>
					  	</div>
					  	<div class="form-group">
					    	<label>Tanggal Terbit</label>
					    	<input type="date" class="form-control" name="tgl_terbit" value="<?php echo $row['tanggal_terbit']; ?>" required>
					  	</div>
					  	<input type="submit" value="Submit" name="submit" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
