<?php
include"../../config/koneksi.php";

if(isset($_POST['simpan'])){
<<<<<<< HEAD
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
=======
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];

    $sql = "INSERT INTO siswa(nama, nisn) VALUES('$nama', '$nisn')";

    if(mysqli_query($koneksi, $sql)){
        header('location:../../button.php');
    } else {
>>>>>>> 41d430762179ba1364576328b961c8f858bb76d3
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }


}
?>