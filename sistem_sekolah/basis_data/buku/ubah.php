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

// Handle form submission
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $id_genre = $_POST['id_genre'];
    $tentang_buku = $_POST['tentang_buku'];
    $status = $_POST['status'];

    // Query untuk mengupdate data
    $sql = "UPDATE buku SET judul=?, pengarang=?, id_genre=?, tentang_buku=?, status=? WHERE id=?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, 'sssssi', $judul, $pengarang, $id_genre, $tentang_buku, $status, $id);

    if (mysqli_stmt_execute($stmt)) {
        // jika berhasil, redirect ke element.php
        header('Location:../../element.php');
        exit();
    } else {
        // jika tidak berhasil
        $error = "Oups... Maaf, proses penyimpanan data tidak berhasil.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background-color: cyan; /* Latar belakang cyan */
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
            vertical-align: middle; /* Menyelaraskan vertikal */
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
            display: flex;
            justify-content: center; /* Menyelaraskan tombol di tengah */
            margin-top: 20px;
        }
        .button-container > * {
            margin: 0 10px; /* Menambahkan jarak horizontal antara tombol */
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
        <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
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
                    <td><label for="id_genre">id_genre</label></td>
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
                <a href="../../element.php" class="cancel-btn">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
