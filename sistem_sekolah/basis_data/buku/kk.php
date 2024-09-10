<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            justify-content: center; /* Menempatkan konten di tengah-tengah vertikal */
            align-items: center; /* Menempatkan konten di tengah-tengah horizontal */
        }
        .container {
            width: 100%;
            max-width: 800px; /* Menentukan lebar maksimum untuk kontainer */
            padding: 20px;
            box-sizing: border-box; /* Memastikan padding termasuk dalam lebar elemen */
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .form-container {
            margin-top: 20px;
        }
        .form-container form {
            display: flex;
            flex-direction: column;
        }
        .form-container input, .form-container select {
            padding: 12px; /* Memperbesar padding */
            font-size: 14px; /* Memperbesar ukuran font */
            margin-bottom: 15px; /* Menambah margin bawah */
            width: 100%; /* Membuat elemen input penuh lebar */
            max-width: 100%; /* Menghapus lebar maksimum */
            box-sizing: border-box; /* Memastikan padding dan border termasuk dalam lebar elemen */
        }
        .form-container input[type="button"] {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            padding: 12px; /* Memperbesar padding tombol */
            font-size: 14px; /* Memperbesar ukuran font tombol */
        }
        #dataContainer {
            margin-top: 20px;
        }
        #dataList {
            list-style-type: none;
            padding: 0;
        }
        #dataList li {
            margin-bottom: 15px; /* Menambah margin bawah item */
            padding: 15px; /* Memperbesar padding item */
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff; /* Menambahkan latar belakang putih untuk item */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pendaftaran Siswa</h1>

        <div class="form-container">
            <h2>Tambah Data Siswa</h2>
            <form id="registrationForm">
                <input type="text" id="name" placeholder="Nama" required>
                <select id="gender" required>
                    <option value="" disabled selected>Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <input type="text" id="id" placeholder="ID" required>
                <select id="class" required>
                    <option value="" disabled selected>Kelas</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <input type="text" id="academicYear" placeholder="Tahun Akademik" required>
                <input type="number" id="spp" placeholder="SPP" required>
                <input type="date" id="entryDate" required>
                <input type="button" value="Tambah" onclick="addRow()">
            </form>
        </div>

        <!-- Tempat untuk menampilkan data yang ditambahkan -->
        <div id="dataContainer">
            <h2>Data Siswa</h2>
            <ul id="dataList">
                <!-- Data yang ditambahkan akan muncul di sini -->
            </ul>
        </div>
    </div>

    <script>
        function addRow() {
            const dataList = document.getElementById('dataList');
            const name = document.getElementById('name').value;
            const gender = document.getElementById('gender').value;
            const id = document.getElementById('id').value;
            const className = document.getElementById('class').value;
            const academicYear = document.getElementById('academicYear').value;
            const spp = document.getElementById('spp').value;
            const entryDate = document.getElementById('entryDate').value;

            if (name && gender && id && className && academicYear && spp && entryDate) {
                const idClass = `${id}_${className}`; // Menggabungkan ID dan Kelas

                const listItem = document.createElement('li');
                listItem.textContent = `${name} (${gender}), ID_Kelas: ${idClass}, Tahun Akademik: ${academicYear}, SPP: ${spp}, Tanggal Masuk: ${entryDate}`;
                dataList.appendChild(listItem);
                
                // Clear the form
                document.getElementById('registrationForm').reset();
            } else {
                alert('Mohon lengkapi semua kolom!');
            }
        }
    </script>
</body>
</html>
