<?php
 include"../config/koneksi.php";
 $id= $_GET['id'];
 $data= mysqli_query($koneksi,"DELETE FROM siswa where id='$id'");

if($data){
    header('location:index.php');
}else{
    echo "Maaf Data Tidak Berhasil";
}
?>