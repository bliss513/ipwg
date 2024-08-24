<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Transaksi Pembayaran SPP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #ffffff;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        caption {
            font-size: 1.5em;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Transaksi Pembayaran SPP</h1>
    <table>
        <caption>Tabel Transaksi Pembayaran SPP</caption>
        <thead>
            <tr>
                <th>No. Transaksi</th>
                <th>Nama Siswa</th>
                <th>Bulan</th>
                <th>Jumlah Pembayaran</th>
                <th>Tanggal Transaksi</th>
                <th>Metode Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>TR001</td>
                <td>Alice Smith</td>
                <td>Januari 2024</td>
                <td>Rp 500.000</td>
                <td>2024-01-15</td>
                <td>Transfer Bank</td>
            </tr>
            <tr>
                <td>TR002</td>
                <td>Bob Johnson</td>
                <td>Februari 2024</td>
                <td>Rp 500.000</td>
                <td>2024-02-10</td>
                <td>e-Wallet</td>
            </tr>
            <tr>
                <td>TR003</td>
                <td>Charlie Brown</td>
                <td>Maret 2024</td>
                <td>Rp 500.000</td>
                <td>2024-03-05</td>
                <td>Kartu Kredit</td>
            </tr>
            <!-- Tambahkan baris tambahan sesuai kebutuhan -->
        </tbody>
    </table>
</body>
</html>
