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
            background-color: cyan; /* Mengubah latar belakang menjadi cyan */
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
            text-align: center; /* Mengatur judul agar berada di tengah */
        }

        .header-image {
            width: 10%; /* Membuat gambar melebar mengikuti lebar kontainer */
            height: auto;
            display: block;
            margin: 0 auto; /* Memastikan gambar berada di tengah */
        }

        .form-container {
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .form-item {
            flex: 1;
        }

        .form-item label {
            font-weight: bold;
            margin: 0 0 5px;
            display: block;
        }

        .form-item input,
        .form-item select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .button-container {
            display: flex;
            justify-content: flex-end; /* Menempatkan tombol di pojok kanan */
            margin-top: 20px;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
            cursor: pointer;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            z-index: 1000;
            width: 300px;
        }

        .popup h2 {
            margin-top: 0;
        }

        .popup .close {
            cursor: pointer;
            color: red;
            font-size: 1.2em;
            float: right;
        }

        .search-container {
            margin-top: 20px; /* Jarak antara kotak pencarian dan tabel */
            margin-bottom: 20px; /* Jarak antara kotak pencarian dan judul tabel */
            display: flex;
            justify-content: flex-start; /* Menempatkan kotak pencarian di pojok kiri */
        }

        .search-container label {
            display: none; /* Hapus label untuk membuat tampilan lebih bersih */
        }

        .search-container input {
            width: 200px; /* Mempersempit lebar input pencarian */
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .search-container .search-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin-left: 10px; /* Jarak antara input dan tombol pencarian */
        }

        .search-container .search-button:hover {
            background-color: #0056b3;
        }

        .button-container-right {
            display: flex;
            justify-content: flex-end; /* Menempatkan tombol di pojok kanan */
            margin-top: 20px;
        }

        /* Footer Styles */
        footer {
            margin-top: auto;
            padding: 20px;
            background-color: #f8f9fa;
            text-align: center;
        }

        .footer-text {
            color: #6c757d;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0 flex-column">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End --> 
        <?php include 'sidebar.php'; ?>

        <!-- Content Start -->
        <div class="content">
            <?php include 'header.php'; ?>
            
            <div class="container">
                <!-- Gambar di atas judul -->
                <!-- <img src="ip.png" alt="Library" class="header-image"> -->

                <h1>Pinjaman Perpustakaan</h1>

                <div class="form-container">
                    <div class="form-item">
                        <label for="judul">Judul:</label>
                        <input type="text" id="judul" required>
                    </div>
                    <div class="form-item">
                        <label for="status">Status:</label>
                        <select id="status" required>
                            <option value="Dipinjam">Dipinjam</option>
                            <option value="Kembali">Kembali</option>
                            <option value="Lewat Tempo">Lewat Tempo</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="tanggalPinjam">Tanggal Pinjam:</label>
                        <input type="date" id="tanggalPinjam" required>
                    </div>
                    <div class="form-item">
                        <label for="tanggalKembali">Tanggal Kembali:</label>
                        <input type="date" id="tanggalKembali" required>
                    </div>
                </div>

                <div class="button-container">
                    <button type="submit" id="prosesButton">Proses</button>
                </div>

                <div class="table-container">
                    <h2>Daftar Pinjaman</h2>
                    
                    <!-- Pindahkan kontainer pencarian ke bawah judul tabel -->
                    <div class="search-container">
                        <input type="text" id="searchInput" placeholder="Cari...">
                    </div>

                    <table id="pinjamanTable">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Status</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                            </tr>
                        </thead>
                        <tbody id="pinjamanTableBody">
                            <tr data-id="1" onclick="showPopup(1)">
                                <td>tips agar dapat uang</td>
                                <td>Dipinjam</td>
                                <td>2024-08-01</td>
                                <td>2024-08-31</td>
                            </tr>
                            <tr data-id="2" onclick="showPopup(2)">
                                <td>dongeng anak</td>
                                <td>Kembali</td>
                                <td>2024-07-20</td>
                                <td>2024-08-19</td>
                            </tr>
                            <tr data-id="3" onclick="showPopup(3)">
                                <td>upin&ipin</td>
                                <td>Lewat Tempo</td>
                                <td>2024-08-10</td>
                                <td>2024-09-09</td>
                            </tr>
                            <tr data-id="4" onclick="showPopup(4)">
                                <td>siksa neraka</td>
                                <td>Dipinjam</td>
                                <td>2024-08-05</td>
                                <td>2024-09-04</td>
                            </tr>
                            <tr data-id="5" onclick="showPopup(5)">
                                <td>hidup enak tanpa narkoba</td>
                                <td>Kembali</td>
                                <td>2024-07-25</td>
                                <td>2024-08-24</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="button-container-right">
                        <button class="share-button" id="shareButton">Bagikan Data</button>
                    </div>
                </div>

                <!-- Popup for showing details -->
                <div class="popup" id="popup">
                    <span class="close" onclick="closePopup()">&times;</span>
                    <h2>Detail Pinjaman</h2>
                    <div id="popupContent"></div>
                </div>

                <script>
                    // Menambahkan data ke tabel
                    document.getElementById('prosesButton').addEventListener('click', function() {
                        const judul = document.getElementById('judul').value;
                        const status = document.getElementById('status').value;
                        const tanggalPinjam = document.getElementById('tanggalPinjam').value;
                        const tanggalKembali = document.getElementById('tanggalKembali').value;

                        if (judul && status && tanggalPinjam && tanggalKembali) {
                            const tableBody = document.getElementById('pinjamanTableBody');
                            const newRow = document.createElement('tr');
                            newRow.innerHTML = `
                                <td>${judul}</td>
                                <td>${status}</td>
                                <td>${tanggalPinjam}</td>
                                <td>${tanggalKembali}</td>
                            `;
                            newRow.setAttribute('data-id', tableBody.children.length + 1);
                            newRow.addEventListener('click', function() {
                                showPopup(this.getAttribute('data-id'));
                            });
                            tableBody.appendChild(newRow);

                            // Clear the input fields after adding data
                            document.getElementById('judul').value = '';
                            document.getElementById('status').value = 'Dipinjam';
                            document.getElementById('tanggalPinjam').value = '';
                            document.getElementById('tanggalKembali').value = '';
                        } else {
                            alert('Harap lengkapi semua field!');
                        }
                    });

                    // Menambahkan fitur pencarian
                    document.getElementById('searchInput').addEventListener('keyup', function() {
                        const searchValue = this.value.toLowerCase();
                        const rows = document.querySelectorAll('#pinjamanTableBody tr');
                        rows.forEach(row => {
                            const title = row.cells[0].textContent.toLowerCase();
                            if (title.includes(searchValue)) {
                                row.style.display = '';
                            } else {
                                row.style.display = 'none';
                            }
                        });
                    });

                    // Mockup data for popup
                    const mockupData = {
                        1: { tanggalPinjam: '2024-08-01', tanggalKembali: '2024-08-31' },
                        2: { tanggalPinjam: '2024-07-20', tanggalKembali: '2024-08-19' },
                        3: { tanggalPinjam: '2024-08-10', tanggalKembali: '2024-09-09' },
                        4: { tanggalPinjam: '2024-08-05', tanggalKembali: '2024-09-04' },
                        5: { tanggalPinjam: '2024-07-25', tanggalKembali: '2024-08-24' }
                    };

                    function showPopup(id) {
                        const data = mockupData[id];
                        if (data) {
                            document.getElementById('popupContent').innerHTML = `
                                <p><strong>Tanggal Pinjam:</strong> ${data.tanggalPinjam}</p>
                                <p><strong>Tanggal Kembali:</strong> ${data.tanggalKembali}</p>
                            `;
                            document.getElementById('popup').style.display = 'block';
                        }
                    }

                    function closePopup() {
                        document.getElementById('popup').style.display = 'none';
                    }
                </script>
            </div>
        </div>
        <!-- Content End -->

        <!-- Footer Start -->
        <footer>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            <!-- Footer content can be added here if needed -->
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://www.instagram.com/ogaasedikitpintar"> .punyaku.</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

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
