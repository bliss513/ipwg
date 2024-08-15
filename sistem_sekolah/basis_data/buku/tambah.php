<?php
include "..//config/koneksi.php";

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $id_genre = $_POST['id_genre'];
    $tentang_buku = $_POST['tentang_buku'];
    $status = $_POST['status'];
    
    $sql = "INSERT INTO buku (id, judul, pengarang, id_genre, tentang_buku, status) VALUES ('$id', '$judul', '$pengarang', '$id_genre', '$tentang_buku', '$status')";
    //cek apakah proses simpan berhasil
    if (mysqli_query($koneksi, $sql)) {
        //jika berhasil, redirect ke index.php
        header('Location: buku.php');
    } else {
        //jika tidak berhasil
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }
}
?>
