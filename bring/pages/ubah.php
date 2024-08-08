<?php
include "../assets/knk/koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_mhs WHERE nim='$id'");
$hasil = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mengubah Data Mahasiswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 450px;
        }
        h1 {
            text-align: center;
            margin-bottom: 25px;
            font-family: 'Georgia', serif;
            color: #333;
        }
        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        select {
            font-size: 16px; /* Menambahkan ukuran font */
        }
        select option {
            font-size: 16px; /* Menambahkan ukuran font untuk opsi */
            padding: 10px; /* Menambahkan padding untuk opsi */
        }
        .button-container {
            display: flex;
            justify-content: space-between;
        }
        button[type="submit"], .cancel-btn {
            background-color: #5A67D8;
            color: white;
            padding: 12px 24px;
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
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" value="<?php echo $hasil['nim'];?>" readonly>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="<?php echo $hasil['nama'];?>">
            <label for="jurusan">Jurusan</label>
            <select id="jurusan" name="jurusan">
                <option value="pplg" <?php echo ($hasil['jurusan'] == 'pplg') ? 'selected' : ''; ?>>PPLG</option>
                <option value="mplb" <?php echo ($hasil['jurusan'] == 'mplb') ? 'selected' : ''; ?>>MPLB</option>
                <option value="bcf" <?php echo ($hasil['jurusan'] == 'bcf') ? 'selected' : ''; ?>>BCF</option>
                <option value="dkv" <?php echo ($hasil['jurusan'] == 'dkv') ? 'selected' : ''; ?>>DKV</option>
                <option value="kuliner" <?php echo ($hasil['jurusan'] == 'kuliner') ? 'selected' : ''; ?>>Kuliner</option>
            </select>
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" value="<?php echo $hasil['alamat'];?>">
            <label for="hp">No. HP</label>
            <input type="text" id="hp" name="hp" value="<?php echo $hasil['hp'];?>">
            <label for="wali">Wali</label>
            <input type="text" id="wali" name="wali" value="<?php echo $hasil['wali'];?>">
            <div class="button-container">
                <button type="submit" name="simpan">Simpan</button>
                <a href="tables.php" class="cancel-btn">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php
if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $wali = $_POST['wali'];
    
    $sql = "UPDATE tb_mhs SET nim='$nim', nama='$nama', jurusan='$jurusan', alamat='$alamat', hp='$hp', wali='$wali' WHERE nim='$nim'";

    // cek apakah proses simpan berhasil
    if (mysqli_query($koneksi, $sql)) {
        // jika berhasil, redirect ke index.php
        header('Location: tables.php');
    } else {
        // jika tidak berhasil
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }
}
?>
