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
        <?php include 'sidebar.php'; ?>
        <!-- Content Start -->
        <div class="content">
        <?php include 'header.php'; ?>
            <!-- Table Start -->
            <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pinjaman Perpustakaan</title>
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

        .form-container, .table-container {
            margin-bottom: 20px;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .form-container .form-item {
            flex: 1;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
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
            margin-top: 20px; /* Adjust margin to add space between form and table */
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left; /* Default alignment for text */
        }

        th {
            background-color: #007bff; /* Warna biru untuk header tabel */
            color: white; /* Warna teks putih untuk header tabel */
        }

        td:nth-child(1) {
            text-align: left; /* Align first column (Judul) to the left */
        }

        td:nth-child(2) {
            text-align: right; /* Align second column (Status) to the right */
        }

        th:nth-child(1) {
            text-align: left; /* Align header of first column (Judul) to the left */
        }

        th:nth-child(2) {
            text-align: right; /* Align header of second column (Status) to the right */
        }

        .share-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        .share-button:hover {
            background-color: #0056b3;
        }

        .button-container {
            display: flex;
            justify-content: flex-end; /* Align button to the right */
            margin-top: 20px;
        }

        .search-container {
            margin-top: 20px;
            margin-bottom: 20px;
            max-width: 300px; /* Mengatur lebar maksimum dari area pencarian */
        }

        .search-container input {
            width: 100%;
            padding: 8px; /* Mengurangi padding untuk memperkecil area input */
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px; /* Mengurangi ukuran font untuk menyesuaikan dengan ukuran input */
        }

        /* Additional styles for spacing between form items */
        .form-item {
            margin-right: 20px; /* Add margin to the right of each form item */
        }

        .form-container .form-item:last-child {
            margin-right: 0; /* Remove margin on the last form item */
        }
    </style>
</head>
<body>
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
        </div>
        
        <div class="button-container">
            <button type="submit" id="prosesButton">Proses</button>
        </div>
        
        <div class="table-container">
            <h2>Daftar Pinjaman</h2>
            
            <!-- Pencarian -->
            <div class="search-container">
                <label for="searchInput">Judul:</label>
                <input type="text" id="searchInput" placeholder="Cari...">
            </div>
            
            <table id="pinjamanTable">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="pinjamanTableBody">
                    <!-- Data buku yang sudah ada -->
                    <tr>
                        <td>tips agar dapat uang</td>
                        <td>Dipinjam</td>
                    </tr>
                    <tr>
                        <td>dongeng anak</td>
                        <td>Kembali</td>
                    </tr>
                    <tr>
                        <td>kode keras cewe</td>
                        <td>Lewat Tempo</td>
                    </tr>
                    <tr>
                        <td>siksa neraka</td>
                        <td>Dipinjam</td>
                    </tr>
                    <tr>
                        <td>hidup enak tanpa narkoba</td>
                        <td>Kembali</td>
                    </tr>
                </tbody>
            </table>
            
            <button class="share-button" id="shareButton">Bagikan Data</button>
        </div>
    </div>

    <script>
        // Menambahkan data ke tabel
        document.getElementById('prosesButton').addEventListener('click', function() {
            const judul = document.getElementById('judul').value;
            const status = document.getElementById('status').value;
            if (judul && status) {
                const tableBody = document.getElementById('pinjamanTableBody');
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${judul}</td>
                    <td>${status}</td>
                `;
                tableBody.appendChild(newRow);

                // Clear the input fields after adding data
                document.getElementById('judul').value = '';
                document.getElementById('status').value = 'Dipinjam';
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
    </script>
</body>
</html>

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