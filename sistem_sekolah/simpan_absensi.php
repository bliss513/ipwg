<?php
include 'config/koneksi.php'; // Menghubungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ids = $_POST['id'];
    $id_siswa = $_POST['id_siswa'];
    $tanggal = $_POST['tanggal'];
    $id_jurnal = $_POST['id_jurnal'];
    $kehadiran = $_POST['kehadiran'];

    for ($i = 0; $i < count($ids); $i++) {
        $sql = "INSERT INTO absensi_kelas (id, id_siswa, tanggal, id_jurnal, kehadiran_kelas) VALUES ('$ids[$i]', '$id_siswa[$i]', '$tanggal[$i]', '$id_jurnal[$i]', '$kehadiran[$i]') ON DUPLICATE KEY UPDATE kehadiran_kelas='$kehadiran[$i]'";
        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil disimpan untuk ID Siswa " . $id_siswa[$i] . "<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
