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

       <?php
            include 'sidebar.php'
            ?>
            <!-- Content Start -->
            
    <!-- Custom Styles -->
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #FFFFFF; /* Ganti kuning dengan putih */
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .container {
        max-width: 900px;
        margin: 25px auto;
        background-color: white;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        flex: 1;
    }

    h1 {
        font-size: 32px;
        margin-bottom: 10px;
        text-align: center;
    }

    p {
        font-size: 18px;
        margin-bottom: 20px;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table, th, td {
        border: none; /* Remove table borders */
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #4CAF50; /* Green color for headers */
        color: white;
    }

    th, td {
        font-size: 16px;
    }

    tr:hover {
        background-color: white; /* Add hover effect */
        cursor: pointer;
    }

    .action-container {
        display: none; /* Hide action buttons by default */
    }

    a {
        text-decoration: none;
        color: #4CAF50;
        transition: color 0.3s;
        font-weight: bold; /* Make link text bold */
    }

    a:hover {
        color: #45a049;
    }

    button {
        background-color: #FF0000; /* Red color for button */
        color: white;
        border: none;
        padding: 12px 20px;
        cursor: pointer;
        border-radius: 4px;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #e60000; /* Darker red for hover effect */
    }

    /* Search and Button Container */
    .action-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .search-container {
        display: flex;
        align-items: center;
    }

    .search-container input[type="text"] {
        padding: 10px;
        font-size: 16px;
        border-radius: 4px;
        border: 1px solid #ddd;
        margin-left: 10px;
        width: 200px; /* Adjust as needed */
    }

    /* Footer Styles */
    .footer {
        color: white;
        text-align: center;
        padding: 10px 0;
        position: relative;
        bottom: 0;
        width: 100%;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
    }
</style>


    <!-- JavaScript Functions -->
    <script>
        function searchTable() {
            var input, filter, table, tr, td, i, j, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toLowerCase();
            table = document.getElementById("dataTable");
            tr = table.getElementsByTagName("tr");

            for (i = 1; i < tr.length; i++) {
                tr[i].style.display = "none";
                td = tr[i].getElementsByTagName("td");
                for (j = 0; j < td.length; j++) {
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toLowerCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                            break;
                        }
                    }
                }
            }
        }
    </script>
</head>

<body>
    <!-- Content Start -->
    <div class="content">
        <?php include 'header.php'; ?>

        <div class="container">
            <div class="action-container">
                <div class="search-container">
                    <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search...">
                </div>
            </div>

            <table id="dataTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Nisn</th>
                        <th>Nomer Hp</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "config/koneksi.php";
                        $data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id BETWEEN 1 AND 14");
                        while ($hasil = mysqli_fetch_array($data)) {
                    ?>
                    <tr onclick="window.location.href='basis_data/data_siswa/ubah.php?id=<?php echo $hasil['id']; ?>'">
                        <td><?php echo $hasil['id']; ?></td>
                        <td><?php echo $hasil['nama']; ?></td>
                        <td><?php echo $hasil['nisn']; ?></td>
                        <td><?php echo $hasil['nomer_hp']; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Content End -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <div class="footer">
        
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

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
