<?php

include 'user/koneksi.php';


if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $kondis = "WHERE username='$username' And password='$password'";
    $sql = mysqli_query($koneksi,"SELECT * FROM `user` $kondis");
    $h = mysqli_num_rows($sql);
    if($h === 1){
        header('Location:user/index.php');
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
        <a href=""><button type="submit" class="btn" name="register"> Sign in </button></a>
        <a href="register.php"> <p>Don't have an account? Sig up </p></a>
      </form>
  </div>
</div>
</body>
</html>