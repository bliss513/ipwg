<!DOCTYPE html>
<html>
<head>
    <title>Menambah Data Mahasiswa</title>
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
        select option {
            font-size: 16px; /* Memperbesar ukuran font */
            line-height: 1.5em; /* Menambahkan tinggi baris */
        }
        .button-container {
            display: flex;
            justify-content: space-between;
        }
        button[type="submit"], .cancel-btn {
            background-color: #4CAF50;
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
        <h1>Tambah Data</h1>
        <form method="post" action="tambah.php">
            <label for="id">id</label>
            <input type="text" id="id" name="id">
            <label for="nip">nip</label>
            <input type="text" id="nip" name="nip">
            <label for="nama_guru">nama_guru</label>
            <input type="text" id="nama_guru" name="nama_guru">
            <div class="button-container">
                <button type="submit" name="simpan">Simpan</button>
                <a href="../../guru.php" class="cancel-btn">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
