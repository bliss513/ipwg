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
        /* Styling untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        caption {
            caption-side: top;
            font-size: 1.5em;
            margin: 10px 0;
        }
        tr:hover {
            background-color: #f5f5f5;
            cursor: pointer;
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
                                <td>kode keras cewe</td>
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
