<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pinjaman Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 900px;
    margin: auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

h1, h2 {
    color: #333;
}

.form-container, .list-container {
    margin-bottom: 20px;
}

label {
    display: block;
    margin: 10px 0 5px;
}

input, select, textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    background-color: #28a745;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

ul {
    list-style: none;
    padding: 0;
}

li {
    background: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin: 5px 0;
    padding: 10px;
}
</style>
    <div class="container">
        <h1>Sistem Pinjaman Perpustakaan</h1>
        
        <div class="form-container">
            <h2>Tambah Pinjaman</h2>
            <form id="pinjamanForm">
                <label for="id_buku">ID Buku:</label>
                <input type="text" id="id_buku" required>
                
                <label for="id_siswa">ID Siswa:</label>
                <input type="text" id="id_siswa" required>
                
                <label for="tanggal_pinjam">Tanggal Pinjam:</label>
                <input type="date" id="tanggal_pinjam" required>
                
                <label for="tanggal_rencana_pengembalian">Tanggal Rencana Pengembalian:</label>
                <input type="date" id="tanggal_rencana_pengembalian" required>
                
                <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
                <input type="date" id="tanggal_pengembalian">
                
                <label for="status">Status:</label>
                <select id="status" required>
                    <option value="dipinjam">Dipinjam</option>
                    <option value="kembali">Kembali</option>
                </select>
                
                <label for="keterangan">Keterangan:</label>
                <textarea id="keterangan" rows="3"></textarea>
                
                <button type="submit">Tambah Pinjaman</button>
            </form>
        </div>
        
        <div class="list-container">
            <h2>Daftar Pinjaman</h2>
            <ul id="pinjamanList"></ul>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
