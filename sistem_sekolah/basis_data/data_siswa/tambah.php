<?php
include"../../config/koneksi.php";

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $nomer = $_POST['nomer_hp'];

    $sql = "INSERT INTO siswa(nama, nisn, nomer_hp) VALUES('$nama', '$nisn', '$nomer_hp')";

    if(mysqli_query($koneksi, $sql)){
        header('location:../../button.php');
    } else {
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }


}
?>