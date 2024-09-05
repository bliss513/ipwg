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
        /* Mengatur agar background halaman dan elemen utama tetap putih */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        .container-xxl {
            display: flex;
            height: 100vh; /* Mengatur tinggi kontainer sesuai dengan tinggi viewport */
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #f8f9fa; /* Latar belakang putih terang untuk sidebar */
            border-right: 1px solid #ddd; /* Garis pemisah sidebar */
            padding-top: 20px;
            overflow-y: auto;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }
        .header {
            position: fixed;
            top: 0;
            left: 250px;
            width: calc(100% - 250px);
            background-color: #f8f9fa;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd; /* Garis bawah untuk header */
            z-index: 1001;
        }
        .main-content {
            padding-top: 60px; /* Sesuaikan dengan tinggi header */
        }
        form {
            max-width: 500px;
            margin: auto;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin: 8px 0 4px;
            font-size: 14px;
        }
        input[type="date"] {
            width: 100%;
            padding: 6px;
            margin-bottom: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        button {
            display: block;
            width: 100%;
            padding: 8px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 14px;
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
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
            font-size: 14px;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            font-size: 1.5em;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container-xxl">
        <!-- Sidebar Start -->
        <div class="sidebar">
            <?php include 'sidebar.php'; ?>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Header Start -->
            <div class="header">
                <?php include 'header.php'; ?>
            </div>
            <!-- Header End -->

            <!-- Main Content Start -->
            <div class="main-content">
                <h1></h1>
                <form onsubmit="event.preventDefault(); hitungDenda();">
                    <label for="tanggalPeminjaman">Tanggal Peminjaman:</label>
                    <input type="date" id="tanggalPeminjaman" required>
                    <label for="tanggalPengembalian">Tanggal Pengembalian:</label>
                    <input type="date" id="tanggalPengembalian" required>
                    <button type="submit">Hitung Denda</button>
                </form>
                <div id="hasilDenda"></div>
                <button id="btnProses" class="hidden" onclick="prosesDenda()">Proses</button>
            </div>
            <!-- Main Content End -->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>
        <!-- Content End -->
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
        function hitungDenda() {
            const tanggalPeminjaman = new Date(document.getElementById("tanggalPeminjaman").value);
            const tanggalPengembalian = new Date(document.getElementById("tanggalPengembalian").value);

            const dendaPerHari = 1000;
            const selisihWaktu = tanggalPengembalian - tanggalPeminjaman;
            const selisihHari = Math.ceil(selisihWaktu / (1000 * 60 * 60 * 24));

            let denda = 0;
            const satuBulan = 30;

            if (selisihHari > satuBulan) {
                const hariTerlambat = selisihHari - satuBulan;
                denda = hariTerlambat * dendaPerHari;
            }

            document.getElementById("hasilDenda").innerHTML = `
                <table>
                    <tr>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Jumlah Hari Terlambat</th>
                        <th>Total Denda (Rp1000 per hari)</th>
                    </tr>
                    <tr>
                        <td>${tanggalPeminjaman.toISOString().split('T')[0]}</td>
                        <td>${tanggalPengembalian.toISOString().split('T')[0]}</td>
                        <td>${selisihHari > satuBulan ? selisihHari - satuBulan : 0}</td>
                        <td>Rp ${denda}</td>
                    </tr>
                </table>`;

            document.getElementById("btnProses").classList.remove("hidden");
        }

        function prosesDenda() {
            alert("Denda sudah diproses. Terima kasih!");
        }
    </script>
</body>

</html>
