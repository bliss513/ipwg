<?php
include"../assets/knk/koneksi.php";
$id= $_GET['id'];
$data= mysqli_query($koneksi,"DELETE FROM tb_mhs where nim='$id'");

if($data){
    header('location:tables.php');
}else{
    echo "maaf proses mengubah data tidak berhasil";
}
?>