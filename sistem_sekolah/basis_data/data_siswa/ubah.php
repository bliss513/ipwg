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
        <h1>Ubah Data</h1>
        <form method="post" action="">
            <div class="form-grid">
                <!-- Left Column (2 items) -->
                <div class="input-group">
                    <label for="id">Id</label>
                    <input type="text" id="id" name="id" value="<?php echo htmlspecialchars($hasil['id']);?>" readonly>
                </div>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($hasil['username']);?>">
                </div>

                <!-- Center Column (4 items) -->
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" value="<?php echo htmlspecialchars($hasil['password']);?>">
                </div>
                <div class="input-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($hasil['nama']);?>">
                </div>
                <div class="input-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin">
                        <option value="L" <?php echo $hasil['jenis_kelamin'] == 'L' ? 'selected' : ''; ?>>Laki-laki</option>
                        <option value="P" <?php echo $hasil['jenis_kelamin'] == 'P' ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="nisn">Nisn</label>
                    <input type="text" id="nisn" name="nisn" value="<?php echo htmlspecialchars($hasil['nisn']);?>">
                </div>

                <!-- Bottom Center Column (4 items) -->
                <div class="input-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?php echo htmlspecialchars($hasil['tempat_lahir']);?>">
                </div>
                <div class="input-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo htmlspecialchars($hasil['tanggal_lahir']);?>">
                </div>
                <div class="input-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" value="<?php echo htmlspecialchars($hasil['alamat']);?>">
                </div>
                
                <!-- Right Column (2 items) -->
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($hasil['email']);?>">
                </div>
                <div class="input-group">
                    <label for="foto">Foto</label>
                    <input type="text" id="foto" name="foto" value="<?php echo htmlspecialchars($hasil['foto']);?>">
                </div>

                <!-- Additional Right Column (remaining items) -->
                <div class="input-group">
                    <label for="nama_wali">Nama Wali</label>
                    <input type="text" id="nama_wali" name="nama_wali" value="<?php echo htmlspecialchars($hasil['nama_wali']);?>">
                </div>
                <div class="input-group">
                    <label for="tahun_lahir_wali">Tahun Lahir Wali</label>
                    <input type="text" id="tahun_lahir_wali" name="tahun_lahir_wali" value="<?php echo htmlspecialchars($hasil['tahun_lahir_wali']);?>">
                </div>
                <div class="input-group">
                    <label for="pendidikan_wali">Pendidikan Wali</label>
                    <input type="text" id="pendidikan_wali" name="pendidikan_wali" value="<?php echo htmlspecialchars($hasil['pendidikan_wali']);?>">
                </div>
                <div class="input-group">
                    <label for="pekerjaan_wali">Pekerjaan Wali</label>
                    <input type="text" id="pekerjaan_wali" name="pekerjaan_wali" value="<?php echo htmlspecialchars($hasil['pekerjaan_wali']);?>">
                </div>
                <div class="input-group">
                    <label for="penghasilan_wali">Penghasilan Wali</label>
                    <input type="text" id="penghasilan_wali" name="penghasilan_wali" value="<?php echo htmlspecialchars($hasil['penghasilan_wali']);?>">
                </div>
                <div class="input-group">
                    <label for="angkatan">Angkatan</label>
                    <input type="text" id="angkatan" name="angkatan" value="<?php echo htmlspecialchars($hasil['angkatan']);?>">
                </div>
                <div class="input-group">
                    <label for="spp_nominal">SPP Nominal</label>
                    <input type="text" id="spp_nominal" name="spp_nominal" value="<?php echo htmlspecialchars($hasil['spp_nominal']);?>">
                </div>
                <div class="input-group">
                    <label for="nomer_hp">Nomer HP</label>
                    <input type="text" id="nomer_hp" name="nomer_hp" value="<?php echo htmlspecialchars($hasil['nomer_hp']);?>">
                </div>
            </div>

        
            <div class="button-container">
                <a href="../../button.php" class="cancel-btn">Batal</a>
                <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="hapus.php?id=<?php echo urlencode($hasil['id']); ?>" class="delete-btn">Hapus</a>
            </div>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
    $nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
    $tempat_lahir = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
    $tanggal_lahir = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $foto = mysqli_real_escape_string($koneksi, $_POST['foto']);
    $nama_wali = mysqli_real_escape_string($koneksi, $_POST['nama_wali']);
    $tahun_lahir_wali = mysqli_real_escape_string($koneksi, $_POST['tahun_lahir_wali']);
    $pendidikan_wali = mysqli_real_escape_string($koneksi, $_POST['pendidikan_wali']);
    $pekerjaan_wali = mysqli_real_escape_string($koneksi, $_POST['pekerjaan_wali']);
    $penghasilan_wali = mysqli_real_escape_string($koneksi, $_POST['penghasilan_wali']);
    $angkatan = mysqli_real_escape_string($koneksi, $_POST['angkatan']);
    $spp_nominal = mysqli_real_escape_string($koneksi, $_POST['spp_nominal']);
    $nomer_hp = mysqli_real_escape_string($koneksi, $_POST['nomer_hp']);

    $sql = "UPDATE siswa SET 
        username='$username', password='$password', nama='$nama', jenis_kelamin='$jenis_kelamin', nisn='$nisn', 
        tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', hp='$hp', email='$email', 
        foto='$foto', nama_wali='$nama_wali', tahun_lahir_wali='$tahun_lahir_wali', pendidikan_wali='$pendidikan_wali', 
        pekerjaan_wali='$pekerjaan_wali', penghasilan_wali='$penghasilan_wali', angkatan='$angkatan', 
        spp_nominal='$spp_nominal', nomer_hp='$nomer_hp' 
        WHERE id='$id'";

    if (mysqli_query($koneksi, $sql)) {
        header('Location: ../../button.php');
        exit();
    } else {
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil: " . mysqli_error($koneksi);
    }
}
?>
