<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Denda Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: cyan; /* Mengubah latar belakang menjadi cyan */
        }
        h1 {
            text-align: center;
        }
        form {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .hidden {
            display: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    <script>
        function hitungDenda() {
            // Mendapatkan input dari pengguna
            const tanggalPeminjaman = new Date(document.getElementById("tanggalPeminjaman").value);
            const tanggalPengembalian = new Date(document.getElementById("tanggalPengembalian").value);

            // Tarif denda per hari
            const dendaPerHari = 1000;

            // Menghitung selisih hari
            const selisihWaktu = tanggalPengembalian - tanggalPeminjaman;
            const selisihHari = Math.ceil(selisihWaktu / (1000 * 60 * 60 * 24));

            // Menghitung denda
            let denda = 0;
            const satuBulan = 30; // Asumsi satu bulan setara dengan 30 hari

            if (selisihHari > satuBulan) {
                // Menghitung hari terlambat di luar satu bulan
                const hariTerlambat = selisihHari - satuBulan;
                denda = hariTerlambat * dendaPerHari;
            }

            // Menampilkan hasil di tabel
            document.getElementById("hasilDenda").innerHTML = `
                <table>
                    <tr>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Jumlah Hari Terlambat</th>
                        <th>Denda (Rp1000 per hari)</th>
                    </tr>
                    <tr>
                        <td>${tanggalPeminjaman.toISOString().split('T')[0]}</td>
                        <td>${tanggalPengembalian.toISOString().split('T')[0]}</td>
                        <td>${selisihHari > 0 ? selisihHari : 0}</td>
                        <td>${denda}</td>
                    </tr>
                </table>`;

            // Menampilkan tombol Proses
            document.getElementById("btnProses").classList.remove("hidden");
        }

        function prosesDenda() {
            alert("Denda sudah diproses. Terima kasih!");
            // Tambahkan logika untuk memproses denda di sini
            // Misalnya, kirim data ke server atau simpan di local storage
        }
    </script>
</head>
<body>
    <h1>Penghitungan Pinjaman Perpustakaan</h1>
    <form onsubmit="event.preventDefault(); hitungDenda();">
        <label for="tanggalPeminjaman">Tanggal Peminjaman:</label>
        <input type="date" id="tanggalPeminjaman" required>
        <label for="tanggalPengembalian">Tanggal Pengembalian:</label>
        <input type="date" id="tanggalPengembalian" required>
        <button type="submit">Hitung Denda</button>
    </form>
    <div id="hasilDenda"></div>
    <button id="btnProses" class="hidden" onclick="prosesDenda()">Proses</button>
</body>
</html>
