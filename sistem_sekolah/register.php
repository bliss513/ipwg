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
            background-color: #f8f9fa;
            /* Light background color */
        }

        .form-container {
            max-width: 1000px;
            /* Increased width for better visibility */
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #ffffff;
            /* White background for the form */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            width: 100%;
        }

        .form-container .form-item {
<<<<<<< HEAD
<<<<<<< HEAD
            flex: 1 1 calc(50% - 20px);
            /* 50% width minus gap */
            min-width: 200px;
=======
            flex: 1 1 100%; /* Full width for form items */
=======
            flex: 1 1 100%;
            /* Full width for form items */
>>>>>>> fa68da69e5d68d6ae660e24d6831a8ad5498b92c
            min-width: 300px;
>>>>>>> dbc12cba0c27b791389791dc1339069e78637609
        }

        .form-container label {
            display: block;
            margin-top: 10px;
        }

        .form-container input,
        .form-container select,
        .form-container textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-container button {
            position: relative;
            /* Changed from absolute to relative */
            margin-top: 20px;
            /* Added margin to push it down */
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
<<<<<<< HEAD
            flex: 1 1 100%;
            /* Button takes full width */
=======
>>>>>>> dbc12cba0c27b791389791dc1339069e78637609
        }

        .form-container button:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #28a745;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td {
            width: 33%;
            /* Set each cell to take up 33% of the table width */
        }
    </style>
</head>

<body>
<<<<<<< HEAD
    <form action="" method="post">
        <div class="form-container">
            <h2>Pendaftaran Siswa</h2>
            <div class="form-item">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id">
            </div>
            <div class="form-item">
                <label for="nama">nama lengkap:</label>
                <input type="text" id="nama" name="nama">
            </div>
            <div class="form-item">
                <label for="username">username:</label>
                <input type="username" id="username" name="username">
            </div>
            <div class="form-item">
                <label for="password">password:</label>
                <input type="text" id="password" name="password">
            </div>
            <div class="form-item">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin">
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-item">
                <label for="nisn">NISN:</label>
                <input type="text" id="nisn" name="nisn">
            </div>
            <div class="form-item">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir">
            </div>
            <div class="form-item">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir">
            </div>
            <div class="form-item">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat">
            </div>
            <div class="form-item">
                <label for="nomor_hp">Nomor HP:</label>
                <input type="text" id="nomor_hp" name="nomor_hp">
            </div>
            <div class="form-item">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="form-item">
                <label for="foto">Foto (URL):</label>
                <input type="url" id="foto" name="foto">
            </div>
            <div class="form-item">
                <label for="nama_wali">Nama Wali:</label>
                <input type="text" id="nama_wali" name="nama_wali">
            </div>
            <div class="form-item">
                <label for="tahun_lahir_wali">Tahun Lahir Wali:</label>
                <input type="number" id="tahun_lahir_wali" name="tahun_lahir_wali">
            </div>
            <div class="form-item">
                <label for="pendidikan_wali">Pendidikan Wali:</label>
                <input type="text" id="pendidikan_wali" name="pendidikan_wali">
            </div>
            <div class="form-item">
                <label for="pekerjaan_wali">Pekerjaan Wali:</label>
                <input type="text" id="pekerjaan_wali" name="pekerjaan_wali">
            </div>
            <div class="form-item">
                <label for="penghasilan_wali">Penghasilan Wali:</label>
                <input type="number" id="penghasilan_wali" name="penghasilan_wali">
            </div>
            <div class="form-item">
                <label for="angkatan">Angkatan:</label>
                <input type="number" id="angkatan" name="angkatan">
            </div>
            <div class="form-item">
                <label for="spp_nominal">Nominal SPP:</label>
                <input type="number" id="spp_nominal" name="spp_nominal">
            </div>
            <div class="form-item">
                <label for="nomer">Nomer:</label>
                <input type="text" id="nomer" name="nomer">
            </div>
            <button type="submin">Daftar</button>
        </div>
    </form>

</body>

</html>
=======
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Content Start -->
        <div class="content">
            <?php include 'header.php'; ?>

            <!-- Form and Table -->
            <div class="form-container">
                <h2>Pendaftaran Siswa</h2>
<<<<<<< HEAD
                <form id="registrationForm" onsubmit="submitRegistration(event)">
                    <!-- Registration Form -->
=======
                <form id="registrationForm" action="" method="post">
