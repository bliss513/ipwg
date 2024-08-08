<?php
 include"config/koneksi.php";
 $id= $_GET['id'];
 $data= mysqli_query($koneksi,"DELETE FROM mahasiswa where id='$id'");

if($data){
    header('location:tables.php');
}else{
    echo "Maaf Data Tidak Berhasil";
}
?>