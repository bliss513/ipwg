<?php
// Konfigurasi koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistem_sekolah";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menangkap data yang dikirim dari form
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$id_genre = $_POST['id_genre'];
$tentang_buku = $_POST['tentang_buku'];
$status = $_POST['status'];

// Query untuk menambahkan buku ke dalam database
$sql = "INSERT INTO buku (judul, pengarang, id_genre, tentang_buku, status) 
        VALUES (?, ?, ?, ?, ?)";

// Mempersiapkan statement
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Gagal mempersiapkan statement: " . $conn->error);
}

// Bind parameter ke dalam statement
if ($stmt->bind_param("sssss", $judul, $pengarang, $id_genre, $tentang_buku, $status)) {
    // Menjalankan query
    if ($stmt->execute()) {
        echo "success"; // Menandakan operasi berhasil
    } else {
        echo "Gagal menambah buku: " . $stmt->error;
    }
} else {
    echo "Gagal bind parameter: " . $stmt->error;
}

// Menutup statement dan koneksi
$stmt->close();
$conn->close();
?>
