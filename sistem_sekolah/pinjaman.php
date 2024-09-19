<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistem_sekolah";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch books data
$sql = "SELECT id, judul, tanggal_pinjam, tanggal_pengembalian, status FROM buku"; 
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: cyan;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1, h2 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd; /* Added border */
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
            cursor: pointer;
        }

        .search-container {
            margin-bottom: 20px;
        }

        /* Remove underline from status column */
        .no-underline {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php include 'sidebar.php'; ?>

    <div class="container-xxl position-relative bg-white d-flex p-0">
        <div class="content">
            <?php include 'header.php'; ?>
            <div class="container">
                <h1>Pinjaman Perpustakaan</h1>
                <div class="table-container">
                    <h2>Daftar Pinjaman</h2>
                    <div class="search-container">
                        <input type="text" id="searchInput" placeholder="Cari..." onkeyup="filterTable()">
                    </div>

                    <table id="pinjamanTable">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="pinjamanTableBody">
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr onclick='redirectToPage(" . $row['id'] . ")'>";
                                    echo "<td>" . htmlspecialchars($row['judul']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['tanggal_pinjam']) . "</td>";  
                                    echo "<td>" . htmlspecialchars($row['tanggal_pengembalian']) . "</td>";
                                    echo "<td class='no-underline'>" . htmlspecialchars($row['status']) . "</td>"; // Added class
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4'>No records found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <script>
                    function redirectToPage(bookId) {
                        window.location.href = 'siswa_pinjam.php?id=' + bookId;
                    }

                    function filterTable() {
                        const input = document.getElementById("searchInput");
                        const filter = input.value.toLowerCase();
                        const table = document.getElementById("pinjamanTable");
                        const rows = table.getElementsByTagName("tr");

                        for (let i = 1; i < rows.length; i++) {
                            const cells = rows[i].getElementsByTagName("td");
                            let found = false;

                            for (let j = 0; j < cells.length; j++) {
                                if (cells[j].textContent.toLowerCase().indexOf(filter) > -1) {
                                    found = true;
                                    break;
                                }
                            }

                            rows[i].style.display = found ? "" : "none";
                        }
                    }
                </script>
            </div>
        </div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>
</body> 
</html>
