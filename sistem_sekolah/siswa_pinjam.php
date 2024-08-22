<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Peminjaman Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: cyan; /* Menambahkan warna latar belakang cyan */
        }
        .container {
            max-width: 600px;
            margin: 20px auto; /* Menambahkan margin atas dan bawah */
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: white; /* Menambahkan latar belakang putih untuk container */
        }
        h1 {
            text-align: center;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #45a049;
        }
        .records {
            margin-top: 20px;
        }
        .record-item {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistem Peminjaman Buku</h1>
        <form id="loanForm">
            <label for="name">Nama Siswa:</label>
            <input type="text" id="name" required>
            
            <label for="borrowDate">Tanggal Peminjaman:</label>
            <input type="date" id="borrowDate" required>
            
            <label for="returnDate">Tanggal Pengembalian:</label>
            <input type="date" id="returnDate" required>
            
            <button type="submit">Tambah Peminjaman</button>
        </form>
        
        <div class="records" id="recordList">
            <!-- Daftar peminjaman akan muncul di sini -->
        </div>
    </div>

    <script>
        document.getElementById('loanForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form dari refresh halaman
            
            // Ambil data dari form
            const name = document.getElementById('name').value;
            const borrowDate = document.getElementById('borrowDate').value;
            const returnDate = document.getElementById('returnDate').value;
            
            // Validasi tanggal
            if (new Date(returnDate) < new Date(borrowDate)) {
                alert('Tanggal pengembalian harus setelah tanggal peminjaman.');
                return;
            }
            
            // Buat elemen baru untuk data peminjaman
            const recordList = document.getElementById('recordList');
            const recordItem = document.createElement('div');
            recordItem.className = 'record-item';
            recordItem.innerHTML = `
                <strong>Nama Siswa:</strong> ${name}<br>
                <strong>Tanggal Peminjaman:</strong> ${borrowDate}<br>
                <strong>Tanggal Pengembalian:</strong> ${returnDate}
            `;
            
            // Tambahkan ke daftar
            recordList.appendChild(recordItem);
            
            // Reset form
            document.getElementById('loanForm').reset();
        });
    </script>
</body>
</html>
