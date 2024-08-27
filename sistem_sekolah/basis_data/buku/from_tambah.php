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
            <label for="judul">judul</label>
            <input type="text" id="judul" name="judul">
            <label for="pengarang">pengarang</label>
            <input type="text" id="pengarang" name="pengarang">
            <label for="id_genre">id genre</label>
            <input type="text" id="id genre" name="id_genre">
            <label for="tentang_buku">tentang buku</label>
            <input type="text" id="tentang_buku" name="tentang_buku">
            <label for="status">status</label>
            <select id="status" name="status">
                <option value="tersedia">tersedia</option>
                <option value="dipinjam">dipinjam</option>
                <option value="sudah_dikembalikaan">sudah dikembalikan</option>
                <option value="lewat_tempo">lewat tempo</option>
            </select>
            <div class="button-container">
                <button type="submit" name="simpan">Simpan</button>
                <a href="../../element.php" class="cancel-btn">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
