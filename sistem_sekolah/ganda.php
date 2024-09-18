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

// Nama tabel yang akan digandakan
$source_table = 'absensi_kelas';
$target_table = 'absensi_kelas_copy'; // Nama tabel baru yang akan dibuat

// Membuat tabel baru jika belum ada
$create_table_sql = "CREATE TABLE IF NOT EXISTS $target_table LIKE $source_table";
if ($conn->query($create_table_sql) !== TRUE) {
    die("Error creating table: " . $conn->error);
}

// Ambil data dari tabel sumber
$select_sql = "SELECT * FROM $source_table";
$result = $conn->query($select_sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Menghapus kolom ID dari data yang diambil
        unset($row['id']);
        
        // Generate ID baru untuk data yang digandakan
        // Gantilah bagian ini dengan logika untuk menghasilkan ID baru sesuai kebutuhan
        $new_id = ''; // Buat ID baru sesuai kebutuhan

        // Insert data ke tabel baru
        $columns = implode(", ", array_keys($row));
        $values  = implode(", ", array_map(function($value) use ($conn) {
            return "'" . $conn->real_escape_string($value) . "'";
        }, array_values($row)));

        $insert_sql = "INSERT INTO $target_table (id, $columns) VALUES ($new_id, $values)";
        
        if ($conn->query($insert_sql) !== TRUE) {
            echo "Error inserting record: " . $conn->error;
        }
    }
} else {
    echo "No records found in the source table.";
}

// Menutup koneksi
$conn->close();
?>
