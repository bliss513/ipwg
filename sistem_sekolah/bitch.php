<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistem_sekolah";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Variabel data yang akan ditambahkan
$id_siswa = 1; // Ganti dengan ID siswa yang sesuai
$tanggal = '2024-09-13'; // Ganti dengan tanggal yang sesuai
$id_jurnal = 1; // Ganti dengan ID jurnal yang sesuai
$kehadiran_kelas = 'Hadir'; // Ganti dengan kehadiran yang sesuai

// Menyiapkan pernyataan SQL untuk menambahkan data
$sql = "INSERT INTO absensi_kelas (id_siswa, tanggal, id_jurnal, kehadiran_kelas) 
        VALUES (?, ?, ?, ?)";

// Menyiapkan pernyataan
$stmt = $conn->prepare($sql);

// Mengecek apakah pernyataan berhasil disiapkan
if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

// Mengikat parameter
$stmt->bind_param("isis", $id_siswa, $tanggal, $id_jurnal, $kehadiran_kelas);

// Mengeksekusi pernyataan
if ($stmt->execute()) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $stmt->error;
}

// Menutup pernyataan dan koneksi
$stmt->close();
$conn->close();
?>
