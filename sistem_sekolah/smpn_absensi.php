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

// Tanggal saat ini
$current_date = date('Y-m-d');

// Inisialisasi variabel
$selected_jurnal = isset($_POST['jurnal']) ? $_POST['jurnal'] : '';

// Proses penyimpanan absensi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'kehadiran_') === 0) {
            $id_siswa = str_replace('kehadiran_', '', $key);
            $kehadiran_kelas = $value;

            // Cek apakah sudah ada data absensi untuk siswa dan tanggal ini
            $check_sql = "SELECT * FROM absensi_kelas WHERE id_siswa=$id_siswa AND tanggal='$current_date' AND id_jurnal='$selected_jurnal'";
            $check_result = $conn->query($check_sql);

            if ($check_result->num_rows > 0) {
                // Jika sudah ada, perbarui
                $update_sql = "UPDATE absensi_kelas SET kehadiran_kelas='$kehadiran_kelas' WHERE id_siswa=$id_siswa AND tanggal='$current_date' AND id_jurnal='$selected_jurnal'";
                $conn->query($update_sql);
            } else {
                // Jika belum ada, tambahkan data baru
                $insert_sql = "INSERT INTO absensi_kelas (id_siswa, tanggal, id_jurnal, kehadiran_kelas) VALUES ($id_siswa, '$current_date', '$selected_jurnal', '$kehadiran_kelas')";
                $conn->query($insert_sql);
            }
        }
    }

    // Kirim respon sukses
    echo "Data absensi berhasil disimpan.";
}

// Menutup koneksi
$conn->close();
?>
