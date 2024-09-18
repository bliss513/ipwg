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
            <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div> -->
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

// Proses penyimpanan absensi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : date('Y-m-d');
    $id_jurnal = isset($_POST['jurnal']) ? $_POST['jurnal'] : '';

    foreach ($_POST as $key => $value) {
        if (strpos($key, 'kehadiran_') === 0) {
            $id_absensi = str_replace('kehadiran_', '', $key);
            $kehadiran_kelas = $value;

            // Periksa apakah data absensi sudah ada untuk tanggal dan jurnal ini
            $check_sql = "SELECT id FROM absensi_kelas WHERE id_siswa=$id_absensi AND tanggal='$tanggal' AND id_jurnal='$id_jurnal'";
            $check_result = $conn->query($check_sql);

            if ($check_result->num_rows > 0) {
                // Jika ada, update data absensi
                $update_sql = "UPDATE absensi_kelas SET kehadiran_kelas='$kehadiran_kelas' WHERE id_siswa=$id_absensi AND tanggal='$tanggal' AND id_jurnal='$id_jurnal'";
                if ($conn->query($update_sql) === TRUE) {
                    echo "<script>alert('Data berhasil diupdate!');</script>";
                } else {
                    echo "Error: " . $conn->error;
                }
            } else {
                // Jika tidak ada, insert data absensi baru
                $insert_sql = "INSERT INTO absensi_kelas (id_siswa, tanggal, id_jurnal, kehadiran_kelas) VALUES ($id_absensi, '$tanggal', '$id_jurnal', '$kehadiran_kelas')";
                if ($conn->query($insert_sql) === TRUE) {
                    echo "<script>alert('Data berhasil disimpan!');</script>";
                } else {
                    echo "Error: " . $conn->error;
                }
            }
        }
    }
}

// Inisialisasi variabel
$selected_jurnal = isset($_GET['jurnal']) ? $_GET['jurnal'] : '';
$selected_date = isset($_GET['tanggal']) ? $_GET['tanggal'] : '';

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
            width: 95%;
            border-collapse: collapse;
            margin: 0 auto; /* Center the table */
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
            align-items: center;
        }
        .filter-container form {
            margin: 0;
        }
        button[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            float: right; /* Place button on the right */
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
            <select name="jurnal" id="jurnal" onchange="this.form.submit()">
                <option value="">Jurnal</option>
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
            <input type="date" id="tanggal" name="tanggal" value="<?php echo $selected_date; ?>" onchange="this.form.submit()">
        </form>
    </div>

    <!-- Formulir untuk mengubah data absensi -->
    <form method="POST" action="">
        <input type="hidden" name="jurnal" value="<?php echo $selected_jurnal; ?>">
        <input type="hidden" name="tanggal" value="<?php echo $selected_date; ?>">

        <table>
            <thead>
                <tr>
<<<<<<< HEAD
                    <th>No</th> 
=======
                    <th>No</th>
>>>>>>> cbb6a2c61f03525ea0366a9bde570d8f446e46fa
                    <th>Nama Siswa</th>
                    <th>Hadir</th>
                    <th>Izin</th>
                    <th>Sakit</th>
                    <th>Alfa</th>
                </tr>
            </thead>
            <tbody>
        <?php
        if ($result->num_rows > 0) {
<<<<<<< HEAD
            $no = 1; // Inisialisasi nomor urut
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>"; // Menampilkan nomor urut
                echo "<td>" . $row["nama"] . "</td>"; // Menampilkan nama siswa
                echo "<td><input type='radio' name='kehadiran_" . $row["id"] . "' value='Hadir'" . ($row["kehadiran_kelas"] == "Hadir" ? " checked" : "") . "></td>";
                echo "<td><input type='radio' name='kehadiran_" . $row["id"] . "' value='Izin'" . ($row["kehadiran_kelas"] == "Izin" ? " checked" : "") . "></td>";
                echo "<td><input type='radio' name='kehadiran_" . $row["id"] . "' value='Sakit'" . ($row["kehadiran_kelas"] == "Sakit" ? " checked" : "") . "></td>";
                echo "<td><input type='radio' name='kehadiran_" . $row["id"] . "' value='Alfa'" . ($row["kehadiran_kelas"] == "Alfa" ? " checked" : "") . "></td>";
=======
            $no = 1; // Inisialisasi nomor urut 
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>"; // Menampilkan nomor urut
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td><input type='radio' name='kehadiran_" . $row["id_siswa"] . "' value='Hadir'" . ($row["kehadiran_kelas"] == "Hadir" ? " checked" : "") . "></td>";
                echo "<td><input type='radio' name='kehadiran_" . $row["id_siswa"] . "' value='Izin'" . ($row["kehadiran_kelas"] == "Izin" ? " checked" : "") . "></td>";
                echo "<td><input type='radio' name='kehadiran_" . $row["id_siswa"] . "' value='Sakit'" . ($row["kehadiran_kelas"] == "Sakit" ? " checked" : "") . "></td>";
                echo "<td><input type='radio' name='kehadiran_" . $row["id_siswa"] . "' value='Alfa'" . ($row["kehadiran_kelas"] == "Alfa" ? " checked" : "") . "></td>";
>>>>>>> cbb6a2c61f03525ea0366a9bde570d8f446e46fa
                echo "</tr>";
                $no++; // Increment nomor urut
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
        }
        ?>
        </tbody>
        </table>
        <!-- Tambahkan  tombol Simpan di bawah tabel -->
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