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
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Peralihan Siswa Naik Kelas</title>
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
            table-layout: fixed; /* Membuat lebar kolom tetap */
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
            width: 50px; /* Lebar kolom checkbox */
            text-align: center; /* Posisikan checkbox di tengah kolom */
        }

        td {
            text-align: left;
        }

        td input[type="checkbox"] {
            cursor: pointer;
            width: 20px; /* Ukuran checkbox seragam */
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
            justify-content: flex-end; /* Posisikan tombol ke kanan */
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
            <option value="8">8</option>
        </select>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Siswa</th>
                    <th>Kelas Saat Ini</th>
                    <th>Kelas Baru</th>
                    <th class="checkbox-column">
                        <input type="checkbox" id="select-all" onclick="toggleSelectAll(this)">
                    </th>
                </tr>
            </thead>
            <tbody id="tabel-body">
                <!-- Data Siswa Kelas 5 -->
                <tr>
                    <td>1</td>
                    <td>Andi</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="checkbox-column"><input type="checkbox" id="andi" name="peralihan" value="andi"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Budi</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="checkbox-column"><input type="checkbox" id="budi" name="peralihan" value="budi"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Citra</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="checkbox-column"><input type="checkbox" id="citra" name="peralihan" value="citra"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Dina</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="checkbox-column"><input type="checkbox" id="dina" name="peralihan" value="dina"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Eko</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="checkbox-column"><input type="checkbox" id="eko" name="peralihan" value="eko"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Fani</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="checkbox-column"><input type="checkbox" id="fani" name="peralihan" value="fani"></td>
                </tr>
                
                <!-- Data Siswa Kelas 6 -->
                <tr>
                    <td>7</td>
                    <td>Gina</td>
                    <td>6</td>
                    <td>7</td>
                    <td class="checkbox-column"><input type="checkbox" id="gina" name="peralihan" value="gina"></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Hadi</td>
                    <td>6</td>
                    <td>7</td>
                    <td class="checkbox-column"><input type="checkbox" id="hadi" name="peralihan" value="hadi"></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Ira</td>
                    <td>6</td>
                    <td>7</td>
                    <td class="checkbox-column"><input type="checkbox" id="ira" name="peralihan" value="ira"></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Joko</td>
                    <td>6</td>
                    <td>7</td>
                    <td class="checkbox-column"><input type="checkbox" id="joko" name="peralihan" value="joko"></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Kiki</td>
                    <td>6</td>
                    <td>7</td>
                    <td class="checkbox-column"><input type="checkbox" id="kiki" name="peralihan" value="kiki"></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Lia</td>
                    <td>6</td>
                    <td>7</td>
                    <td class="checkbox-column"><input type="checkbox" id="lia" name="peralihan" value="lia"></td>
                </tr>
                
                <!-- Data Siswa Kelas 7 -->
                <tr>
                    <td>13</td>
                    <td>Mario</td>
                    <td>7</td>
                    <td>8</td>
                    <td class="checkbox-column"><input type="checkbox" id="mario" name="peralihan" value="mario"></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Nina</td>
                    <td>7</td>
                    <td>8</td>
                    <td class="checkbox-column"><input type="checkbox" id="nina" name="peralihan" value="nina"></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Oka</td>
                    <td>7</td>
                    <td>8</td>
                    <td class="checkbox-column"><input type="checkbox" id="oka" name="peralihan" value="oka"></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Pia</td>
                    <td>7</td>
                    <td>8</td>
                    <td class="checkbox-column"><input type="checkbox" id="pia" name="peralihan" value="pia"></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Qasim</td>
                    <td>7</td>
                    <td>8</td>
                    <td class="checkbox-column"><input type="checkbox" id="qasim" name="peralihan" value="qasim"></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Rina</td>
                    <td>7</td>
                    <td>8</td>
                    <td class="checkbox-column"><input type="checkbox" id="rina" name="peralihan" value="rina"></td>
                </tr>
                
                <!-- Data Siswa Kelas 8 -->
                <tr>
                    <td>19</td>
                    <td>Sari</td>
                    <td>8</td>
                    <td>9</td>
                    <td class="checkbox-column"><input type="checkbox" id="sari" name="peralihan" value="sari"></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Toni</td>
                    <td>8</td>
                    <td>9</td>
                    <td class="checkbox-column"><input type="checkbox" id="toni" name="peralihan" value="toni"></td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Umi</td>
                    <td>8</td>
                    <td>9</td>
                    <td class="checkbox-column"><input type="checkbox" id="umi" name="peralihan" value="umi"></td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Vera</td>
                    <td>8</td>
                    <td>9</td>
                    <td class="checkbox-column"><input type="checkbox" id="vera" name="peralihan" value="vera"></td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Wira</td>
                    <td>8</td>
                    <td>9</td>
                    <td class="checkbox-column"><input type="checkbox" id="wira" name="peralihan" value="wira"></td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Xena</td>
                    <td>8</td>
                    <td>9</td>
                    <td class="checkbox-column"><input type="checkbox" id="xena" name="peralihan" value="xena"></td>
                </tr>
            </tbody>
        </table>

        <!-- Tombol Proses dipindahkan ke kanan bawah tabel -->
        <div class="button-container">
            <button onclick="prosesPeralihan()">Proses</button>
        </div>
    </div>

    <script>
        function filterKelas() {
            const select = document.getElementById('kelas-cari');
            const filter = select.value;
            const table = document.querySelector('table');
            const rows = table.querySelectorAll('tbody tr');

            rows.forEach(row => {
                const kelasSaatIni = row.cells[2].textContent;
                
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

        function prosesPeralihan() {
            const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
            const peralihan = [];

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    const row = checkbox.closest('tr');
                    const no = row.cells[0].textContent;
                    const namaSiswa = row.cells[1].textContent;
                    const kelasSaatIni = row.cells[2].textContent;
                    const kelasBaru = row.cells[3].textContent;
                    peralihan.push({ no, namaSiswa, kelasSaatIni, kelasBaru });
                }
            });

            alert('Peralihan yang dipilih:\n' + peralihan.map(p => 
                `No: ${p.no}, Nama: ${p.namaSiswa}, Kelas Saat Ini: ${p.kelasSaatIni}, Kelas Baru: ${p.kelasBaru}`
            ).join('\n'));
        }
    </script>
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