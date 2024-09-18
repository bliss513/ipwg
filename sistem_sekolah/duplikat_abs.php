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

if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Ambil data berdasarkan ID yang dipilih
    $sql = "SELECT * FROM absensi_kelas WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Lakukan duplikasi data
        $new_sql = "INSERT INTO absensi_kelas (id_siswa, tanggal, id_jurnal, kehadiran_kelas) 
                    VALUES ('".$row['id_siswa']."', '".$row['tanggal']."', '".$row['id_jurnal']."', '".$row['kehadiran_kelas']."')";
        
        if(mysqli_query($conn, $new_sql)){
            echo "<script>alert('Data berhasil diduplikasi');</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

// Redirect ke halaman absensi_kelas.php
header('Location: absensi_kelas.php');
$conn->close();
?>
