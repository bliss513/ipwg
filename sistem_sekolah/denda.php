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
        <?php
        include 'sidebar.php';
        ?>
        <!-- Content Start -->
        <div class="content">
        <?php
            include 'header.php';
            ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Denda Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #fff; /* Mengubah latar belakang menjadi putih */
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
                        <th>Denda (Rp1000 per hari)</th>
                    </tr>
                    <tr>
                        <td>${tanggalPeminjaman.toISOString().split('T')[0]}</td>
                        <td>${tanggalPengembalian.toISOString().split('T')[0]}</td>
                        <td>${selisihHari > 0 ? selisihHari : 0}</td>
                        <td>${denda}</td>
                    </tr>
                </table>`;

            document.getElementById("btnProses").classList.remove("hidden");
        }

        function prosesDenda() {
            alert("Denda sudah diproses. Terima kasih!");
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
