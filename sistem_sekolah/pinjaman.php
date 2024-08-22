<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pinjaman Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: cyan; /* Mengubah latar belakang menjadi cyan */
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

        .form-container, .table-container {
            margin-bottom: 20px;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .form-container .form-item {
            flex: 1;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input, select {
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px; /* Adjust margin to add space between form and table */
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left; /* Default alignment for text */
        }

        th {
            background-color: #f4f4f4;
        }

        td:nth-child(1) {
            text-align: left; /* Align first column (Judul) to the left */
        }

        td:nth-child(2) {
            text-align: right; /* Align second column (Status) to the right */
        }

        th:nth-child(1) {
            text-align: left; /* Align header of first column (Judul) to the left */
        }

        th:nth-child(2) {
            text-align: right; /* Align header of second column (Status) to the right */
        }

        .share-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        .share-button:hover {
            background-color: #0056b3;
        }

        .button-container {
            display: flex;
            justify-content: flex-end; /* Align button to the right */
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistem Pinjaman Perpustakaan</h1>
        
        <div class="form-container">
            <div class="form-item">
                <label for="judul">Judul:</label>
                <input type="text" id="judul" required>
            </div>
            <div class="form-item">
                <label for="status">Status:</label>
                <select id="status" required>
                    <option value="Dipinjam">Dipinjam</option>
                    <option value="Kembali">Kembali</option>
                </select>
            </div>
        </div>
        
        <div class="button-container">
            <button type="submit">Proses</button>
        </div>
        
        <div class="table-container">
            <h2>Daftar Pinjaman</h2>
            <table id="pinjamanTable">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="pinjamanTableBody">
                    <!-- Data akan diisi menggunakan JavaScript -->
                </tbody>
            </table>
            <button class="share-button" id="shareButton">Bagikan Data</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
