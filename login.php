<?php 

require_once("koneksi.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM pengguna WHERE username='$username' ";
    $query = mysqli_query($connect, $sql);
    //$stmt = $connect->prepare($sql);
    


    // bind parameter ke query
    //$params = array(
    //    ":username" => $username,
    //);

    //$stmt->execute($params);

    //$user = $stmt->fetch(PDO::FETCH_ASSOC);

    //fetch data
    $user = mysqli_fetch_assoc($query);//untuk ambil data pake fetch assoc

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman sudahmasuk.php
            header("Location: sudahmasuk.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
</head>
<body class="bg-info">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
        <p></p>
        <p>&larr; <a href="index.php">Home</a>

        <h4>Masuk ke Katalog Buku</h4>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />

        </form>
            
        </div>

        <div class="col-md-6">
            <!-- isi dengan sesuatu di sini -->
            <img class="img img-responsive" src="assets/img/connect.png" />
        </div>

    </div>
</div>
    
</body>
</html>