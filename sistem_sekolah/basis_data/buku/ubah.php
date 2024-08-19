<?php
include "../../config/koneksi.php";

// Cek apakah ID ada di parameter URL
if (!isset($_GET['id'])) {
    die('ID tidak ditemukan.');
}

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM buku WHERE id='$id'");
$hasil = mysqli_fetch_array($data);

// Pastikan data buku ditemukan
if (!$hasil) {
    die('Data buku tidak ditemukan.');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mengubah Data Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: cyan;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 500px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
            color: #333;
        }
        .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        .form-group label {
            width: 45%;
            font-weight: bold;
            color: #555;
            text-align: center;
        }
        .form-group input[type="text"], .form-group select {
            width: 45%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        button[type="submit"], .cancel-btn, .delete-btn {
            background-color: #5A67D8;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .cancel-btn {
            background-color: #E53E3E;
        }
        .delete-btn {
            background-color: #F56565;
            margin: 0 10px;
        }
        .cancel-btn:hover {
            background-color: #C53030;
        }
        .delete-btn:hover {
            background-color: #E53E3E;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ubah Data</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" id="id" name="id" value="<?php echo htmlspecialchars($hasil['id']); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" id="judul" name="judul" value="<?php echo htmlspecialchars($hasil['judul']); ?>">
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" id="pengarang" name="pengarang" value="<?php echo htmlspecialchars($hasil['pengarang']); ?>">
            </div>
            <div class="form-group">
                <label for="id_genre">ID Genre</label>
                <input type="text" id="id_genre" name="id_genre" value="<?php echo htmlspecialchars($hasil['id_genre']); ?>">
            </div>
            <div class="form-group">
                <label for="tentang_buku">Tentang Buku</label>
                <input type="text" id="tentang_buku" name="tentang_buku" value="<?php echo htmlspecialchars($hasil['tentang_buku']); ?>">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status">
                    <option value="dipinjam" <?php echo ($hasil['status'] == 'dipinjam') ? 'selected' : ''; ?>>DIPINJAM</option>
                    <option value="tersedia" <?php echo ($hasil['status'] == 'tersedia') ? 'selected' : ''; ?>>TERSEDIA</option>
                    <option value="sudah_dikembalikan" <?php echo ($hasil['status'] == 'sudah_dikembalikan') ? 'selected' : ''; ?>>SUDAH DIKEMBALIKAN</option>
                    <option value="lewat_tempo" <?php echo ($hasil['status'] == 'lewat_tempo') ? 'selected' : ''; ?>>LEWAT TEMPO</option>
                </select>
            </div>
            <div class="button-container">
                <button type="submit" name="simpan">Simpan</button>
                <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="hapus.php?id=<?php echo htmlspecialchars($hasil['id']); ?>" class="delete-btn">Hapus</a>
                <a href="../../element.php" class="cancel-btn">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php
if (isset($_POST['simpan'])) {
    // Ambil data dari form dan escape untuk keamanan
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $pengarang = mysqli_real_escape_string($koneksi, $_POST['pengarang']);
    $id_genre = mysqli_real_escape_string($koneksi, $_POST['id_genre']);
    $tentang_buku = mysqli_real_escape_string($koneksi, $_POST['tentang_buku']);
    $status = mysqli_real_escape_string($koneksi, $_POST['status']);

    $sql = "UPDATE buku SET judul='$judul', pengarang='$pengarang', id_genre='$id_genre', tentang_buku='$tentang_buku', status='$status' WHERE id='$id'";

    if (mysqli_query($koneksi, $sql)) {
        // Menghindari output sebelum header
        header('Location: ../../element.php');
        exit; // Menghentikan eksekusi script setelah pengalihan
    } else {
        // Menampilkan pesan error dengan lebih informatif
        echo "<script>alert('Oupss....Maaf, proses penyimpanan data tidak berhasil: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>
