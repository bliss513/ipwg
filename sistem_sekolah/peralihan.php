<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Nama dan Peralihan Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #f3f0f6; /* Latar belakang tabel */
        }
        th, td {
            border: 1px solid #6c757d; /* Border tabel warna abu-abu */
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #6f42c1; /* Warna latar belakang header tabel ungu */
            color: white; /* Warna teks header tabel putih */
        }
        .checked {
            background-color: #d4edda;
        }
        .button-container {
            text-align: right;
        }
        .process-button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #6f42c1; /* Warna latar belakang tombol ungu */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .process-button:hover {
            background-color: #5a2a7a; /* Warna latar belakang tombol ungu gelap saat hover */
        }
    </style>
</head>
<body>
    <h1>Tabel Nama dan Peralihan Kelas</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Naik Kelas</th>
            </tr>
        </thead>
        <tbody id="name-table">
            <tr>
                <td>John Doe</td>
                <td><input type="checkbox" class="class-switch" onchange="toggleHighlight(this)"></td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td><input type="checkbox" class="class-switch" onchange="toggleHighlight(this)"></td>
            </tr>
            <tr>
                <td>Emily Johnson</td>
                <td><input type="checkbox" class="class-switch" onchange="toggleHighlight(this)"></td>
            </tr>
        </tbody>
    </table>

    <div class="button-container">
        <button class="process-button" onclick="processChanges()">Proses</button>
    </div>

    <script>
        function toggleHighlight(checkbox) {
            const tableRow = checkbox.parentElement.parentElement;
            if (checkbox.checked) {
                tableRow.classList.add('checked');
            } else {
                tableRow.classList.remove('checked');
            }
        }

        function processChanges() {
            const rows = document.querySelectorAll('#name-table tr');
            rows.forEach(row => {
                const checkbox = row.querySelector('input[type="checkbox"]');
                const name = row.querySelector('td').innerText;
                const status = checkbox.checked ? 'Naik Kelas' : 'Tidak Naik Kelas';
                console.log(`${name}: ${status}`);
            });
            alert('Perubahan telah diproses! Cek konsol untuk detail.');
        }
    </script>
</body>
</html>
