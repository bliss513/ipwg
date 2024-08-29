<?php
// Konfigurasi koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menangkap data yang dikirim dari form
$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$id_genre = $_POST['id_genre'];
$tentang_buku = $_POST['tentang_buku'];
$status = $_POST['status'];

// Query untuk menambahkan buku ke dalam database
$sql = "INSERT INTO buku (id, judul, pengarang, id_genre, tentang_buku, status) 
        VALUES (?, ?, ?, ?, ?, ?)";

// Mempersiapkan statement
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Gagal mempersiapkan statement: " . $conn->error);
}

if ($stmt->bind_param("isssss", $id, $judul, $pengarang, $id_genre, $tentang_buku, $status)) {
         echo "Parameter berhasil di-bind.<br>";
     } else {
         echo "Gagal bind parameter: " . $stmt->error;
     }
     
     if ($stmt->execute()) {
         echo "Buku berhasil ditambahkan!";
     } else {
         echo "Gagal menambah buku: " . $stmt->error;
     }
     

// Menutup statement dan koneksi
$stmt->close();
$conn->close();
?>
