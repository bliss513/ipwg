<?php
include "../../config/koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM guru WHERE id='$id'");
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
            width: 400px;
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
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px; /* Menambahkan jarak antara tombol */
        }
        button[type="submit"], .cancel-btn, .delete-btn {
            padding: 10px 15px;
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
            width: 100px; /* Mengatur lebar tombol hapus */
            text-align: center;
        }
        button[type="submit"]:hover, .cancel-btn:hover, .delete-btn:hover {
            opacity: 0.9;
        }
        .delete-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ubah Data</h1>
        <form method="post" action="">
            <label for="id">Id</label>
            <input type="text" id="id" name="id" value="<?php echo $hasil['id'];?>" readonly>
            <label for="nip">nip</label>
            <input type="text" id="nip" name="nip" value="<?php echo $hasil['nip'];?>">
            <label for="nama_guru">nama guru</label>
            <input type="text" id="nama_guru" name="nama_guru" value="<?php echo $hasil['nama_guru'];?>">
            <div class="button-container">
                <button type="submit" name="simpan">Simpan</button>
                <a href="hapus.php?id=<?php echo $hasil['id']; ?>" class="delete-btn" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                <a href="../../guru.php" class="cancel-btn">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama_guru = $_POST['nama_guru'];
    $sql = "UPDATE guru SET id='$id', nip='$nip', nama_guru='$nama_guru' WHERE id='$id'";

    // cek apakah proses simpan berhasil
    if (mysqli_query($koneksi, $sql)) {
        // jika berhasil, redirect ke index.php
        header('Location: ../../guru.php');
    } else {
        // jika tidak berhasil
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }
}
?>
