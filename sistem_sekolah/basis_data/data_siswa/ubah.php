<?php
include "../../config/koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$hasil = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mengubah Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        h1 {
            font-size: 20px;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
        }
        button[type="submit"], .cancel-btn, .delete-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }
        .cancel-btn {
            background-color: #ff9800;
            color: white;
            text-decoration: none;
        }
        .delete-btn {
            background-color: #f44336;
            color: white;
            text-decoration: none;
            margin-top: 10px;
            display: block;
            text-align: center;
        }
        button[type="submit"]:hover, .cancel-btn:hover, .delete-btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ubah Data</h1>
        <form method="post" action="">
            <label for="id">Id</label>
            <input type="text" id="id" name="id" value="<?php echo htmlspecialchars($hasil['id']);?>" readonly>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($hasil['nama']);?>">
            <label for="nisn">Nisn</label>
            <input type="text" id="nisn" name="nisn" value="<?php echo htmlspecialchars($hasil['nisn']);?>">
            <label for="nomer_hp">Nomer Hp</label>
            <input type="number" id="nomer_hp" name="nomer_hp" value="<?php echo htmlspecialchars($hasil['nomer_hp']);?>">
            <div class="button-container">
                <button type="submit" name="simpan">Simpan</button>
                <a href="../../button.php" class="cancel-btn">Batal</a>
                <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="hapus.php?id=<?php echo urlencode($hasil['id']); ?>" class="delete-btn">Hapus Data Ini</a>
            </div>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
    $nomer_hp = mysqli_real_escape_string($koneksi, $_POST['nomer_hp']);

    // Pastikan nama variabel di SQL query konsisten dengan nama input form
    $sql = "UPDATE siswa SET nama='$nama', nisn='$nisn', nomer_hp='$nomer_hp' WHERE id='$id'";

    if (mysqli_query($koneksi, $sql)) {
        // Jika berhasil, redirect ke button.php
        header('Location: ../../button.php');
        exit(); // Pastikan tidak ada kode yang dijalankan setelah redirect
    } else {
        // Jika tidak berhasil
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil: " . mysqli_error($koneksi);
    }
}
?>
