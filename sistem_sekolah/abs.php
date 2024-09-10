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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistem_sekolah";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Inisialisasi variabel
$selected_jurnal = isset($_GET['jurnal']) ? $_GET['jurnal'] : '';
$selected_date = isset($_GET['tanggal']) ? $_GET['tanggal'] : date('Y-m-d');

// Proses penyimpanan absensi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'kehadiran_') === 0) {
            $id_siswa = str_replace('kehadiran_', '', $key);
            $kehadiran_kelas = $value;

            // Periksa apakah data absensi untuk siswa pada tanggal dan jurnal ini sudah ada
            $check_sql = "SELECT * FROM absensi_kelas WHERE id_siswa='$id_siswa' AND tanggal='$selected_date' AND id_jurnal='$selected_jurnal'";
            $check_result = $conn->query($check_sql);

            if ($check_result->num_rows > 0) {
                // Update data absensi jika sudah ada
                $update_sql = "UPDATE absensi_kelas SET kehadiran_kelas='$kehadiran_kelas' WHERE id_siswa='$id_siswa' AND tanggal='$selected_date' AND id_jurnal='$selected_jurnal'";
                $conn->query($update_sql);
            } else {
                // Insert data baru jika belum ada
                $insert_sql = "INSERT INTO absensi_kelas (id_siswa, tanggal, id_jurnal, kehadiran_kelas) 
                               VALUES ('$id_siswa', '$selected_date', '$selected_jurnal', '$kehadiran_kelas')";
                $conn->query($insert_sql);
            }
        }
    }
    echo "<script>alert('Data berhasil disimpan!'); window.print();</script>";
}

// Query untuk mengambil data dari tabel jurnal untuk dropdown
$jurnal_sql = "SELECT id, mapel FROM jurnal";
$jurnal_result = $conn->query($jurnal_sql);

// Query untuk mengambil data dari tabel absensi_kelas berdasarkan jurnal dan tanggal yang dipilih
$sql = "SELECT a.id, a.id_siswa, a.tanggal, a.id_jurnal, a.kehadiran_kelas, s.nama 
        FROM absensi_kelas a
        JOIN siswa s ON a.id_siswa = s.id
        WHERE 1=1";
$conditions = [];
if ($selected_jurnal != '') {
    $conditions[] = "a.id_jurnal = " . $conn->real_escape_string($selected_jurnal);
}
if ($selected_date != '') {
    $conditions[] = "a.tanggal = '" . $conn->real_escape_string($selected_date) . "'";
}
if (count($conditions) > 0) {
    $sql .= " AND " . implode(' AND ', $conditions);
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
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }
        .filter-container form {
            margin: 0;
        }
        button[type="submit"] {
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
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
            <label for="tanggal">Pilih Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" value="<?php echo $selected_date; ?>" onchange="this.form.submit()">
        </form>
    </div>

    <form method="POST" action="">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Siswa</th>
                    <th>Tanggal</th>
                    <th>ID Jurnal</th>
                    <th>Hadir</th>
                    <th>Izin</th>
                    <th>Sakit</th>
                    <th>Alfa</th>
                </tr>
            </thead>
            <tbody>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["tanggal"] . "</td>";
            echo "<td>" . $row["id_jurnal"] . "</td>";
            echo "<td><input type='radio' name='kehadiran_" . $row["id_siswa"] . "' value='Hadir'" . ($row["kehadiran_kelas"] == "Hadir" ? " checked" : "") . "></td>";
            echo "<td><input type='radio' name='kehadiran_" . $row["id_siswa"] . "' value='Izin'" . ($row["kehadiran_kelas"] == "Izin" ? " checked" : "") . "></td>";
            echo "<td><input type='radio' name='kehadiran_" . $row["id_siswa"] . "' value='Sakit'" . ($row["kehadiran_kelas"] == "Sakit" ? " checked" : "") . "></td>";
            echo "<td><input type='radio' name='kehadiran_" . $row["id_siswa"] . "' value='Alfa'" . ($row["kehadiran_kelas"] == "Alfa" ? " checked" : "") . "></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8'>Tidak ada data</td></tr>";
    }
    ?>
</tbody>

        </table>
        <div class="filter-container">
            <button type="submit">Simpan</button>
        </div>
    </form>
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