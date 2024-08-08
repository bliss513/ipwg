<?php 
session_start();
if (isset($_SESSION['is_login'])) {
  header('Location: ../../');
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <title>Login</title>

  <link rel="stylesheet" href="assets/style.css" media="screen" title="no title">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <form action="./proses_login.php" method="post">
    <div class="login">

      <div class="avatar">
        <img src="assets/img/1.png" style="width: 150px;" alt="Avatar">
      </div>

      <h2><b>pembayaran spp</b></h2>
      <br>
      <p>Masukan <b>Username</b> Dan <b>Password</b></p>

      <div class="box-login">
        <i class="fa fa-user"></i>
        <input type="text" name="username" placeholder="Username">
      </div>

      <div class="box-login">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password">
      </div>

      <button type="submit" name="login" class="btn-login">SIGN IN</button>
      <div class="bottom">
        <a href="#">© 2024 sipapasipa</a>
      </div>
    </div>
  </form>
</head>

</html>