>>>>>>> 023162dc11c66c78f7fcab460220c57166e8f724
                    <div class="form-item">
                        <label for="id">ID:</label>
                        <input type="text" id="id" name="id" required>
                    </div>
                    <div class="form-item">
                        <label for="nama">Nama lengkap:</label>
                        <input type="text" id="nama" name="nama" required>
                    </div>
                    <div class="form-item">
                        <label for="nisn">NISN:</label>
                        <input type="text" id="nisn" name="nisn" required>
                    </div>
                    <div class="form-item">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-item">
                        <label for="password">Password:</label>
                        <input type="text" id="password" name="password" required>
                    </div>
                    <div class="form-item">
                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="tempat_lahir">Tempat Lahir:</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" required>
                    </div>
                    <div class="form-item">
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                    <div class="form-item">
                        <label for="alamat">Alamat:</label>
                        <input type="text" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-item">
                        <label for="nomor_hp">Nomor HP:</label>
                        <input type="text" id="nomor_hp" name="nomor_hp" required>
                    </div>
                    <div class="form-item">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-item">
                        <label for="foto">Foto (URL):</label>
                        <input type="url" id="foto" name="foto">
                    </div>
                    <div class="form-item">
                        <label for="nama_wali">Nama Wali:</label>
                        <input type="text" id="nama_wali" name="nama_wali" required>
                    </div>
                    <div class="form-item">
<<<<<<< HEAD
                        <label for="tahun_lahir_wali">Tahun Lahir Wali:</label>
                        <input type="number" id="tahun_lahir_wali" name="tahun_lahir_wali" required>
=======
                        <label for="tanggal_lahir_wali">Tanggal Lahir Wali:</label>
                        <input type="number" id="tanggal_lahir_wali" name="tanggal_lahir_wali">
>>>>>>> 023162dc11c66c78f7fcab460220c57166e8f724
                    </div>
                    <div class="form-item">
                        <label for="pendidikan_wali">Pendidikan Wali:</label>
                        <input type="text" id="pendidikan_wali" name="pendidikan_wali" required>
                    </div>
                    <div class="form-item">
                        <label for="pekerjaan_wali">Pekerjaan Wali:</label>
                        <input type="text" id="pekerjaan_wali" name="pekerjaan_wali" required>
                    </div>
                    <div class="form-item">
                        <label for="penghasilan_wali">Penghasilan Wali:</label>
                        <input type="number" id="penghasilan_wali" name="penghasilan_wali" required>
                    </div>
                    <div class="form-item">
                        <label for="angkatan">Angkatan:</label>
                        <input type="number" id="angkatan" name="angkatan" required>
                    </div>
                    <div class="form-item">
                        <label for="spp_nominal">Nominal SPP:</label>
                        <input type="number" id="spp_nominal" name="spp_nominal" required>
                    </div>
                    <div class="form-item">
<<<<<<< HEAD
                        <label for="nomer_hp">Nomer hp:</label>
                        <input type="text" id="nomer_hp" name="nomer_hp" required>
=======
                        <label for="nomer">Nomer:</label>
                        <input type="text" id="nomer" name="nomer">
>>>>>>> 023162dc11c66c78f7fcab460220c57166e8f724
                    </div>

                    <h2>Anggota kelas </h2>
                    <div class="form-item">
<<<<<<< HEAD
                        <label for="id_kelas">ID Kelas:</label>
                        <input type="text" id="id_kelas" name="id_kelas" required>
                    </div>
                    <div class="form-item">
                        <label for="id_siswa">ID Siswa:</label>
                        <input type="text" id="id_siswa" name="id_siswa" required>
                    </div>
                    <div class="form-item">
                        <label for="tahun_akademik">Tahun Akademik:</label>
                        <input type="text" id="tahun_akademik" name="tahun_akademik" required>
=======
                        <label for="id">ID:</label>
                        <input type="text" id="id" name="id">
                    </div>
                    <div class="form-item">
                        <label for="id_kelas">id kelas:</label>
                        <input type="text" id="id_kelas" name="id_kelas">
                    </div>
                    <div class="form-item">
                        <label for="id_siswa">id siswa:</label>
                        <input type="text" id="id_siswa" name="id_siswa">
                    </div>
                    <div class="form-item">
                        <label for="tahun_akademik">tahun akademik:</label>
                        <input type="text" id="tahun_akademik" name="tahun_akademik">
>>>>>>> 023162dc11c66c78f7fcab460220c57166e8f724
                    </div>
                    <div class="form-item">
