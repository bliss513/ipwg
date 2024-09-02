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
        }

        .form-container {
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap; /* Agar elemen dapat membungkus jika ruang tidak cukup */
            gap: 20px;
        }

        .form-item {
            flex: 1;
            min-width: 220px; /* Menjaga lebar minimum elemen form */
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

        td:first-child {
            text-align: left; /* Tanggal Pinjam di sebelah kiri */
        }

        td:last-child {
            text-align: right; /* Tanggal Pengembalian di sebelah kanan */
        }
    </style>
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
        
        <?php include 'sidebar.php'; ?>
        
        <!-- Content Start -->
        <div class="content">
            <?php include 'header.php'; ?>
            
            <div class="container">
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
                        <label for="tanggalKembali">Tanggal Pengembalian:</label>
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
                                <th>Tanggal Pinjam</th> <!-- Kolom untuk tanggal pinjam -->
                                <th>Judul</th>
                                <th>Status</th>
                                <th>Tanggal Pengembalian</th> <!-- Kolom untuk tanggal pengembalian -->
                            </tr>
                        </thead>
                        <tbody id="pinjamanTableBody">
                            <!-- Baris awal tabel dibiarkan kosong karena akan diisi dengan JavaScript -->
                        </tbody>
                    </table>

                    <div class="button-container-right">
                        <button type="button" onclick="showAll()">Tampilkan Semua</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->
        
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <div id="popup" class="popup">
        <span class="close" onclick="closePopup()">×</span>
        <h2>Detail Pinjaman</h2>
        <p><strong>Judul:</strong> <span id="popupJudul"></span></p>
        <p><strong>Status:</strong> <span id="popupStatus"></span></p>
        <p><strong>Tanggal Pinjam:</strong> <span id="popupTanggalPinjam"></span></p>
        <p><strong>Tanggal Pengembalian:</strong> <span id="popupTanggalKembali"></span></p>
        <button onclick="closePopup()">Tutup</button>
    </div>

    <!-- Javascript Libraries -->
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
        const pinjaman = [
            {
                id: 1,
                judul: 'tips agar dapat uang',
                status: 'Dipinjam',
                tanggalPinjam: '2023-09-01',
                tanggalKembali: '2023-10-01'
            },
            {
                id: 2,
                judul: 'dongeng anak',
                status: 'Kembali',
                tanggalPinjam: '2023-08-01',
                tanggalKembali: '2023-09-01'
            },
            {
                id: 3,
                judul: 'kode keras cewe',
                status: 'Lewat Tempo',
                tanggalPinjam: '2023-07-01',
                tanggalKembali: '2023-08-01'
            },
            {
                id: 4,
                judul: 'siksa neraka',
                status: 'Dipinjam',
                tanggalPinjam: '2023-09-05',
                tanggalKembali: '2023-10-05'
            },
            {
                id: 5,
                judul: 'hidup dan mati',
                status: 'Dipinjam',
                tanggalPinjam: '2023-09-10',
                tanggalKembali: '2023-10-10'
            }
        ];

        document.getElementById('prosesButton').addEventListener('click', function () {
            const judul = document.getElementById('judul').value;
            const status = document.getElementById('status').value;
            const tanggalPinjam = document.getElementById('tanggalPinjam').value;
            const tanggalKembali = document.getElementById('tanggalKembali').value;

            const newPinjaman = {
                id: pinjaman.length + 1,
                judul: judul,
                status: status,
                tanggalPinjam: tanggalPinjam,
                tanggalKembali: tanggalKembali
            };

            pinjaman.push(newPinjaman);
            updateTable();

            // Kosongkan input setelah data ditambahkan
            document.getElementById('judul').value = '';
            document.getElementById('status').value = 'Dipinjam';
            document.getElementById('tanggalPinjam').value = '';
            document.getElementById('tanggalKembali').value = '';
        });

        function updateTable() {
            const tableBody = document.getElementById('pinjamanTableBody');
            tableBody.innerHTML = '';
            pinjaman.forEach(item => {
                const row = document.createElement('tr');
                row.setAttribute('data-id', item.id);
                row.innerHTML = `
                    <td>${item.tanggalPinjam}</td>
                    <td>${item.judul}</td>
                    <td>${item.status}</td>
                    <td>${item.tanggalKembali}</td>
                `;
                row.addEventListener('click', function () {
                    showPopup(item.id);
                });
                tableBody.appendChild(row);
            });
        }

        function showPopup(id) {
            const item = pinjaman.find(p => p.id === id);
            if (item) {
                document.getElementById('popupJudul').textContent = item.judul;
                document.getElementById('popupStatus').textContent = item.status;
                document.getElementById('popupTanggalPinjam').textContent = item.tanggalPinjam;
                document.getElementById('popupTanggalKembali').textContent = item.tanggalKembali;
                document.getElementById('popup').style.display = 'block';
            }
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }

        function showAll() {
            updateTable();
        }

        document.getElementById('searchInput').addEventListener('input', function () {
            const filter = this.value.toLowerCase();
            const filteredPinjaman = pinjaman.filter(item => item.judul.toLowerCase().includes(filter));
            updateTableWithFilter(filteredPinjaman);
        });

        function updateTableWithFilter(filteredPinjaman) {
            const tableBody = document.getElementById('pinjamanTableBody');
            tableBody.innerHTML = '';
            filteredPinjaman.forEach(item => {
                const row = document.createElement('tr');
                row.setAttribute('data-id', item.id);
                row.innerHTML = `
                    <td>${item.tanggalPinjam}</td>
                    <td>${item.judul}</td>
                    <td>${item.status}</td>
                    <td>${item.tanggalKembali}</td>
                `;
                row.addEventListener('click', function () {
                    showPopup(item.id);
                });
                tableBody.appendChild(row);
            });
        }

        showAll();
    </script>
</body>

</html>
