<?php
require_once("auth.php"); 

  require_once "./koneksi.php";
  $sql = "SELECT * FROM buku
  		  INNER JOIN kategori
  		  ON buku.kategori = kategori.id_kategori
  		  WHERE id_buku = ". $_GET['id']; 
  		  //$sql = "SELECT * FROM buku WHERE id_buku = ". $_GET['id']; //dot menggabungkan string

  $query = mysqli_query($connect, $sql);
  $buku = mysqli_fetch_assoc($query);
  if(!isset($_GET["id"])) header("Location: sudahmasuk.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Detail Buku</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
  <div class="jumbotron alert-success text-center">
    <h1><?= $buku['judul_buku']; ?></h1>
  </div>

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <table class="table table-hover">
        <tr>
          <th>Harga</th>
          <td><?= $buku['harga_buku']; ?></td>
        </tr>
        <tr>
          <th>Penerbit</th>
          <td><?= $buku['penerbit']; ?></td>
        </tr>
        <tr>
          <th>Tanggal Terbit</th>
          <td><?= $buku['tanggal_terbit']; ?></td>
        </tr>
        <tr>
          <th>Kategori</th>
          <td><?= $buku['nama_kategori']; ?></td> 
        </tr>
      </table>
      <div class="text-center">
	      <a href="sudahmasuk.php" class="btn btn-success">Kembali</a>
      </div>
    </div>
  </div>

</div>

</body>
</html>