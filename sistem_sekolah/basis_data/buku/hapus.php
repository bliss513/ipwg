<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "DELETE FROM buku WHERE nisn='$id'");

    if ($data) {
        header('Location: index.php');
    } else {
        echo "Maaf, proses menghapus data tidak berhasil";
    }
} else {
    echo "ID tidak ditemukan";
}
?>
