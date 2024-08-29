<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPP Management System</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 50%; margin: auto; }
        form { margin-bottom: 20px; }
        label { display: block; margin: 10px 0 5px; }
        input, select { width: 100%; padding: 8px; margin-bottom: 10px; }
        button { padding: 10px 15px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #45a049; }
        .message { color: green; }
    </style>
</head>
<body>
    <div class="container">
        <h1>REGISTRASI SPP</h1>

     
       
        <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <form action="register_student.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
            <input type="text" id="password" name="password" required>
            <label for="status">Jenis Kelamin</label>
                <select id="status" required>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                <label for="nisn">Nisn:</label>
                <input type="text" id="nisn" name="nisn" required>
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" required>
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="text" id="tanggal_lahir" name="tanggal_lahir" required>
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
                <label for="hp">Hp:</label>
            <input type="text" id="hp" name="hp" required>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto" required>
            <label for="nama_wali">Nama Wali:</label>
            <input type="text" id="nama_wali" name="nama_wali" required>
            <label for="tahun_lahir_wali">Tanggal lahir wali:</label>
            <input type="date" id="tahun_lahir_wali" name="tahun_lahir_wali" required>
            <label for="pendidikan_wali">pendidikan wali:</label>
            <input type="text" id="pendidikan_wali" name="pendidikan_wali" required>
            <label for="pekerjaan_wali">Pekerjaan wali:</label>
            <input type="text" id="pekerjaan_wali" name="pekerjaan_wali" required>
            <label for="penghasilan_wali">Penghasilan wali:</label>
            <input type="text" id="penghasilan_wali" name="penghasilan_wali" required>
           
        <form action="make_payment.php" method="post">
        </select>

<label for="kelas">Kelas</label>
<select id="kelas" name="kelas" required>
    <option value="X">X</option>
    <option value="XI">XI</option>
    <option value="XII">XII</option>
</select>
          
            <button type="submit">simpan</button>
        </form>

        <div class="message">
            <?php
                // Display messages if any
                if (isset($_GET['message'])) {
                    echo htmlspecialchars($_GET['message']);
                }
            ?>
        </div>
    </div>
</body>
</html>
