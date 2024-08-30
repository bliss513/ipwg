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

<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Absensi Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .filter {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
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
        .message {
            margin: 10px 0;
            color: green;
            font-weight: bold;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        select {
            padding: 8px;
            font-size: 16px;
        }
        .radio-group {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="filter">
            <form method="GET" action="">
                <label for="id-jurnal">Pilih Jurnal:</label>
                <select id="id-jurnal" name="id-jurnal" onchange="this.form.submit()">
                    <option value="">Pilih Jurnal</option>
                    <?php
                        // Konfigurasi database
                        $servername = "localhost";
                        $username = "root"; // ganti dengan username database Anda
                        $password = ""; // ganti dengan password database Anda
                        $dbname = "sistem_sekolah"; // ganti dengan nama database Anda

                        // Buat koneksi
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Cek koneksi
                        if ($conn->connect_error) {
                            die("Koneksi gagal: " . $conn->connect_error);
                        }

                        // Query untuk mengambil daftar jurnal
                        $sql_jurnal = "SELECT id, id_kelas, hari, id_guru, jam_ke, mapel FROM jurnal";
                        $result_jurnal = $conn->query($sql_jurnal);

                        if ($result_jurnal->num_rows > 0) {
                            while($row_jurnal = $result_jurnal->fetch_assoc()) {
                                $selected = (isset($_GET['id-jurnal']) && $_GET['id-jurnal'] == $row_jurnal['id']) ? 'selected' : '';
                                echo "<option value='" . htmlspecialchars($row_jurnal['id']) . "' $selected>" . htmlspecialchars($row_jurnal['mapel']) . " - " . htmlspecialchars($row_jurnal['id_kelas']) . "</option>";
                            }
                        }
                        $conn->close();
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
                    // Cek apakah ada jurnal yang dipilih
                    if (isset($_GET['id-jurnal']) && !empty($_GET['id-jurnal'])) {
                        // Konfigurasi database
                        $servername = "localhost";
                        $username = "root"; // ganti dengan username database Anda
                        $password = ""; // ganti dengan password database Anda
                        $dbname = "sistem_sekolah"; // ganti dengan nama database Anda

                        // Buat koneksi
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Cek koneksi
                        if ($conn->connect_error) {
                            die("Koneksi gagal: " . $conn->connect_error);
                        }

                        // Ambil filter jurnal dari query parameter
                        $id_jurnal = $conn->real_escape_string($_GET['id-jurnal']);

                        // Query untuk mengambil data absensi dengan filter jurnal
                        $sql = "SELECT * FROM absensi_kelas WHERE id_jurnal = '$id_jurnal'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Output data per baris
                            while($row = $result->fetch_assoc()) {
                                $kehadiran = $row["kehadiran_kelas"];
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["id_siswa"] . "</td>";
                                echo "<td>" . $row["tanggal"] . "</td>";
                                echo "<td>" . $row["id_jurnal"] . "</td>";
                                echo "<td>";
                                echo "<form method='POST' action=''>";
                                echo "<input type='hidden' name='id' value='" . $row["id"] . "' />";
                                echo "<div class='radio-group'>";
                                echo "<label><input type='radio' name='kehadiran' value='H'" . ($kehadiran == 'H' ? ' checked' : '') . "> H</label>";
                                echo "<label><input type='radio' name='kehadiran' value='I'" . ($kehadiran == 'I' ? ' checked' : '') . "> I</label>";
                                echo "<label><input type='radio' name='kehadiran' value='S'" . ($kehadiran == 'S' ? ' checked' : '') . "> S</label>";
                                echo "<label><input type='radio' name='kehadiran' value='A'" . ($kehadiran == 'A' ? ' checked' : '') . "> A</label>";
                                echo "</div>";
                                echo "<input type='submit' value='Update'>";
                                echo "</form>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Tidak ada data absensi</td></tr>";
                        }

                        $conn->close();
                    } else {
                        echo "<tr><td colspan='5'>Silakan pilih jurnal untuk melihat data absensi</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body> -->

<?php
$servername = "localhost";  // Ganti dengan nama server Anda
$username = "root";         // Ganti dengan username Anda
$password = "";             // Ganti dengan password Anda
$dbname = "sistem_sekolah";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel
$sql = "SELECT * FROM absensi_kelas";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Absensi Harian</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Data Absensi Harian</h1>
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
            if ($result->num_rows > 0) {
                // Menampilkan data setiap baris
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
    <?php
    // Menutup koneksi
    $conn->close();
    ?>
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
        <script src="lib/owlcarousael/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>


    </html>