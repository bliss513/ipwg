<?php
 include"../config/koneksi.php";
 $id= $_GET['id'];
 $data= mysqli_query($koneksi,"DELETE FROM pinjaman where id='$id'");

if($data){
    header('location:index_pinjaman.php');
}else{
    echo "Maaf Data Tidak Berhasil";
}
?>