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
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        .table-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            table-layout: fixed;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
            word-wrap: break-word;
        }

        th {
            background-color: #f2f2f2;
        }

        .checkbox-column {
            width: 50px;
            text-align: center;
        }

        td input[type="checkbox"] {
            cursor: pointer;
            width: 20px;
            height: 20px;
            border: 2px solid #4CAF50;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
        }

        .search-container {
            margin-bottom: 20px;
        }

        .search-container label {
            font-size: 18px;
            font-weight: bold;
            margin-right: 10px;
        }

        #kelas-cari {
            padding: 5px;
            font-size: 16px;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .button-container button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .button-container button:hover {
            background-color: #45a049;
        }

        .table-wrapper {
            margin-top: 20px;
        }

        .result-table-container, .active-table-container {
            margin-bottom: 20px;
        }

        .result-table-container table, .active-table-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .result-table-container th, .active-table-container th, .result-table-container td, .active-table-container td {
            padding: 10px;
            text-align: left;
            border: 1px solid black;
        }

        .result-table-container th, .active-table-container th {
            background-color: #f2f2f2;
        }

        .inactive {
            background-color: #f9d6d6; /* Light red background for inactive rows */
            text-decoration: line-through; /* Strikethrough text for inactive rows */
        }
    </style>
</head>

<body>
    <h1>Tabel Peralihan Siswa Naik Kelas</h1>
    <div class="search-container">
        <label for="kelas-cari">Kelas:</label>
        <select id="kelas-cari" onchange="filterKelas()">
            <option value="">Pilih kelas</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
    </div>
    <div class="table-container">
        <form id="status-form" method="POST" action="">
            <table id="siswa-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Siswa</th>
                        <th>Tahun Akademik</th>
                        <th class="checkbox-column">
                            <input type="checkbox" id="select-all" onclick="toggleSelectAll(this)">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "config/koneksi.php";
                        $data = mysqli_query($koneksi, "SELECT a.id, s.nama AS nama_siswa, a.tahun_akademik, a.status_anggota 
                                                        FROM anggota_kelas a 
                                                        JOIN siswa s ON a.id_siswa = s.id 
                                                        WHERE a.id BETWEEN 1 AND 14");
                        while ($hasil = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $hasil['id']; ?></td>
                        <td><?php echo htmlspecialchars($hasil['nama_siswa']); ?></td>
                        <td><?php echo htmlspecialchars($hasil['tahun_akademik']); ?></td>
                        <td class="checkbox-column">
                            <input type="checkbox" name="status_anggota[]" value="<?php echo $hasil['id']; ?>" <?php echo $hasil['status_anggota'] == 'aktif' ? 'checked' : ''; ?>>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <div class="button-container">
                <button type="submit" name="proses">Proses</button>
            </div>
        </form>
        
        <!-- Placeholder for result and active tables -->
        <div class="table-wrapper">
            <div id="result-table-container" class="result-table-container"></div>
            <div id="active-table-container" class="active-table-container"></div>
        </div>
    </div>

    <script>
        function filterKelas() {
            const select = document.getElementById('kelas-cari');
            const filter = select.value;
            const rows = document.querySelectorAll('#siswa-table tbody tr');

            rows.forEach(row => {
                const kelasSaatIni = row.dataset.class;

                if (filter === '' || kelasSaatIni === filter) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        function toggleSelectAll(source) {
            const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = source.checked;
            });
        }

        // JavaScript functions to display result and active tables, if needed, can be added here
    </script>

    <?php
        // PHP logic for processing form submission
        if (isset($_POST['proses'])) {
            include "config/koneksi.php";

            // Update status for selected checkboxes
            $ids = $_POST['status_anggota'] ?? [];
            $ids = array_map('intval', $ids); // Sanitize input
            $ids_string = implode(',', $ids);

            // Update status to 'aktif' for selected IDs
            $update_active = "UPDATE anggota_kelas SET status_anggota = 'aktif' WHERE id IN ($ids_string)";
            mysqli_query($koneksi, $update_active);

            // Update status to 'tidak aktif' for unselected IDs
            $update_inactive = "UPDATE anggota_kelas SET status_anggota = 'tidak aktif' WHERE id NOT IN ($ids_string)";
            mysqli_query($koneksi, $update_inactive);

            // Provide feedback
            echo '<script>alert("Status anggota kelas telah diperbarui."); window.location.reload();</script>';
        }
    ?>
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