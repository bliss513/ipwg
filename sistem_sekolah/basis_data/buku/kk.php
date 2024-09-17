<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Styles -->


    <!-- JavaScript Functions -->
    <script>
        function showActions(row) {
            // Hide all action containers first
            const actionContainers = document.querySelectorAll('.action-container');
            actionContainers.forEach(container => {
                container.style.display = 'none';
            });

            // Show the action container for the clicked row
            const actionContainer = row.querySelector('.action-container');
            if (actionContainer) {
                actionContainer.style.display = 'flex';
            }
        }
    </script>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Content Start -->
        <div class="content">

            <?php include 'header.php'; ?>

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
                <input type="text" id="nisn" name="nisn" required>
            </div>
            <div class="form-group">
                <label for="tanggal-bayar">Tanggal Bayar</label>
                <input type="date" id="tanggal-bayar" required>
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

            <!-- Content End -->
            <?php include 'footer.php'; ?>

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>


    </html><body>
    <div class="container">
        <h2>Aplikasi Pembayaran SPP Sekolah</h2>
        <form id="paymentForm">
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" id="nisn" name="nisn" required>
            </div>
            <div class="form-group">
                <label for="tanggal-bayar">Tanggal Bayar</label>
                <input type="date" id="tanggal-bayar" required>
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