<?php
include "../../config/koneksi.php";

if (isset($_POST['simpan'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $nip = mysqli_real_escape_string($koneksi, $_POST['nip']);
    $sekolah = mysqli_real_escape_string($koneksi, $_POST['sekolah']);
    $nama_guru = mysqli_real_escape_string($koneksi, $_POST['nama_guru']);
    $jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
    $tempat_lahir = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
    $tanggal_lahir = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
    $nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
    $pengawas_bidang_studi = mysqli_real_escape_string($koneksi, $_POST['pengawas_bidang_studi']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $hp = mysqli_real_escape_string($koneksi, $_POST['hp']);
    $foto = mysqli_real_escape_string($koneksi, $_POST['foto']);

    $sql = "INSERT INTO `guru` 
    (`id`, `username`, `password`, `nip`, `sekolah`, `nama_guru`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nik`, `pengawas_bidang_studi`, `alamat`, `hp`, `foto`) VALUES 
    (NULL, '$username', '$password', '$nip', '$sekolah', '$nama_guru', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$nik', '$pengawas_bidang_studi', '$alamat', '$hp', '$foto')";
    if (mysqli_query($koneksi, $sql)) {
        header('Location: ../../guru.php');
        exit();
    } else {
        echo "Oups.... Maaf, proses penyimpanan data tidak berhasil: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html> 
<head>
    <title>Mengubah Data guru</title>
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
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 1200px; /* Increased width */
}

h1 {
    font-size: 28px; /* Increased font size */
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: #555;
}

input[type="text"], input[type="number"], input[type="email"], input[type="date"], select {
    width: 100%;
    padding: 10px 15px; /* Adjusted padding for a more streamlined look */
    margin-bottom: 20px;
    border: none; /* Remove default border */
    border-bottom: 2px solid #ccc; /* Add bottom border */
    border-radius: 0; /* Remove border radius for a straight line */
    box-sizing: border-box;
}

input[type="text"]:focus, input[type="number"]:focus, input[type="email"]:focus, input[type="date"]:focus, select:focus {
    border-bottom-color: #4CAF50; /* Change border color on focus */
    outline: none; /* Remove default outline */
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr) repeat(3, 1fr);
    grid-template-rows: auto auto;
    gap: 20px;
    align-items: start;
}

.form-grid .input-group {
    display: flex;
    flex-direction: column;
    padding: 0 15px;
    background: #fff;
}

.form-grid .input-group:nth-child(-n+3) {
    grid-column: span 1;
}

.form-grid .input-group:nth-child(4), .form-grid .input-group:nth-child(5) {
    grid-column: span 2;
}

.form-grid .input-group:nth-child(6), .form-grid .input-group:nth-child(7) {
    grid-column: span 3;
}

.button-container {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 20px;
}

button[type="submit"], .cancel-btn, .delete-btn {
    padding: 15px 30px; /* Increased padding */
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    font-size: 18px; /* Increased font size */
    transition: background-color 0.3s ease;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
}

.cancel-btn {
    background-color: #ff9800;
    color: white;
}

.delete-btn {
    background-color: #f44336;
    color: white;
    text-decoration: none;
}

button[type="submit"]:hover, .cancel-btn:hover, .delete-btn:hover {
    opacity: 0.9;
}
</style>
</head>
<body>
    <div class="container">
        <h1>data guru</h1>
        <form method="post" action="">
            <div class="form-grid">
                <!-- Left Column (2 items) -->
                <div class="input-group">
                    <label for="id">Id</label>
                    <input type="text" id="id" name="id" value="" readonly>
                </div>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="">
                </div>

                <!-- Center Column (4 items) -->
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" value="">
                </div>
                <div class="input-group">
                    <label for="nip">NIP</label>
                    <input type="text" id="nip" name="nip" value="">
                </div>
                <div class="input-group">
                    <label for="sekolah">Sekolah</label>
                    <input type="text" id="sekolah" name="sekolah" value="">
                </div>
                <div class="input-group">
                    <label for="nama_guru">Nama Guru</label>
                    <input type="text" id="nama_guru" name="nama_guru" value="">
                </div>

                <!-- Bottom Center Column (3 items) -->
                <div class="input-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin">
                        <option value="L" >Laki-laki</option>
                        <option value="P" >Perempuan</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" value="">
                </div>
                <div class="input-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="">
                </div>

                <!-- Right Column (3 items) -->
                <div class="input-group">
                    <label for="nik">NIK</label>
                    <input type="text" id="nik" name="nik" value="">
                </div>
                <div class="input-group">
                    <label for="pengawas_bidang_studi">Pengawas Bidang Studi</label>
                    <input type="text" id="pengawas_bidang_studi" name="pengawas_bidang_studi" value="">
                </div>
                <div class="input-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" value="">
                </div>
                <div class="input-group">
                    <label for="hp">HP</label>
                    <input type="text" id="hp" name="hp" value="">
                </div>
                <div class="input-group">
                         <label for="foto">Foto</label>
                    <input type="text" id="foto" name="foto" value="">
                </div>
            </div>

            <div class="button-container">
                <a href="../../guru.php" class="cancel-btn">Batal</a>
                <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="hapus.php?id=<?php echo urlencode($hasil['id']); ?>" class="delete-btn">Hapus</a>
                <button type="submit" name="simpan">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
