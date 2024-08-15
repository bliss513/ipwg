<?php
include "../../config/koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM buku WHERE id='$id'");
$hasil = mysqli_fetch_array($data);
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
            width: 400px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
            color: #333;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #555;
            text-align: center;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        button[type="submit"], .cancel-btn {
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
            margin-left: 10px;
        }
        .cancel-btn a {
            color: white;
            text-decoration: none;
        }
        button[type="submit"]:hover, .cancel-btn:hover {
            background-color: #434190;
        }
        .cancel-btn:hover {
            background-color: #C53030;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ubah Data</h1>
        <form method="post" action="">
            <label for="id">ID</label>
            <input type="text" id="id" name="id" value="<?php echo $hasil['id'];?>" readonly>
            <label for="judul">Judul</label>
            <input type="text" id="judul" name="judul" value="<?php echo $hasil['judul'];?>">
            <label for="pengarang">Pengarang</label>
            <input type="text" id="pengarang" name="pengarang" value="<?php echo $hasil['pengarang'];?>">
            <label for="id_genre">ID Genre</label>
            <input type="text" id="id_genre" name="id_genre" value="<?php echo $hasil['id_genre'];?>">
            <label for="tentang_buku">Tentang Buku</label>
            <input type="text" id="tentang_buku" name="tentang_buku" value="<?php echo $hasil['tentang_buku'];?>">
            <label for="status">Status</label>
            <select id="status" name="status">
                <option value="dipinjam" <?php echo ($hasil['status'] == 'dipinjam') ? 'selected' : ''; ?>>DIPINJAM</option>
                <option value="tersedia" <?php echo ($hasil['status'] == 'tersedia') ? 'selected' : ''; ?>>TERSEDIA</option>
                <option value="sudah_dikembalikan" <?php echo ($hasil['status'] == 'sudah_dikembalikan') ? 'selected' : ''; ?>>SUDAH DIKEMBALIKAN</option>
                <option value="lewat_tempo" <?php echo ($hasil['status'] == 'lewat_tempo') ? 'selected' : ''; ?>>LEWAT TEMPO</option>
            </select>
            <div class="button-container">
                <button type="submit" name="simpan">Simpan</button>
                <a href="buku.php" class="cancel-btn">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $id_genre = $_POST['id_genre'];
    $tentang_buku = $_POST['tentang_buku'];
    $status = $_POST['status'];
    
    $sql = "UPDATE buku SET judul='$judul', pengarang='$pengarang', id_genre='$id_genre', tentang_buku='$tentang_buku', status='$status' WHERE id='$id'";

    // Cek apakah proses simpan berhasil 
    if (mysqli_query($koneksi, $sql)) {
        // Jika berhasil, redirect ke index.php
        header('Location: ../../element.php');
    } else {
        // Jika tidak berhasil
        echo "Oupss....Maaf, proses penyimpanan data tidak berhasil.";
    }
}
?>
