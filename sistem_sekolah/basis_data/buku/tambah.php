<?php
include "../../config/koneksi.php";

// Aktifkan error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['simpan'])) {
    // Ambil data dari form dan escape untuk keamanan
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $pengarang = mysqli_real_escape_string($koneksi, $_POST['pengarang']);
    $id_genre = mysqli_real_escape_string($koneksi, $_POST['id_genre']);
    $tentang_buku = mysqli_real_escape_string($koneksi, $_POST['tentang_buku']);
    $status = mysqli_real_escape_string($koneksi, $_POST['status']);
    
    // Query untuk menyimpan data tanpa kolom id
    $sql = "INSERT INTO buku (judul, pengarang, id_genre, tentang_buku, status) VALUES ('$judul', '$pengarang', '$id_genre', '$tentang_buku', '$status')";
    
    // Cek apakah proses simpan berhasil
    if (mysqli_query($koneksi, $sql)) {
        // Jika berhasil, redirect ke element.php
        header('Location: ../../element.php');
        exit; // Menghentikan eksekusi script setelah pengalihan
    } else {
        // Jika tidak berhasil, tampilkan pesan error dengan informasi
        echo "<script>alert('Oupss....Maaf proses penyimpanan data tidak berhasil: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>
