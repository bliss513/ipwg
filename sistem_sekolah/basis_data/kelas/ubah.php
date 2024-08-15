<?php
include "../../config/koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id='$id'");
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
            <label for="id">Id</label>
            <input type="text" id="id" name="id" value="<?php echo $hasil['id'];?>" readonly>
            <label for="kd_kelas">Kd_kelas</label>
            <input type="text" id="kd_kelas" name="kd_kelas" value="<?php echo $hasil['kd_kelas'];?>">
            <label for="tingkat">Tingkat</label>
            <select id="tingkat" name="tingkat">
                <option value="X" <?php echo ($hasil['tingkat'] == 'X') ? 'selected' : ''; ?>>X</option>
                <option value="XI" <?php echo ($hasil['tingkat'] == 'XI') ? 'selected' : ''; ?>>XI</option>
                <option value="XII" <?php echo ($hasil['tingkat'] == 'XII') ? 'selected' : ''; ?>>XII</option>
            </select>
            <label for="nama_kelas">Nama_Kelas</label>
            <select id="nama_kelas" name="nama_kelas">
                <option value="PPLG" <?php echo ($hasil['nama_kelas'] == 'PPLG') ? 'selected' : ''; ?>>PPLG</option>
                <option value="MPLB" <?php echo ($hasil['nama_kelas'] == 'MPLB') ? 'selected' : ''; ?>>MPLB</option>
                <option value="BCF" <?php echo ($hasil['nama_kelas'] == 'BCF') ? 'selected' : ''; ?>>BCF</option>
                <option value="DKV" <?php echo ($hasil['nama_kelas'] == 'DKV') ? 'selected' : ''; ?>>DKV</option>
                <option value="KULINER" <?php echo ($hasil['nama_kelas'] == 'KULINER') ? 'selected' : ''; ?>>KULINER</option>
            </select>
            <div class="button-container">
                <button type="submit" name="simpan">Simpan</button>
                  <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="basis_data/kelas/hapus.php?id=<?php echo $hasil['id']; ?>" class="cancel-btn">Hapus</a>
                <a href="../../kelas.php" class="cancel-btn">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $kd_kelas = $_POST['kd_kelas'];
    $tingkat = $_POST['tingkat'];
    $nama_kelas = $_POST['nama_kelas'];
    $sql = "UPDATE kelas SET kd_kelas='$kd_kelas', tingkat='$tingkat', nama_kelas='$nama_kelas' WHERE id='$id'";

    // cek apakah proses simpan berhasil
    if (mysqli_query($koneksi, $sql)) {
        // jika berhasil, redirect ke index.php
        header('Location: ../../kelas.php');
    } else {
        // jika tidak berhasil
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }
}
?>
