<?php
include"config/koneksi.php";
$id= $_GET['id'];
$data= mysqli_query($koneksi,"DELETE FROM kelas where id ='$id'");

if($data){
    header('location:../kelas.php');
}else{
    echo "maaf proses mengubah data tidak berhasil";
}
?>