<?php

require_once("koneksi.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // menyiapkan query
    $sql = "INSERT INTO pengguna (username, password) VALUES ('$username', '$password')";
    $query = mysqli_query($connect, $sql);

    // $sql = "INSERT INTO pengguna (username, password) 
    //         VALUES (?, ?)";
    // $stmt = $connect->prepare($sql);

    // // bind parameter ke query
    // $params = array(
    //     $username,
    //     $password
    // );

    // $stmt->bind_param($params);

    // // eksekusi query untuk menyimpan ke database
    // $saved = $stmt->execute();

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($query){
        header("Location: login.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
</head>
<body class="bg-info">

<div class="container mt-5">
    <p></p>
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Bergabunglah bersama ratusan orang lainnya...</h4>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

        </form>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="assets/img/connect.png" />
        </div>

    </div>
</div>

</body>
</html>