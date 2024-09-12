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
            table-layout: fixed;
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
            width: 50px;
            text-align: center;
        }

        td input[type="checkbox"] {
            cursor: pointer;
            width: 20px;
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
            justify-content: flex-end;
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

        .table-wrapper {
            margin-top: 20px;
        }

        .result-table-container, .active-table-container {
            margin-bottom: 20px;
        }

        .result-table-container table, .active-table-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .result-table-container th, .active-table-container th, .result-table-container td, .active-table-container td {
            padding: 10px;
            text-align: left;
            border: 1px solid black;
        }

        .result-table-container th, .active-table-container th {
            background-color: #f2f2f2;
        }

        .inactive {
            background-color: #f9d6d6; /* Light red background for inactive rows */
            text-decoration: line-through; /* Strikethrough text for inactive rows */
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
           
        </select>
    </div> 
    <div class="table-container">
        <table id="siswa-table">
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
                <tr data-class="5">
                    <td>1</td>
                    <td>Andi</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="checkbox-column"><input type="checkbox" id="andi" name="peralihan" value="andi"></td>
                </tr>
                <tr data-class="5">
                    <td>2</td>
                    <td>Budi</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="checkbox-column"><input type="checkbox" id="budi" name="peralihan" value="budi"></td>
                </tr>
                <tr data-class="5">
                    <td>3</td>
                    <td>Citra</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="checkbox-column"><input type="checkbox" id="citra" name="peralihan" value="citra"></td>
                </tr>
                <tr data-class="5">
                    <td>4</td>
                    <td>Dina</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="checkbox-column"><input type="checkbox" id="dina" name="peralihan" value="dina"></td>
                </tr>
                <tr data-class="5">
                    <td>5</td>
                    <td>Eko</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="checkbox-column"><input type="checkbox" id="eko" name="peralihan" value="eko"></td>
                </tr>
                <tr data-class="5">
                    <td>6</td>
                    <td>Fani</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="checkbox-column"><input type="checkbox" id="fani" name="peralihan" value="fani"></td>
                </tr>
                
                <!-- Data Siswa Kelas 6 -->
                <tr data-class="6">
                    <td>7</td>
                    <td>Gina</td>
                    <td>6</td>
                    <td>7</td>
                    <td class="checkbox-column"><input type="checkbox" id="gina" name="peralihan" value="gina"></td>
                </tr>
                <tr data-class="6">
                    <td>8</td>
                    <td>Hadi</td>
                    <td>6</td>
                    <td>7</td>
                    <td class="checkbox-column"><input type="checkbox" id="hadi" name="peralihan" value="hadi"></td>
                </tr>
                <tr data-class="6">
                    <td>9</td>
                    <td>Ira</td>
                    <td>6</td>
                    <td>7</td>
                    <td class="checkbox-column"><input type="checkbox" id="ira" name="peralihan" value="ira"></td>
                </tr>
                <tr data-class="6">
                    <td>10</td>
                    <td>Joko</td>
                    <td>6</td>
                    <td>7</td>
                    <td class="checkbox-column"><input type="checkbox" id="joko" name="peralihan" value="joko"></td>
                </tr>
                <tr data-class="6">
                    <td>11</td>
                    <td>Kiki</td>
                    <td>6</td>
                    <td>7</td>
                    <td class="checkbox-column"><input type="checkbox" id="kiki" name="peralihan" value="kiki"></td>
                </tr>
                <tr data-class="6">
                    <td>12</td>
                    <td>Lia</td>
                    <td>6</td>
                    <td>7</td>
                    <td class="checkbox-column"><input type="checkbox" id="lia" name="peralihan" value="lia"></td>
                </tr>
                
                <!-- Data Siswa Kelas 7 -->
                <tr data-class="7">
                    <td>13</td>
                    <td>Mario</td>
                    <td>7</td>
                    <td>8</td>
                    <td class="checkbox-column"><input type="checkbox" id="mario" name="peralihan" value="mario"></td>
                </tr>
                <tr data-class="7">
                    <td>14</td>
                    <td>Nina</td>
                    <td>7</td>
                    <td>8</td>
                    <td class="checkbox-column"><input type="checkbox" id="nina" name="peralihan" value="nina"></td>
                </tr>
                <tr data-class="7">
                    <td>15</td>
                    <td>Oka</td>
                    <td>7</td>
                    <td>8</td>
                    <td class="checkbox-column"><input type="checkbox" id="oka" name="peralihan" value="oka"></td>
                </tr>
                <tr data-class="7">
                    <td>16</td>
                    <td>Putu</td>
                    <td>7</td>
                    <td>8</td>
                    <td class="checkbox-column"><input type="checkbox" id="putu" name="peralihan" value="putu"></td>
                </tr>
                <tr data-class="7">
                    <td>17</td>
                    <td>Qina</td>
                    <td>7</td>
                    <td>8</td>
                    <td class="checkbox-column"><input type="checkbox" id="qina" name="peralihan" value="qina"></td>
                </tr>
                <tr data-class="7">
                    <td>18</td>
                    <td>Rian</td>
                    <td>7</td>
                    <td>8</td>
                    <td class="checkbox-column"><input type="checkbox" id="rian" name="peralihan" value="rian"></td>
                </tr>
            </tbody>
        </table>

        <div class="button-container">
            <button onclick="prosesPeralihan()">Proses</button>
        </div>
        
        <!-- Placeholder for result and active tables -->
        <div class="table-wrapper">
            <div id="result-table-container" class="result-table-container"></div>
            <div id="active-table-container" class="active-table-container"></div>
        </div>
    </div>

    <script>
        function filterKelas() {
            const select = document.getElementById('kelas-cari');
            const filter = select.value;
            const rows = document.querySelectorAll('#siswa-table tbody tr');

            rows.forEach(row => {
                const kelasSaatIni = row.dataset.class;

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
    const active = [];
    const rows = document.querySelectorAll('#siswa-table tbody tr');

    rows.forEach(row => {
        const checkbox = row.querySelector('input[type="checkbox"]');
        const no = row.cells[0].textContent;
        const namaSiswa = row.cells[1].textContent;
        const kelasSaatIni = row.cells[2].textContent;
        const kelasBaru = row.cells[3].textContent;
        const status = checkbox.checked ? 'Inactive' : 'Active';
        
        if (checkbox.checked) {
            peralihan.push({ no, namaSiswa, kelasSaatIni, kelasBaru, status });
        } else {
            active.push({ no, namaSiswa, kelasSaatIni, kelasBaru, status });
        }
    });

    displayResultTable(peralihan);
    displayActiveTable(active);
}

function displayResultTable(peralihan) {
    const container = document.getElementById('result-table-container');
    container.innerHTML = ''; // Clear previous content

    if (peralihan.length === 0) {
        container.innerHTML = '<p>No data selected.</p>';
        return;
    }

    let tableHtml = `
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Siswa</th>
                    <th>Kelas Saat Ini</th>
                    <th>Kelas Baru</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
    `;

    peralihan.forEach(item => {
        tableHtml += `
            <tr>
                <td>${item.no}</td>
                <td>${item.namaSiswa}</td>
                <td>${item.kelasSaatIni}</td>
                <td>${item.kelasBaru}</td>
                <td>${item.status}</td>
            </tr>
        `;
    });

    tableHtml += '</tbody></table>';
    container.innerHTML = tableHtml;
}

function displayActiveTable(active) {
    const container = document.getElementById('active-table-container');
    container.innerHTML = ''; // Clear previous content

    if (active.length === 0) {
        container.innerHTML = '<p>No active students.</p>';
        return;
    }

    let tableHtml = `
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Siswa</th>
                    <th>Kelas Saat Ini</th>
                    <th>Kelas Baru</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
    `;

    active.forEach(item => {
        tableHtml += `
            <tr>
                <td>${item.no}</td>
                <td>${item.namaSiswa}</td>
                <td>${item.kelasSaatIni}</td>
                <td>${item.kelasBaru}</td>
                <td>${item.status}</td>
            </tr>
        `;
    });

    tableHtml += '</tbody></table>';
    container.innerHTML = tableHtml;
}


        function displayActiveTable(active) {
            const container = document.getElementById('active-table-container');
            container.innerHTML = ''; // Clear previous content

            if (active.length === 0) {
                container.innerHTML = '<p>No active students.</p>';
                return;
            }

            let tableHtml = `
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Siswa</th>
                            <th>Kelas Saat Ini</th>
                            <th>Kelas Baru</th>
                        </tr>
                    </thead>
                    <tbody>
            `;

            active.forEach(item => {
                tableHtml += `
                    <tr>
                        <td>${item.no}</td>
                        <td>${item.namaSiswa}</td>
                        <td>${item.kelasSaatIni}</td>
                        <td>${item.kelasBaru}</td>
                    </tr>
                `;
            });

            tableHtml += '</tbody></table>';
            container.innerHTML = tableHtml;
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