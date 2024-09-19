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

if(isset($_POST['simpan'])){
    // Ambil data dari form
    $id = $_POST['id'];
    $id_siswa = $_POST['id_siswa'];
    $tanggal = $_POST['tanggal'];
    $id_jurnal = $_POST['id_jurnal'];
    $kehadiran_kelas = $_POST['kehadiran_kelas'];

    // Query untuk menambahkan data ke dalam tabel absensi_kelas
    $sql = "INSERT INTO absensi_kelas (id, id_siswa, tanggal, id_jurnal, kehadiran_kelas)
            VALUES ('$id', '$id_siswa', '$tanggal', '$id_jurnal', '$kehadiran_kelas')";

    // Cek apakah proses penyimpanan berhasil
    if(mysqli_query($conn, $sql)){
        // Jika berhasil, redirect ke absensi_kelas.php
        header('Location: absensi_kelas.php');
    } else {
        // Jika tidak berhasil
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil: " . mysqli_error($conn);
    }
}

// Menutup koneksi
$conn->close();
?>
