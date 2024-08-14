<?php
include '../buku/config.php';

if (isset($_GET['id'])) {
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
    echo "ID tidak ditemukan";
}

$conn->close();
?>
