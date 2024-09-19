<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistem_sekolah";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM buku WHERE id='$id'");
    $hasil = mysqli_fetch_array($data);
}

// Handle form submission for updating
if (isset($_POST['simpan'])) {
    $tanggal_pinjam = mysqli_real_escape_string($conn, $_POST['borrowDate']);
    $tanggal_pengembalian = mysqli_real_escape_string($conn, $_POST['returnDate']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $sql = "UPDATE buku SET 
        tanggal_pinjam='$tanggal_pinjam', 
        tanggal_pengembalian='$tanggal_pengembalian', 
        status='$status' 
        WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header('Location: pinjaman.php');
        exit();
    } else {
        echo "Oups.... Maaf, proses penyimpanan data tidak berhasil: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sistem Peminjaman Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white; /* Changed background color to white */
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: white; /* Keep container background white */
        }
        h1 {
            text-align: center;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-bottom: 2px solid #ccc;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus, input[type="date"]:focus {
            border-color: #007bff;
            outline: none;
        }
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-bottom: 2px solid #ccc;
            background-color: white;
            transition: border-color 0.3s;
        }
        select:focus {
            border-color: #007bff;
            outline: none;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Sistem Peminjaman Buku</h1>
        <form id="updateForm" method="POST" action="">
            <label for="borrowDate">Tanggal Peminjaman:</label>
            <input type="date" id="borrowDate" name="borrowDate" value="<?php echo htmlspecialchars($hasil['tanggal_pinjam']); ?>" required>
            
            <label for="returnDate">Tanggal Pengembalian:</label>
            <input type="date" id="returnDate" name="returnDate" value="<?php echo htmlspecialchars($hasil['tanggal_pengembalian']); ?>" required>

            <label for="status">Status</label>
            <select id="status" name="status" required>
                <option value="tersedia" <?php echo ($hasil['status'] == 'tersedia' ? 'selected' : ''); ?>>Tersedia</option>
                <option value="dipinjam" <?php echo ($hasil['status'] == 'dipinjam' ? 'selected' : ''); ?>>Dipinjam</option>
                <option value="sudah dikembalikan" <?php echo ($hasil['status'] == 'sudah_dikembalikan' ? 'selected' : ''); ?>>Sudah Dikembalikan</option>
                <option value="lewat tempo" <?php echo ($hasil['status'] == 'lewat_tempo' ? 'selected' : ''); ?>>Lewat Tempo</option>
            </select>

            <button type="submit" name="simpan">Simpan Perubahan</button>
        </form>
    </div>

    <?php $conn->close(); ?>
</body>
</html>
