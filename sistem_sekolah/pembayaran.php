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

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: #fff;
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

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }
    </style>
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
        <?php include 'sidebar.php'; ?>
        <!-- Content Start -->
        <div class="content">
        <?php include 'header.php'; ?>
            <!-- Table Start -->
            <div class="container">
                <h1>Tabel Pembayaran SPP</h1>
                <table id="paymentTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Jumlah Pembayaran</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Metode Pembayaran</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-href="transaksi.php">
                            <td>1</td>
                            <td>Ahmad</td>
                            <td>10 IPA</td>
                            <td>Januari</td>
                            <td>2024</td>
                            <td>Rp 500.000</td>
                            <td>15 Januari 2024</td>
                            <td>Transfer Bank</td>
                            <td>Lunas</td>
                        </tr>
                        <tr data-href="transaksi.php">
                            <td>2</td>
                            <td>Siti</td>
                            <td>10 IPA</td>
                            <td>Januari</td>
                            <td>2024</td>
                            <td>Rp 500.000</td>
                            <td>20 Januari 2024</td>
                            <td>Tunai</td>
                            <td>Lunas</td>
                        </tr>
                        <tr data-href="transaksi.php">
                            <td>3</td>
                            <td>Budi</td>
                            <td>11 IPS</td>
                            <td>Februari</td>
                            <td>2024</td>
                            <td>Rp 500.000</td>
                            <td>5 Februari 2024</td>
                            <td>Transfer Bank</td>
                            <td>Lunas</td>
                        </tr>
                        <tr data-href="transaksi.php">
                            <td>4</td>
                            <td>Dewi</td>
                            <td>11 IPS</td>
                            <td>Februari</td>
                            <td>2024</td>
                            <td>Rp 500.000</td>
                            <td>10 Februari 2024</td>
                            <td>Tunai</td>
                            <td>Belum Lunas</td>
                        </tr>
                        <tr data-href="transaksi.php">
                            <td>5</td>
                            <td>Andi</td>
                            <td>12 IPA</td>
                            <td>Maret</td>
                            <td>2024</td>
                            <td>Rp 500.000</td>
                            <td>1 Maret 2024</td>
                            <td>Transfer Bank</td>
                            <td>Lunas</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tableRows = document.querySelectorAll('#paymentTable tbody tr');
            
            tableRows.forEach(row => {
                row.addEventListener('click', () => {
                    const href = row.getAttribute('data-href');
                    if (href) {
                        window.location.href = href;
                    }
                });
            });
        });
    </script>
</body>

</html>
