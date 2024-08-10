<?php
 include"../config/koneksi.php";
 $id= $_GET['id'];
 $data= mysqli_query($koneksi,"DELETE FROM kelas where id='$id'");

if($data){
    header('location:index_siswa.php');
}else{
    echo "Maaf Data Tidak Berhasil";
}
?>