<?php 
include "config/koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$siswa = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pembayaran SPP Sekolah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 70%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #007bff;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[readonly] {
            background-color: #f0f0f0;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn {
            padding: 10px 15px;
            margin-right: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-save {
            background-color: #28a745;
            color: #fff;
        }
        .btn-cancel {
            background-color: #dc3545;
            color: #fff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 16px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Aplikasi Pembayaran SPP Sekolah</h2>
        <form id="paymentForm">
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" id="nisn" name="nisn" value="<?php echo $siswa['nisn']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal-bayar">Tanggal Bayar</label>
                <input type="date" id="tanggal-bayar" value="2024-09-13" required>
            </div>
            <div class="form-group">
                <label for="jumlah-bayar">Jumlah Bayar</label>
                <input type="text" id="jumlah-bayar" placeholder="Masukkan jumlah bayar" required>
            </div>
            <div class="form-group">
                <label for="total-bayar">Total Bayar</label>
                <input type="text" id="total-bayar" value="100000" readonly>
            </div>
            <!-- Status is now automatically calculated, so we remove it from the form -->
            <button type="submit" class="btn btn-save">Simpan</button>
            <button type="button" class="btn btn-cancel" id="cancelBtn">Batal</button>
        </form>

        <!-- Section for displaying the report -->
        <div id="reportSection" class="hidden">
            <h3>Laporan Pembayaran SPP</h3>
            <table>
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>Jumlah Bayar</th>
                        <th>Sisa Bayar</th>
                        <th>Total Bayar</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="reportTableBody">
                    <!-- Table content will be added here dynamically -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.getElementById('paymentForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting the usual way

            // Get the form values
            const nisn = document.getElementById('nisn').value;
            const jumlahBayar = parseFloat(document.getElementById('jumlah-bayar').value);
            const totalBayar = parseFloat(document.getElementById('total-bayar').value);

            // Calculate the sisa bayar (remaining payment)
            const sisaBayar = totalBayar - jumlahBayar;

            // Determine status based on whether the jumlah bayar meets or exceeds total bayar
            const status = jumlahBayar >= totalBayar ? 'LUNAS' : 'BELUM LUNAS';

            // Display the report section
            const reportSection = document.getElementById('reportSection');
            reportSection.classList.remove('hidden');

            // Insert the data into the table
            const reportTableBody = document.getElementById('reportTableBody');
            reportTableBody.innerHTML = ` 
                <tr>
                    <td>${nisn}</td>
                    <td>Rp. ${jumlahBayar.toFixed(2)}</td>
                    <td>Rp. ${sisaBayar.toFixed(2)}</td>
                    <td>Rp. ${totalBayar.toFixed(2)}</td>
                    <td>${status}</td>
                    <td>
                        <button class="btn btn-pay">Bayar</button>
                        <button class="btn btn-print">Cetak</button>
                    </td>
                </tr>
            `;
        });

        document.getElementById('cancelBtn').addEventListener('click', function() {
            // Navigate back to the previous page
            window.history.back();
        });
    </script>
</body>
</html>
