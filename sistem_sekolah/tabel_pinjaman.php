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
        <?php
        include 'sidebar.php'
        ?>

        <!-- Content Start -->
        <div class="content">
        <?php
            include 'header.php';
            ?>
            <!DOCTYPE html>
            <html lang="id">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Tabel Peminjaman Buku</title>
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
                    .clickable {
                        cursor: pointer;
                        color: #007BFF;
                        text-decoration: underline;
                    }
                    .clickable:hover {
                        color: #0056b3;
                    }
                    #details-container {
                        display: none;
                        margin: 20px 0;
                        padding: 20px;
                        background-color: #ffffff;
                        border: 1px solid #dddddd;
                        border-radius: 4px;
                    }
                    #details-container input {
                        margin-bottom: 10px;
                        padding: 8px;
                        width: 100%;
                    }
                </style>
            </head>
            <body>
                <h1>Tabel Peminjaman Buku</h1>
                <table>
                    <caption>Tabel Peminjaman Buku</caption>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID Buku</th>
                            <th>ID Siswa</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Rencana Pengembalian</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr onclick="showDetails(1)">
                            <td>1</td>
                            <td>B001</td>
                            <td>S001</td>
                            <td>2024-08-01</td>
                            <td>2024-08-15</td>
                            <td>2024-08-14</td>
                            <td>Kembali</td>
                            <td>Dalam kondisi baik</td>
                        </tr>
                        <tr onclick="showDetails(2)">
                            <td>2</td>
                            <td>B002</td>
                            <td>S002</td>
                            <td>2024-08-05</td>
                            <td>2024-08-20</td>
                            <td>-</td>
                            <td>Belum Kembali</td>
                            <td>Terjadi kerusakan</td>
                        </tr>
                        <tr onclick="showDetails(3)">
                            <td>3</td>
                            <td>B003</td>
                            <td>S003</td>
                            <td>2024-08-10</td>
                            <td>2024-08-25</td>
                            <td>-</td>
                            <td>Belum Kembali</td>
                            <td>Dalam proses perbaikan</td>
                        </tr>
                        <!-- Tambahkan baris tambahan sesuai kebutuhan -->
                    </tbody>
                </table>
            
                <div id="details-container">
                    <h2>Detail Peminjaman</h2>
                    <form id="details-form">
                        <input type="hidden" id="record-id">
                        <label for="id-buku">ID Buku:</label>
                        <input type="text" id="id-buku" name="id-buku" readonly>
                        <label for="id-siswa">ID Siswa:</label>
                        <input type="text" id="id-siswa" name="id-siswa" readonly>
                        <label for="tanggal-pinjam">Tanggal Pinjam:</label>
                        <input type="text" id="tanggal-pinjam" name="tanggal-pinjam" readonly>
                        <label for="tanggal-rencana">Tanggal Rencana Pengembalian:</label>
                        <input type="text" id="tanggal-rencana" name="tanggal-rencana" readonly>
                        <label for="tanggal-pengembalian">Tanggal Pengembalian:</label>
                        <input type="text" id="tanggal-pengembalian" name="tanggal-pengembalian" readonly>
                        <label for="status">Status:</label>
                        <input type="text" id="status" name="status" readonly>
                        <label for="keterangan">Keterangan:</label>
                        <input type="text" id="keterangan" name="keterangan" readonly>
                        <button type="button" onclick="hideDetails()">Tutup</button>
                    </form>
                </div>
            
                <script>
                    function showDetails(id) {
                        // Data dummy untuk demonstrasi
                        const data = {
                            1: { id_buku: 'B001', id_siswa: 'S001', tanggal_pinjam: '2024-08-01', tanggal_rencana: '2024-08-15', tanggal_pengembalian: '2024-08-14', status: 'Kembali', keterangan: 'Dalam kondisi baik' },
                            2: { id_buku: 'B002', id_siswa: 'S002', tanggal_pinjam: '2024-08-05', tanggal_rencana: '2024-08-20', tanggal_pengembalian: '', status: 'Belum Kembali', keterangan: 'Terjadi kerusakan' },
                            3: { id_buku: 'B003', id_siswa: 'S003', tanggal_pinjam: '2024-08-10', tanggal_rencana: '2024-08-25', tanggal_pengembalian: '', status: 'Belum Kembali', keterangan: 'Dalam proses perbaikan' }
                        };
            
                        // Ambil data berdasarkan ID
                        const record = data[id];
            
                        if (record) {
                            document.getElementById('record-id').value = id;
                            document.getElementById('id-buku').value = record.id_buku;
                            document.getElementById('id-siswa').value = record.id_siswa;
                            document.getElementById('tanggal-pinjam').value = record.tanggal_pinjam;
                            document.getElementById('tanggal-rencana').value = record.tanggal_rencana;
                            document.getElementById('tanggal-pengembalian').value = record.tanggal_pengembalian;
                            document.getElementById('status').value = record.status;
                            document.getElementById('keterangan').value = record.keterangan;
            
                            // Tampilkan detail
                            document.getElementById('details-container').style.display = 'block';
                        }
                    }
            
                    function hideDetails() {
                        document.getElementById('details-container').style.display = 'none';
                    }
                </script>
            </body>
            </html>
            
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

</html>