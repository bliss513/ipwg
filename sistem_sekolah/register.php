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
            flex: 1 1 calc(50% - 20px);
            /* 50% width minus gap */
            min-width: 200px;
        }

        .form-container label {
            display: block;
            margin-top: 10px;
        }

        .form-container input,
        .form-container select,
        .form-container textarea {
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
            flex: 1 1 100%;
            /* Button takes full width */
        }

        .form-container button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <div class="form-container">
            <h2>Pendaftaran Siswa</h2>
            <div class="form-item">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id">
            </div>
            <div class="form-item">
                <label for="nama">nama lengkap:</label>
                <input type="text" id="nama" name="nama">
            </div>
            <div class="form-item">
                <label for="username">username:</label>
                <input type="username" id="username" name="username">
            </div>
            <div class="form-item">
                <label for="password">password:</label>
                <input type="text" id="password" name="password">
            </div>
            <div class="form-item">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin">
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-item">
                <label for="nisn">NISN:</label>
                <input type="text" id="nisn" name="nisn">
            </div>
            <div class="form-item">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir">
            </div>
            <div class="form-item">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir">
            </div>
            <div class="form-item">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat">
            </div>
            <div class="form-item">
                <label for="nomor_hp">Nomor HP:</label>
                <input type="text" id="nomor_hp" name="nomor_hp">
            </div>
            <div class="form-item">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="form-item">
                <label for="foto">Foto (URL):</label>
                <input type="url" id="foto" name="foto">
            </div>
            <div class="form-item">
                <label for="nama_wali">Nama Wali:</label>
                <input type="text" id="nama_wali" name="nama_wali">
            </div>
            <div class="form-item">
                <label for="tahun_lahir_wali">Tahun Lahir Wali:</label>
                <input type="number" id="tahun_lahir_wali" name="tahun_lahir_wali">
            </div>
            <div class="form-item">
                <label for="pendidikan_wali">Pendidikan Wali:</label>
                <input type="text" id="pendidikan_wali" name="pendidikan_wali">
            </div>
            <div class="form-item">
                <label for="pekerjaan_wali">Pekerjaan Wali:</label>
                <input type="text" id="pekerjaan_wali" name="pekerjaan_wali">
            </div>
            <div class="form-item">
                <label for="penghasilan_wali">Penghasilan Wali:</label>
                <input type="number" id="penghasilan_wali" name="penghasilan_wali">
            </div>
            <div class="form-item">
                <label for="angkatan">Angkatan:</label>
                <input type="number" id="angkatan" name="angkatan">
            </div>
            <div class="form-item">
                <label for="spp_nominal">Nominal SPP:</label>
                <input type="number" id="spp_nominal" name="spp_nominal">
            </div>
            <div class="form-item">
                <label for="nomer">Nomer:</label>
                <input type="text" id="nomer" name="nomer">
            </div>
            <button type="submin">Daftar</button>
        </div>
    </form>

</body>

</html>