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

// Proses penyimpanan atau duplikasi absensi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal_baru = isset($_POST['tanggal']) ? $_POST['tanggal'] : date('Y-m-d'); // Ambil tanggal dari input

    if (isset($_POST['duplikat'])) {
        // Proses duplikasi data
        $duplicate_sql = "SELECT * FROM absensi_kelas";
        $duplicate_result = $conn->query($duplicate_sql);

        if ($duplicate_result->num_rows > 0) {
            while ($row = $duplicate_result->fetch_assoc()) {
                $id_siswa = $row['id_siswa'];
                $id_jurnal = $row['id_jurnal'];
                $kehadiran_kelas = $row['kehadiran_kelas'];

                // Insert data baru dengan tanggal yang berbeda
                $insert_sql = "INSERT INTO absensi_kelas (id_siswa, tanggal, id_jurnal, kehadiran_kelas) 
                               VALUES ('$id_siswa', '$tanggal_baru', '$id_jurnal', '$kehadiran_kelas')";
                if ($conn->query($insert_sql) === TRUE) {
                    echo "<script>alert('Data berhasil diduplikat!');</script>";
                } else {
                    echo "Error saat menduplikat: " . $conn->error;
                }
            }
        } else {
            echo "<script>alert('Tidak ada data yang tersedia untuk diduplikat');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duplikat Data Absensi</title>
</head>
<body>
    <h1>Duplikat Data Absensi</h1>

    <form method="POST" action="">
        <!-- Input tanggal untuk duplikat -->
        <div>
            <label for="tanggal">Tanggal Baru:</label>
            <input type="date" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
        </div>

        <!-- Tombol duplikat data -->
        <div>
            <button type="submit" name="duplikat">Duplikat Data</button>
        </div>
    </form>
</body>
</html>

<?php
// Menutup koneksi
$conn->close();
?>
