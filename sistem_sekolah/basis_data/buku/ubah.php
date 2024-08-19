<?php
include "../../config/koneksi.php";

// Aktifkan error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Cek apakah ID ada di parameter URL dan valid
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('ID tidak valid.');
}

$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$data = mysqli_query($koneksi, "SELECT * FROM buku WHERE id='$id'");
$hasil = mysqli_fetch_array($data);

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
            background-color: cyan; /* Mengubah latar belakang menjadi cyan */
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 600px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 15px;
        }
        td {
            padding: 10px;
        }
        label {
            font-weight: bold;
            color: #555;
            font-size: 18px;
            display: inline-block;
            width: 150px;
        }
        input[type="text"], select {
            width: calc(100% - 160px);
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        button[type="submit"], .cancel-btn, .delete-btn {
            background-color: #5A67D8;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin: 0 10px; /* Menambahkan jarak horizontal antara tombol */
        }
        .cancel-btn {
            background-color: #E53E3E;
        }
        .delete-btn {
            background-color: #F56565;
        }
        button[type="submit"]:hover, .cancel-btn:hover, .delete-btn:hover {
            background-color: #4A56F6;
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
        <h1>Ubah Data Buku</h1>
        <form method="post" action="">
            <table>
                <tr>
                    <td><label for="id">ID</label></td>
                    <td><input type="text" id="id" name="id" value="<?php echo htmlspecialchars($hasil['id']); ?>" readonly></td>
                </tr>
                <tr>
                    <td><label for="judul">Judul</label></td>
                    <td><input type="text" id="judul" name="judul" value="<?php echo htmlspecialchars($hasil['judul']); ?>"></td>
                </tr>
                <tr>
                    <td><label for="pengarang">Pengarang</label></td>
                    <td><input type="text" id="pengarang" name="pengarang" value="<?php echo htmlspecialchars($hasil['pengarang']); ?>"></td>
                </tr>
                <tr>
                    <td><label for="id_genre">ID Genre</label></td>
                    <td><input type="text" id="id_genre" name="id_genre" value="<?php echo htmlspecialchars($hasil['id_genre']); ?>"></td>
                </tr>
                <tr>
                    <td><label for="tentang_buku">Tentang Buku</label></td>
                    <td><input type="text" id="tentang_buku" name="tentang_buku" value="<?php echo htmlspecialchars($hasil['tentang_buku']); ?>"></td>
                </tr>
                <tr>
                    <td><label for="status">Status</label></td>
                    <td>
                        <select id="status" name="status">
                            <option value="dipinjam" <?php echo ($hasil['status'] == 'dipinjam') ? 'selected' : ''; ?>>DIPINJAM</option>
                            <option value="tersedia" <?php echo ($hasil['status'] == 'tersedia') ? 'selected' : ''; ?>>TERSEDIA</option>
                            <option value="sudah_dikembalikan" <?php echo ($hasil['status'] == 'sudah_dikembalikan') ? 'selected' : ''; ?>>SUDAH DIKEMBALIKAN</option>
                            <option value="lewat_tempo" <?php echo ($hasil['status'] == 'lewat_tempo') ? 'selected' : ''; ?>>LEWAT TEMPO</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div class="button-container">
                <button type="submit" name="simpan">Simpan</button>
                <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="hapus.php?id=<?php echo htmlspecialchars($hasil['id']); ?>" class="delete-btn">Hapus</a>
                <a href=" ../../element.php" class="cancel-btn">Batal</a>
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

    // Query untuk mengupdate data
    $sql = "UPDATE buku SET judul='$judul', pengarang='$pengarang', id_genre='$id_genre', tentang_buku='$tentang_buku', status='$status' WHERE id='$id'";

    // Execute query and handle errors
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
