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

// Mengambil ID absensi dari URL
$id_absensi = isset($_GET['id']) ? $_GET['id'] : '';

if ($id_absensi == '') {
    die("ID absensi tidak ditemukan.");
}

// Query untuk mendapatkan data absensi berdasarkan ID
$sql = "SELECT a.id, a.id_siswa, a.tanggal, a.id_jurnal, a.kehadiran_kelas, s.nama, j.mapel 
        FROM absensi_kelas a
        JOIN siswa s ON a.id_siswa = s.id
        JOIN jurnal j ON a.id_jurnal = j.id
        WHERE a.id = $id_absensi";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Data tidak ditemukan.");
}

$row = $result->fetch_assoc();

// Proses penyimpanan perubahan data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kehadiran_kelas = $_POST['kehadiran_kelas'];

    $update_sql = "UPDATE absensi_kelas SET kehadiran_kelas='$kehadiran_kelas' WHERE id=$id_absensi";
    if ($conn->query($update_sql) === TRUE) {
        echo "<script>alert('Data berhasil diupdate!'); window.location.href='nama_halaman_utama.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Absensi</title>
    <style>
        form {
            width: 300px;
            margin: 50px auto;
        }
        label, input, select {
            display: block;
            margin-bottom: 10px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Ubah Data Absensi</h2>

    <form method="POST" action="">
        <label for="nama_siswa">Nama Siswa:</label>
        <input type="text" id="nama_siswa" name="nama_siswa" value="<?php echo $row['nama']; ?>" disabled>

        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" value="<?php echo $row['tanggal']; ?>" disabled>

        <label for="mapel">Mata Pelajaran:</label>
        <input type="text" id="mapel" name="mapel" value="<?php echo $row['mapel']; ?>" disabled>

        <label for="kehadiran_kelas">Status Kehadiran:</label>
        <select id="kehadiran_kelas" name="kehadiran_kelas">
            <option value="Hadir" <?php echo $row['kehadiran_kelas'] == "Hadir" ? 'selected' : ''; ?>>Hadir</option>
            <option value="Izin" <?php echo $row['kehadiran_kelas'] == "Izin" ? 'selected' : ''; ?>>Izin</option>
            <option value="Sakit" <?php echo $row['kehadiran_kelas'] == "Sakit" ? 'selected' : ''; ?>>Sakit</option>
            <option value="Alfa" <?php echo $row['kehadiran_kelas'] == "Alfa" ? 'selected' : ''; ?>>Alfa</option>
        </select>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>

<?php
// Menutup koneksi
$conn->close();
?>
