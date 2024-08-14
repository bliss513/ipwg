<?php
include "../config/koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM buku WHERE id='$id'");
$hasil = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mengubah Data buku</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: cyan; /* Ubah warna latar belakang menjadi cyan */
        }
        .container {
            background: #fff;
            padding: 20px; /* Mengurangi padding untuk memperkecil ukuran tabel */
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px; /* Mengurangi lebar tabel */
        }
        h1 {
            text-align: center;
            margin-bottom: 20px; /* Mengurangi jarak bawah untuk merapikan */
            font-family: 'Georgia', serif;
            color: #333;
        }
        label {
            display: block;
            margin: 10px 0 5px; /* Mengurangi margin untuk merapikan */
            font-weight: bold;
            color: #555;
            text-align: center; /* Menengahkan label */
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px; /* Mengurangi padding untuk memperkecil ukuran input */
            margin: 8px 0; /* Mengurangi margin untuk merapikan */
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
            margin-top: 20px; /* Tambahkan margin atas untuk merapikan */
        }
        button[type="submit"], .cancel-btn {
            background-color: #5A67D8;
            color: white;
            padding: 10px 20px; /* Mengurangi padding untuk memperkecil ukuran tombol */
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
            <label for="id">id</label>
            <input type="text" id="id" name="id" value="<?php echo $hasil['id'];?>" readonly>
            <label for="judul">judul</label>
            <input type="text" id="judul" name="judul" value="<?php echo $hasil['judul'];?>">
            <label for="pengarang">pengarang</label>
            <input type="text" id="pengarang" name="pengarang" value="<?php echo $hasil['pengarang'];?>">
            <label for="id_genre">id_genre</label>
            <input type="text" id="id_genre" name="id_genre" value="<?php echo $hasil['id_genre'];?>">
            <label for="tentang_buku">tentang_buku</label>
            <input type="text" id="tentang_buku" name="tentang_buku" value="<?php echo $hasil['tentang_buku'];?>">
            <label for="status">status</label>
            <input type="text" id="status" name="status" value="<?php echo $hasil['status'];?>">
            <div class="button-container">
                <button type="submit" name="simpan">Simpan</button>
                <a href="index.php" class="cancel-btn">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $id_genre = $_POST['id_genre'];
    $tentang_buku = $_POST['tentang_buku'];
    $status = $_POST['status'];
    
    $sql = "UPDATE buku SET id='$id', judul='$judul', pengarang='$pengarang', id_genre='$id_genre', tentang_buku='$tentang_buku', status='$status' WHERE id='$id'";

    // cek apakah proses simpan berhasil 
    if (mysqli_query($koneksi, $sql)) {
        // jika berhasil, redirect ke index.php
        header('Location: buku.php');
    } else {
        // jika tidak berhasil
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }
}
?>
