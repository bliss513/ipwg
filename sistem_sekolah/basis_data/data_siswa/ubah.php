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
            <input type="text" id="id" name="id" value="<?php echo $hasil['id'];?>" readonly>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="<?php echo $hasil['nama'];?>">
			<label for="nisn">Nisn</label>
            <input type="text" id="nisn" name="nisn" value="<?php echo $hasil['nisn'];?>">
            <label for="nomer">Nomer Hp</label>
            <input type="number" id="nomer" name="nomer" value="+62">
            <div class="button-container">
                <button type="submit" name="simpan">Simpan</button>
                <a href="../../button.php" class="cancel-btn">Batal</a>
            </div>
        </form>
        <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="hapus.php?id=<?php echo $hasil['id']; ?>" class="delete-btn">Hapus Data Ini</a>
    </div>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nisn = $_POST['nama'];
    $nama = $_POST['nisn'];
    $nomer = $_POST['nomer'];
    $sql = "UPDATE siswa SET id='$id', nama='$nama', nisn='$nisn', nomer='$nomer' WHERE id='$id'";

    // cek apakah proses simpan berhasil
    if (mysqli_query($koneksi, $sql)) {
        // jika berhasil, redirect ke index.php
        header('Location: ../../button.php');
    } else {
        // jika tidak berhasil
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }
}
