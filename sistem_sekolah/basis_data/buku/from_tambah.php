<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Tambah Data Siswa</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #2196F3; /* Blue background */
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        background-color: #00BCD4; /* Cyan background */
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 400px; /* Adjust the maximum width as needed */
        margin: auto; /* Center align horizontally */
        text-align: center;
    }
    h1 {
        margin-bottom: 25px;
        font-family: 'Georgia', serif;
        color: #00796b; /* Teal color */
    }
    label {
        display: block;
        margin: 15px 0 5px;
        font-weight: bold;
        color: #00796b; /* Teal color */
    }
    input[type="text"], select {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f1f8e9; /* Light green background */
        color: black; /* Black text color */
        font-weight: bold; /* Bold font weight */
    }
    select option {
        font-size: 16px;
        line-height: 1.5em;
    }
    .button-container {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }
    button[type="submit"], .cancel-btn {
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    button[type="submit"] {
        background-color: #0288D1; /* Brighter blue color */
        color: white;
    }
    .cancel-btn {
        background-color: #EF5350; /* Bright red color */
        color: white;
        margin-left: 10px;
    }
    .cancel-btn a {
        color: white; 
        text-decoration: none;
    }
    button[type="submit"]:hover {
        background-color: #0277BD; /* Darker blue color */
    }
    .cancel-btn:hover {
        background-color: #E53935; /* Darker red color */
    }
    a {
        text-decoration: none;
        color: #00796b; /* Teal color */
        transition: color 0.3s;
        font-weight: bold; /* Make link text bold */
    }
    a:hover {
        color: #004d40; /* Darker teal color */
    }
    .copyright {
        text-align: center;
        margin-top: 20px;
        color: black; /* Black color */
        font-size: 12px;
        font-weight: bold; /* Bold font weight */
    }
    .input-label {
        color: black; /* Black text color */
        font-weight: bold; /* Bold font weight */
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Form Tambah Data</h1>
        <form method="post" action="simpan.php">
            <label for="id" class="input-label">id</label>
            <input type="text" id="id" name="id" required>
            <label for="judul" class="input-label">judul</label>
            <input type="text" id="judul" name="judul" required>
            <label for="pengarang" class="input-label">pengarang</label>
            <input type="text" id="pengarang" name="pengarang" required>
            <label for="id_genre" class="input-label">id_genre</label>
            <input type="text" id="id_genre" name="id_genre" required>
            <label for="tentang_buku" class="input-label">tentang_buku</label>
            <input type="text" id="tentang_buku" name="tentang_buku" required>
            <label for="status" class="input-label">status</label>
            <input type="text" id="status" name="status" required>
            <div class="button-container">
                <button type="submit" name="simpan">Simpan</button>
                <a href="index.php" class="cancel-btn">Batal</a>
            </div>
        </form>
        
        <div class="copyright">
            &copy; 2024 Smk Ma'arif Walisongo Kajoran. All rights reserved.
        </div>
    </div>
</body>
</html>
