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

            <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        table {
            width: 80%;
            margin: 50px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Daftar Kelas</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Kelas</th>
                <th>Tingkat</th>
                <th>Nama Kelas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>KD001</td>
                <td>10</td>
                <td>X-PPLG</td>
            </tr>
            <tr>
                <td>2</td>
                <td>KD002</td>
                <td>10</td>
                <td>X-BCF</td>
            </tr>
            <tr>
                <td>3</td>
                <td>KD003</td>
                <td>10</td>
                <td>X-MPLB A</td>
            </tr>
            <tr>
                <td>3</td>
                <td>KD003</td>
                <td>10</td>
                <td>X-MPLB B</td>
            </tr>
            <tr>
                <td>4</td>
                <td>KD004</td>
                <td>11</td>
                <td>XI-PPLG</td>
            </tr>
            <tr>
                <td>5</td>
                <td>KD005</td>
                <td>11</td>
                <td>XI-BCF</td>
            </tr>
            <tr>
                <td>6</td>
                <td>KD006</td>
                <td>11</td>
                <td>XI-MPLB A</td>
            </tr>
            <tr>
                <td>7</td>
                <td>KD007</td>
                <td>11</td>
                <td>XI-MPLB B</td>
            </tr>
            <tr>
                <td>8</td>
                <td>KD008</td>
                <td>12</td>
                <td>XII-PPLG</td>
            </tr>
            <tr>
                <td>9</td>
                <td>KD009</td>
                <td>12</td>
                <td>XII-BCF</td>
            </tr>
            <tr>
                <td>10</td>
                <td>KD0010</td>
                <td>12</td>
                <td>XII-MPLB A</td>
            </tr>
            <tr>
                <td>11</td>
                <td>KD0011</td>
                <td>12</td>
                <td>XII-MPLB B</td>
            </tr>
        </tbody>
    </table>
</body>


            <!-- Footer Start -->
            <?php
            include 'footer.php';
            ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


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