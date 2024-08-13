<?php
include "../../config/koneksi.php";

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];

    $sql = "INSERT INTO siswa(nama, nisn) VALUES('$nama', '$nisn')";

    if(mysqli_query($koneksi, $sql)){
        header('location:../../button.php');
    } else {
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }
}
?>