<?php
include"../../config/koneksi.php";

if(isset($_POST['simpan'])){
    $id= $_POST['id'];
    $nisn= $_POST['nisn'];
    $nama= $_POST['nama'];
    $nomer= $_POST['nomer'];
    
    $sql = "INSERT INTO siswa(id,nisn,nama,nomer)VALUES('$id','$nisn','$nama','$nomer')";
    //cek apakah proses simpan berhasil
    if(mysqli_query($koneksi,$sql)){
    //jika  berhasil, redirect ke index.php
        header('location:../../button.php');
    }else{
        //jika tidak berhasil
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }


}
?>