<?php
 include"../config/koneksi.php";
 $id= $_GET['id'];
 $data= mysqli_query($koneksi,"DELETE FROM kelas where id='$id'");

if($data){
    header('location:index_kelas.php');
}else{
    echo "Maaf Data Tidak Berhasil";
}
?>