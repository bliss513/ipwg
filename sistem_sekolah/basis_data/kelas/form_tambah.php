<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 280px;
        }
        h1 {
            font-size: 18px;
            text-align: center;
            margin-bottom: 15px;
            color: #333;
        }
        label {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 14px;
        }
        button[type="submit"], .cancel-btn {
            display: inline-block;
            width: 48%;
            padding: 8px 0;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-align: center;
            font-size: 14px;
            color: #fff;
            margin-top: 10px;
        }
        button[type="submit"] {
            background-color: #4CAF50;
        }
        .cancel-btn {
            background-color: #f44336;
            text-decoration: none;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Data</h1>
        <form method="post" action="tambah.php">
            <label for="id">ID</label>
            <input type="text" id="id" name="id" required>

            <label for="kd_kelas">Kode Kelas</label>
            <select id="kd_kelas" name="kd_kelas" required>
                <option value="025">025</option>
                <option value="026">026</option>
                <option value="027">027</option>
            </select>

            <label for="tingkat">Tingkat</label>
            <select id="tingkat" name="tingkat" required>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select>

            <label for="nama_kelas">Jurusan</label>
            <input type="text" id="nama_kelas" name="nama_kelas" required>

            <div class="button-container">
                <button type="submit" name="simpan">Simpan</button>
                <a href="../../kelas.php" class="cancel-btn">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
