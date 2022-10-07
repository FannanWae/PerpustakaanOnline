<?php

include 'user/koneksi.php';


if(isset($_POST['register'])){
    $username = strtolower(stripslashes($_POST['username']));
    $password = mysqli_real_escape_string($koneksi,$_POST['password']);
    $password2 = mysqli_real_escape_string($koneksi,$_POST['password2']);
    if($password !== $password2){
        echo `<script src="">alert('Password tidak sama')</script>`;
    }
    mysqli_query($koneksi, "INSERT INTO user VALUES('','$username','$password')");
    $result = mysqli_affected_rows($koneksi);

    if($result){
        echo `<script src="">alert('data berhasil ditambah')</script>`;
        header("Location:index.php");
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="login-wrap-pas">
  <h2>Login</h2>
  
  <div class="form_pas">
      <form action="" method="POST">
      <label for="">Username</label><br>
        <input type="text" placeholder="Username" name="username" /><br>
        <label for="">Password</label><br>
        <input type="password" placeholder="Password" name="password" /><br>
        <label for="">Konfirmasi Password</label><br>
        <input type="password" placeholder="Password" name="password2" /><br>
        <a href=""><button type="submit" class="btn" name="register"> Sign Up </button></a>
        <a href="index.php"> <p> have an account? Sig in </p></a>
      </form>
  </div>
</div>
</body>
</html>