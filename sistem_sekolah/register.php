<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .form-container h2 {
            text-align: center;
            width: 100%;
        }
        .form-container .form-item {
            flex: 1 1 calc(50% - 20px); /* 50% width minus gap */
            min-width: 200px;
        }
        .form-container label {
            display: block;
            margin-top: 10px;
        }
        .form-container input, .form-container select, .form-container textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-container button {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            flex: 1 1 100%; /* Button takes full width */
        }
        .form-container button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2>Pendaftaran Siswa</h2>
    <div class="form-item">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required>
    </div>
    <div class="form-item">
        <label for="nama">nama lengkap:</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div class="form-item">
        <label for="username">username:</label>
        <input type="username" id="username" name="username" required>
    </div>
    <div class="form-item">
        <label for="password">password:</label>
        <input type="text" id="password" name="password" required>
    </div>
    <div class="form-item">
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div class="form-item">
        <label for="nisn">NISN:</label>
        <input type="text" id="nisn" name="nisn" required>
    </div>
    <div class="form-item">
        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required>
    </div>
    <div class="form-item">
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
    </div>
    <div class="form-item">
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>
    </div>
    <div class="form-item">
        <label for="nomor_hp">Nomor HP:</label>
        <input type="text" id="nomor_hp" name="nomor_hp" required>
    </div>
    <div class="form-item">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-item">
        <label for="foto">Foto (URL):</label>
        <input type="url" id="foto" name="foto">
    </div>
    <div class="form-item">
        <label for="nama_wali">Nama Wali:</label>
        <input type="text" id="nama_wali" name="nama_wali" required>
    </div>
    <div class="form-item">
        <label for="tahun_lahir_wali">Tahun Lahir Wali:</label>
        <input type="number" id="tahun_lahir_wali" name="tahun_lahir_wali" required>
    </div>
    <div class="form-item">
        <label for="pendidikan_wali">Pendidikan Wali:</label>
        <input type="text" id="pendidikan_wali" name="pendidikan_wali" required>
    </div>
    <div class="form-item">
        <label for="pekerjaan_wali">Pekerjaan Wali:</label>
        <input type="text" id="pekerjaan_wali" name="pekerjaan_wali" required>
    </div>
    <div class="form-item">
        <label for="penghasilan_wali">Penghasilan Wali:</label>
        <input type="number" id="penghasilan_wali" name="penghasilan_wali" required>
    </div>
    <div class="form-item">
        <label for="angkatan">Angkatan:</label>
        <input type="number" id="angkatan" name="angkatan" required>
    </div>
    <div class="form-item">
        <label for="spp_nominal">Nominal SPP:</label>
        <input type="number" id="spp_nominal" name="spp_nominal" required>
    </div>
    <div class="form-item">
        <label for="nomer">Nomer:</label>
        <input type="text" id="nomer" name="nomer" required>
    </div>
    <button type="button" onclick="submitRegistration()">Daftar</button>
</div>

<script>
    function submitRegistration() {
        const id = document.getElementById('id').value;
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const nama = document.getElementById('nama').value;
        const jenisKelamin = document.getElementById('jenis_kelamin').value;
        const nisn = document.getElementById('nisn').value;
        const tempatLahir = document.getElementById('tempat_lahir').value;
        const tanggalLahir = document.getElementById('tanggal_lahir').value;
        const alamat = document.getElementById('alamat').value;
        const nomorHp = document.getElementById('nomor_hp').value;
        const email = document.getElementById('email').value;
        const foto = document.getElementById('foto').value;
        const namaWali = document.getElementById('nama_wali').value;
        const tahunLahirWali = document.getElementById('tahun_lahir_wali').value;
        const pendidikanWali = document.getElementById('pendidikan_wali').value;
        const pekerjaanWali = document.getElementById('pekerjaan_wali').value;
        const penghasilanWali = document.getElementById('penghasilan_wali').value;
        const angkatan = document.getElementById('angkatan').value;
        const sppNominal = document.getElementById('spp_nominal').value;
        const nomer = document.getElementById('nomer').value;

        // Create a text representation of the data
        const registrationData = `
ID: ${id}
Username: ${username}
Password: ${password}
Nama Lengkap: ${nama}
Jenis Kelamin: ${jenisKelamin}
NISN: ${nisn}
Tempat Lahir: ${tempatLahir}
Tanggal Lahir: ${tanggalLahir}
Alamat: ${alamat}
Nomor HP: ${nomorHp}
Email: ${email}
Foto: ${foto}
Nama Wali: ${namaWali}
Tahun Lahir Wali: ${tahunLahirWali}
Pendidikan Wali: ${pendidikanWali}
Pekerjaan Wali: ${pekerjaanWali}
Penghasilan Wali: ${penghasilanWali}
Angkatan: ${angkatan}
Nominal SPP: ${sppNominal}
Nomer: ${nomer}

        `;

        // Save to localStorage (for demonstration purposes)
        localStorage.setItem('registrationData', registrationData);

        alert('Pendaftaran berhasil! Data disimpan.');
    }
</script>
</body> 
</html>
