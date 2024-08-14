<?php
include '../config/koneksi.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) { // Cek apakah ID ada dan valid
    $id = $_GET['id'];

    // Menggunakan prepared statement untuk mencegah SQL injection
    $stmt = $conn->prepare("DELETE FROM buku WHERE id = ?");
    
    if ($stmt === false) {
        die('Prepare failed: ' . $conn->error);
    }

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo "Maaf, proses menghapus data tidak berhasil. Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID tidak ditemukan atau tidak valid";
}

$conn->close();
