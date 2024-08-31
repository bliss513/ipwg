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
// Konfigurasi database
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda
$dbname = "sistem_sekolah"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Inisialisasi variabel
$selected_jurnal = isset($_GET['jurnal']) ? $_GET['jurnal'] : '';

// Query untuk mengambil data dari tabel jurnal untuk dropdown
$jurnal_sql = "SELECT id, mapel FROM jurnal";
$jurnal_result = $conn->query($jurnal_sql);

// Query untuk mengambil data dari tabel absensi_kelas berdasarkan jurnal yang dipilih
$sql = "SELECT id, id_siswa, tanggal, id_jurnal, kehadiran_kelas FROM absensi_kelas";
if ($selected_jurnal != '') {
    $sql .= " WHERE id_jurnal = " . $conn->real_escape_string($selected_jurnal);
}
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Absensi Kelas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .filter-container {
            text-align: right;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Tabel Absensi Kelas</h1>
    <div class="filter-container">
        <form method="GET" action="">
            <label for="jurnal">Pilih Jurnal:</label>
            <select name="jurnal" id="jurnal" onchange="this.form.submit()">
                <option value="">Semua Jurnal</option>
                <?php
                if ($jurnal_result->num_rows > 0) {
                    while ($jurnal_row = $jurnal_result->fetch_assoc()) {
                        echo '<option value="' . $jurnal_row['id'] . '"' . 
                        ($selected_jurnal == $jurnal_row['id'] ? ' selected' : '') . 
                        '>' . $jurnal_row['mapel'] . '</option>';
                    }
                }
                ?>
            </select>
        </form>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Siswa</th>
                <th>Tanggal</th>
                <th>ID Jurnal</th>
                <th>Kehadiran Kelas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Menampilkan data
            if ($result->num_rows > 0) {
                // Output data per baris
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["id_siswa"] . "</td>";
                    echo "<td>" . $row["tanggal"] . "</td>";
                    echo "<td>" . $row["id_jurnal"] . "</td>";
                    echo "<td>" . $row["kehadiran_kelas"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php
// Menutup koneksi
$conn->close();
?>


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
        <script src="lib/owlcarousael/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>


    </html>