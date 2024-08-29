
<?php
include "../../config/koneksi.php";

// Periksa apakah ID siswa diterima dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Jika formulir disubmit, proses update data
if (isset($_POST['simpan'])) {
    $id = intval($_POST['id']); // Pastikan ID di-cast ke integer
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);

    $sql = "UPDATE sistem_sekolah SET nama='$nama', nisn='$nisn' WHERE id='$id'";

    if (mysqli_query($koneksi, $sql)) {
        // Jika berhasil, redirect ke index_siswa.php
        header('Location:index_siswa.php');
        exit(); // Hentikan eksekusi lebih lanjut setelah redirect
    } else {
        // Jika tidak berhasil
        echo "Oups... Maaf, proses penyimpanan data tidak berhasil.";
    }
}

// Ambil data siswa untuk ditampilkan di formulir
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$hasil = mysqli_fetch_array($data);
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Mengubah Data Sistem Sekolah</title>
</head>
<body>
    <h1>Ubah Data</h1>
    <form method="post" action="">
        <label>Nama</label><br>
        <input type="text" name="nama" value="<?php echo htmlspecialchars($hasil['nama']); ?>"><br>
        <label>NISN</label><br>
        <input type="text" name="nisn" value="<?php echo htmlspecialchars($hasil['nisn']); ?>"><br>
        
        <br>
        <button type="submit" name="simpan">Simpan</button> || <button><a href="../../button.php">Kembali</a></button>
    </form>
</body>
</html>
