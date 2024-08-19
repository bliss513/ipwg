<?php
include"../../config/koneksi.php";

if(isset($_POST['simpan'])){
    $id= $_POST['id'];
    $kd_kelas= $_POST['kd_kelas'];
    $tingkat= $_POST['tingkat'];
    $nama_kelas= $_POST['nama_kelas'];
    
    $sql = "INSERT INTO kelas(id,kd_kelas,tingkat,nama_kelas)VALUES('$id','$kd_kelas','$tingkat','$nama_kelas')";
    //cek apakah proses simpan berhasil
    if(mysqli_query($koneksi,$sql)){
    //jika  berhasil, redirect ke index.php
        header('location:../../kelas.php');
    }else{
        //jika tidak berhasil
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }


}
?>