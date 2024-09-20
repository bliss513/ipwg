<?php
 session_start();

 include "config/koneksi.php";

 $username=$_POST['username'];
 $password=$_POST['password'];

 $ambildata=mysqli_query($koneksi, "select * from users where username='$username' and password='$password'");

 $cek=mysqli_num_rows($ambildata);
 if($cek>0)
 {
    $_SESSION['username']=$username;
    $_SESSION['status']='login';
    header("location:index.php");
 }
 else
 {
    header("location:index.php");
 }
?>