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


        <!-- Sidebar Start -->
         <?php include 'sidebar.php'; ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include 'header.php'; ?>
            <!-- Navbar End -->


            <!-- Typography Start -->
            <?php
include "config/koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id='$id'");
$hasil = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mengubah Data Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        h1 {
            font-size: 20px;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
        }
        button[type="submit"], .cancel-btn, .delete-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }
        .cancel-btn {
            background-color: #ff9800;
            color: white;
            text-decoration: none;
        }
        .delete-btn {
            background-color: #f44336;
            color: white;
            text-decoration: none;
            margin-top: 10px;
            display: block;
            text-align: center;
        }
        button[type="submit"]:hover, .cancel-btn:hover, .delete-btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ubah Data</h1>
        <form method="post" action="">
            <label for="id">Id</label>
            <input type="text" id="id" name="id" value="<?php echo $hasil['id'];?>" readonly>
            <label for="kd_kelas">Kd Kelas</label>
            <select id="kd_kelas" name="kd_kelas">
                <option value="025" <?php echo ($hasil['kd_kelas'] == '025') ? 'selected' : ''; ?>>025</option>
                <option value="026" <?php echo ($hasil['kd_kelas'] == '026') ? 'selected' : ''; ?>>026</option>
                <option value="027" <?php echo ($hasil['kd_kelas'] == '027') ? 'selected' : ''; ?>>027</option>
            </select>
            <label for="tingkat">Tingkat</label>
            <select id="tingkat" name="tingkat">
                <option value="X" <?php echo ($hasil['tingkat'] == 'X') ? 'selected' : ''; ?>>X</option>
                <option value="XI" <?php echo ($hasil['tingkat'] == 'XI') ? 'selected' : ''; ?>>XI</option>
                <option value="XII" <?php echo ($hasil['tingkat'] == 'XII') ? 'selected' : ''; ?>>XII</option>
            </select>
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" id="nama_kelas" name="nama_kelas" value="<?php echo $hasil['nama_kelas'];?>">
            <div class="button-container">
                <button type="submit" name="simpan">Simpan</button>
                <a href="kelas.php" class="cancel-btn">Batal</a>
            </div>
        </form>
        <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="basis_data/kelas/hapus.php?id=<?php echo $hasil['id']; ?>" class="delete-btn">Hapus Data Ini</a>
    </div>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $kd_kelas = $_POST['kd_kelas'];
    $tingkat = $_POST['tingkat'];
    $nama_kelas = $_POST['nama_kelas'];
    $sql = "UPDATE kelas SET kd_kelas='$kd_kelas', tingkat='$tingkat', nama_kelas='$nama_kelas' WHERE id='$id'";

    // cek apakah proses simpan berhasil
    if (mysqli_query($koneksi, $sql)) {
        // jika berhasil, redirect ke index.php
        header('Location: kelas.php');
    } else {
        // jika tidak berhasil
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }
}
?>
            <!-- Typography End -->


            <!-- Footer Start -->
            <?php include 'footer.php'; ?>
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