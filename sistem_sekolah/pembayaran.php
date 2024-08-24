<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rencana dan Realisasi Pembayaran SPP</title>
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
        .status {
            font-weight: bold;
        }
        .terbayar {
            color: green;
        }
        .belum-dibayar {
            color: red;
        }
        .clickable {
            cursor: pointer;
            color: #007BFF;
            text-decoration: underline;
        }
        .clickable:hover {
            color: #0056b3;
        }
        #form-container {
            display: none;
            margin: 20px 0;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 4px;
        }
        #form-container input {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Rencana dan Realisasi Pembayaran SPP</h1>
    <table>
        <caption>Tabel Rencana dan Realisasi Pembayaran SPP</caption>
        <thead>
            <tr>
                <th>Bulan</th>
                <th>Rencana Pembayaran</th>
                <th>Realisasi Pembayaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr onclick="showForm('Januari 2024')">
                <td class="clickable">Januari 2024</td>
                <td>Rp 100.000</td>
                <td>Rp 0</td>
                <td class="status belum-dibayar">Belum Dibayar</td>
            </tr>
            <tr onclick="showForm('Februari 2024')">
                <td class="clickable">Februari 2024</td>
                <td>Rp 500.000</td>
                <td>Rp 0</td>
                <td class="status belum-dibayar">Belum Dibayar</td>
            </tr>
            <tr onclick="showForm('Maret 2024')">
                <td class="clickable">Maret 2024</td>
                <td>Rp 500.000</td>
                <td>Rp 500.000</td>
                <td class="status terbayar">Terbayar</td>
            </tr>
            <!-- Tambahkan baris tambahan sesuai kebutuhan -->
        </tbody>
    </table>

    <div id="form-container">
        <h2>Form Input Pembayaran</h2>
        <form id="payment-form">
            <input type="hidden" id="month" name="month">
            <label for="planned">Rencana Pembayaran:</label>
            <input type="text" id="planned" name="planned">
            <label for="realized">Realisasi Pembayaran:</label>
            <input type="text" id="realized" name="realized">
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="Terbayar">Terbayar</option>
                <option value="Belum Dibayar">Belum Dibayar</option>
            </select>
            <button type="submit">Simpan</button>
            <button type="button" onclick="hideForm()">Batal</button>
        </form>
    </div>

    <script>
        function showForm(month) {
            document.getElementById('form-container').style.display = 'block';
            document.getElementById('month').value = month;
            // Populate form with current values
            // This example assumes that the form fields are already filled in.
            // In a real application, you would fetch the current values from a server or database.
        }

        function hideForm() {
            document.getElementById('form-container').style.display = 'none';
        }

        document.getElementById('payment-form').addEventListener('submit', function(event) {
            event.preventDefault();
            // Handle form submission, e.g., send data to server
            alert('Data berhasil disimpan!');
            hideForm();
        });
    </script>
</body>
</html>
