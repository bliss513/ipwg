<?php
include"../assets/knk/koneksi.php";

if(isset($_POST['simpan'])){
    $nim= $_POST['nim'];
    $nama= $_POST['nama'];
    $jurusan= $_POST['jurusan'];
    $alamat= $_POST['alamat'];
    $hp= $_POST['hp'];
    $wali= $_POST['wali'];
    
    $sql = "INSERT INTO tb_mhs(nim,nama,jurusan,alamat,hp,wali)VALUES('$nim','$nama','$jurusan','$alamat','$hp','$wali')";
    //cek apakah proses simpan berhasil
    if(mysqli_query($koneksi,$sql)){
    //jika  berhasil, redirect ke index.php
        header('location:tables.php');
    }else{
        //jika tidak berhasil
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }


}
?>