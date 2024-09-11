<?php
include "../../config/koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM buku WHERE id='$id'");
    $hasil = mysqli_fetch_array($data);
}

if (isset($_POST['simpan'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $pengarang = mysqli_real_escape_string($koneksi, $_POST['pengarang']);
    $id_genre = mysqli_real_escape_string($koneksi, $_POST['id_genre']);
    $tentang_buku = mysqli_real_escape_string($koneksi, $_POST['tentang_buku']);
    $status = mysqli_real_escape_string($koneksi, $_POST['status']);

    $sql = "UPDATE buku SET 
        judul='$judul', pengarang='$pengarang', id_genre='$id_genre', tentang_buku='$tentang_buku', status='$status'
        WHERE id='$id'";

    if (mysqli_query($koneksi, $sql)) {
        header('Location: ../../element.php');
        exit();
    } else {
        echo "Oups.... Maaf, proses penyimpanan data tidak berhasil: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html> 
<head>
    <title>Mengubah Data Buku</title>
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

        input[type="text"], input[type="number"], input[type="email"], textarea, select {
            width: 100%;
            padding: 10px 15px; /* Adjusted padding for a more streamlined look */
            margin-bottom: 20px;
            border: none; /* Remove default border */
            border-bottom: 2px solid #ccc; /* Add bottom border */
            border-radius: 0; /* Remove border radius for a straight line */
            box-sizing: border-box;
        }

        input[type="text"]:focus, input[type="number"]:focus, input[type="email"]:focus, textarea:focus, select:focus {
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
        <h1>Ubah Data Buku</h1>
        <form method="post" action="">
            <div class="form-grid">
                <!-- Left Column (2 items) -->
                <div class="input-group">
                    <label for="id">Id</label>
                    <input type="text" id="id" name="id" value="<?php echo htmlspecialchars($hasil['id']);?>" readonly>
                </div>
                <div class="input-group">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul" value="<?php echo htmlspecialchars($hasil['judul']);?>">
                </div>

                <!-- Center Column (3 items) -->
                <div class="input-group">
                    <label for="pengarang">Pengarang</label>
                    <input type="text" id="pengarang" name="pengarang" value="<?php echo htmlspecialchars($hasil['pengarang']);?>">
                </div>
                <div class="input-group">
                    <label for="id_genre">ID Genre</label>
                    <input type="text" id="id_genre" name="id_genre" value="<?php echo htmlspecialchars($hasil['id_genre']);?>">
                </div>
                <div class="input-group">
                    <label for="tentang_buku">Tentang Buku</label>
                    <input type="text" id="tentang_buku" name="tentang_buku" value="<?php echo htmlspecialchars($hasil['tentang_buku']);?>">
                </div>

                <!-- Right Column (1 item) -->
                <div class="input-group">
                    <label for="status">Status</label>
           <select id="status" name="status">
                <option value="tersedia">tersedia</option>
                <option value="dipinjam">dipinjam</option>
                <option value="sudah_dikembalikaan">sudah dikembalikan</option>
                <option value="lewat_tempo">lewat tempo</option>
            </select>
                </div>
            </div>

            <div class="button-container">
                <a href="../../element.php" class="cancel-btn">Batal</a>
                <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="hapus.php?id=<?php echo urlencode($hasil['id']); ?>" class="delete-btn">Hapus</a>
                <button type="submit" name="simpan">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
