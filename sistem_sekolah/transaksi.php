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
<?php
include "config/koneksi.php";

$error_message = '';
$success_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['simpan'])) {
        $siswa_id = $_POST['siswa_id'];
        $kelas = $_POST['kelas'];
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        $jumlah = $_POST['jumlah'];
        $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
        $metode_pembayaran = $_POST['metode_pembayaran'];
        $keterangan = $_POST['keterangan'];

        // Menggunakan prepared statements untuk menghindari SQL Injection
        $sql = "INSERT INTO transaksi (siswa_id, bulan, tahun, jumlah, tanggal_pembayaran, metode_pembayaran, keterangan) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($koneksi, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssssss", $siswa_id, $bulan, $tahun, $jumlah, $tanggal_pembayaran, $metode_pembayaran, $keterangan);

            if (mysqli_stmt_execute($stmt)) {
                $success_message = "Pembayaran berhasil diproses!";
            } else {
                $error_message = "Oupss.... Maaf, proses penyimpanan data tidak berhasil: " . mysqli_stmt_error($stmt);
            }

            mysqli_stmt_close($stmt);
        } else {
            $error_message = "Gagal menyiapkan pernyataan: " . mysqli_error($koneksi);
        }

        mysqli_close($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembayaran SPP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, select {
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }
        button {
            padding: 10px 15px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .message {
            font-weight: bold;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Formulir Pembayaran SPP</h1>
    
    <?php if (!empty($success_message)): ?>
        <p class="message success"><?php echo htmlspecialchars($success_message); ?></p>
    <?php endif; ?>

    <?php if (!empty($error_message)): ?>
        <p class="message error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php endif; ?>

    <form action="payment_process.php" method="post">
        <label for="siswa">Nama Siswa:</label>
        <select id="siswa" name="siswa_id" required>
            <?php
            $result = mysqli_query($koneksi, "SELECT id, nama FROM siswa");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['id']}'>{$row['nama']}</option>";
            }
            ?>
        </select>

        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" required>

        <label for="bulan">Bulan:</label>
        <input type="text" id="bulan" name="bulan" required>

        <label for="tahun">Tahun:</label>
        <input type="number" id="tahun" name="tahun" min="2000" max="2100" required>

        <label for="jumlah">Jumlah Pembayaran:</label>
        <input type="number" id="jumlah" name="jumlah" step="0.01" required>

        <label for="tanggal_pembayaran">Tanggal Pembayaran:</label>
        <input type="date" id="tanggal_pembayaran" name="tanggal_pembayaran" required>

        
        <label for="metode_pembayaran">metode pembayaran</label>
            <select id="metode_pembayaran" name="metode_pembayaran">
                <option value="transfer">transfer</option>
                <option value="tunai">tunai</option>
            </select>
        <label for="keterangan">Keterangan:</label>
        <textarea id="keterangan" name="keterangan" rows="4"></textarea>

        <button type="submit" name="simpan">Simpan Pembayaran</button>
    </form>
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