<<<<<<< HEAD
                        <label for="wajib_spp">Wajib SPP:</label>
                        <input type="text" id="wajib_spp" name="wajib_spp" required>
                    </div>
                    <div class="form-item">
                        <label for="tanggal_masuk">Tanggal Masuk:</label>
                        <input type="date" id="tanggal_masuk" name="tanggal_masuk" required>
=======
                        <label for="status_siswa">setatus siswa:</label>
                        <input type="text" id="status_siswa" name="status_siswa">
                    </div>
                    <!-- Data will be inserted here -->
                    <!-- Table to display submitted data -->

                    <h2>Rencana spp </h2>
                    <div class="form-item">
                        <label for="id">ID:</label>
                        <input type="text" id="id" name="id">
                    </div>
                    <div class="form-item">
                        <label for="id_siswa">id siswa:</label>
                        <input type="text" id="id_siswa" name="id_siswa">
                    </div>
                    <div class="form-item">
                        <label for="pembayaran_ke">pembayaran ke:</label>
                        <input type="text" id="pembayaran_ke" name="pembayaran_ke">
                    </div>
                    <div class="form-item">
                        <label for="bulan_pembayaran">bulan_pembayaran:</label>
                        <input type="text" id="bulan_pembayaran" name="bulan_pembayaran">
                    </div>
                    <div class="form-item">
                        <label for="wajib_spp">wajib spp:</label>
                        <input type="text" id="wajib_spp" name="wajib_spp">
                    </div>
                    <div class="form-item">
                        <label for="id_user">id user :</label>
                        <input type="text" id="id_user" name="id_user">
>>>>>>> 023162dc11c66c78f7fcab460220c57166e8f724
                    </div>
                    <button type="submit">simpan</button>
                </form>
            </div>

            <!-- Footer -->
            <?php include 'footer.php'; ?>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var today = new Date().toISOString().split('T')[0];
            document.getElementById('tanggal_masuk').value = today;
        });

        function submitRegistration(event) {
            event.preventDefault(); // Prevent form from submitting normally

            const id = document.getElementById('id').value;
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const nama = document.getElementById('nama').value;
            const jenisKelamin = document.getElementById('jenis_kelamin').value;
            const nisn = document.getElementById('nisn').value;
            const tempatLahir = document.getElementById('tempat_lahir').value;
            const tanggalLahir = document.getElementById('tanggal_lahir').value;
            const alamat = document.getElementById('alamat').value;
            const nomorHp = document.getElementById('nomor_hp').value;
            const email = document.getElementById('email').value;
            const foto = document.getElementById('foto').value;
            const namaWali = document.getElementById('nama_wali').value;
            const tanggalLahirWali = document.getElementById('tanggal_lahir_wali').value;
            const pendidikanWali = document.getElementById('pendidikan_wali').value;
            const pekerjaanWali = document.getElementById('pekerjaan_wali').value;
            const penghasilanWali = document.getElementById('penghasilan_wali').value;
            const angkatan = document.getElementById('angkatan').value;
            const sppNominal = document.getElementById('spp_nominal').value;
            const nomer = document.getElementById('nomer').value;

            // Create a new row and append to the table
            const tableBody = document.querySelector('#dataTable tbody');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${id}</td>
                <td>${nama}</td>
                <td>${nisn}</td>
                <td>${username}</td>
                <td>${password}</td>
                <td>${jenisKelamin}</td>
                <td>${tempatLahir}</td>
                <td>${tanggalLahir}</td>
                <td>${alamat}</td>
                <td>${nomorHp}</td>
                <td>${email}</td>
                <td><img src="${foto}" alt="Foto" style="width: 50px; height: 50px; object-fit: cover;"></td>
                <td>${namaWali}</td>
                <td>${tanggalLahirWali}</td>
                <td>${pendidikanWali}</td>
                <td>${pekerjaanWali}</td>
                <td>${penghasilanWali}</td>
                <td>${angkatan}</td>
                <td>${sppNominal}</td>
                <td>${nomer}</td>
            `;
            tableBody.appendChild(newRow);

            // Optionally clear the form after submission
            document.getElementById('registrationForm').reset();
        }
    </script>
</body>
<<<<<<< HEAD
</html>
>>>>>>> dbc12cba0c27b791389791dc1339069e78637609
=======

</html>
>>>>>>> fa68da69e5d68d6ae660e24d6831a8ad5498b92c
