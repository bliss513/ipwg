<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>perpus</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #FFFF00;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    .header {
        background-color: #0000FF;
        color: white;
        text-align: center;
        padding: 25px 0;
    }
    .container {
        max-width: 900px;
        margin: 25px auto;
        background-color: white;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        flex: 1; /* This makes the container take up the remaining space */
    }
    h1 {
        font-size: 32px;
        margin-bottom: 10px;
        text-align: center;
    }
    p {
        font-size: 18px;
        margin-bottom: 20px;
        text-align: center;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table, th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }
    th {
        background-color: #0000FF; /* Blue color for headers */
        color: white;
    }
    th, td {
        font-size: 16px;
    }
    a {
        text-decoration: none;
        color: #FF0000;
        transition: color 0.3s;
        font-weight: bold; /* Make link text bold */
    }
    a:hover {
        color: #45a049;
    }
    button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 12px 20px;
        cursor: pointer;
        border-radius: 4px;
        font-size: 16px;
        transition: background-color 0.3s;
    }
    button:hover {
        background-color: #45a049;
    }
    .footer {
        text-align: center;
        padding: 20px;
        background-color: #0000FF;
        color: white;
    }
    .action-container {
        display: flex;
        justify-content: space-between;
        gap: 10px; /* Add spacing between links */
    }
</style>
</head>
<body>
    <div class="header">
        <h1>Daftar Siswa Siswi</h1>
        <img src="ip.png" alt="Logo sekolah" style="width: 120px; height: auto; margin-right: 10px;">
        <h1>Smk Ma'arif Walisongo Kajoran</h1>
    </div>

    <div class="container">
        <button><a href="form_tambah.php" style="color: white;">Tambah</a></button>
        
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>judul</th>
                    <th>pengarang</th>
                    <th>id_genre</th>
                    <th>tentang_buku</th>
                    <th>status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";

                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM buku");
                    while ($hasil = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $hasil['id']; ?></td>
                    <td><?php echo $hasil['judul']; ?></td>
                    <td><?php echo $hasil['pengarang']; ?></td>
                    <td><?php echo $hasil['id_genre']; ?></td>
                    <td><?php echo $hasil['tentang_buku']; ?></td>
                    <td><?php echo $hasil['status']; ?></td>
                    <td class="action-container">
                        <a href="ubah.php?id=<?php echo $hasil['id']; ?>" style="color: #0000FF;">Ubah</a>
                        <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="hapus.php?id=<?php echo $hasil['id']; ?>" style="color: #0000FF;">Hapus</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
                
            </tbody>
        </table>
    </div>
    
    <div class="footer">
        <p>&copy; 2024 Smk Ma'arif Walisongo Kajoran. All rights reserved.</p>
    </div>
</body>
</html>
