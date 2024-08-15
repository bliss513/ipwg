<?php
include "../config/koneksi.php";

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $id_genre = $_POST['id_genre'];
    $tentang_buku = $_POST['tentang_buku'];
    $status = $_POST['status'];

    // Validasi nomor telepon
    if (!is_numeric($id)) {
        echo "id harus berupa angka";
        exit;
    }
    if (strlen($id) < 1 || strlen($nomer) > 15) {
        echo "id harus memiliki panjang antara 1 dan 15 digit";
        exit;
    }

    $sql = "INSERT INTO buku (id, judul, pengarang, id_genre, tentang_buku, statu_s) VALUES ('$id', '$judul', '$pengarang', '$id_genre', '$tentang_buku', '$status')";
    // cek apakah proses simpan berhasil
    if (mysqli_query($koneksi, $sql)) {
        // jika berhasil, redirect ke halaman index.php
        header('Location: buku.php');
    } else {
        // jika tidak berhasil
        echo "Oups.... Maaf, proses penyimpanan data tidak berhasil";
    }
}
?>
