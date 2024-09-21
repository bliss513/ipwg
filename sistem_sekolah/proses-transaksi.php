<?php
include "config/koneksi.php"; // Include your database connection

if (isset($_POST['simpan'])) {
    // Retrieve form data
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $jumlah_bayar = $_POST['jumlah_bayar'];
    $sisa_bayar = $_POST['sisa_bayar'];
    $total_bayar = $_POST['total_bayar'];
    $status = $_POST['status'];

    // Handle file upload
    if (!empty($foto)) {
        $target_dir = "uploads/"; // Ensure this directory exists and is writable
        $target_file = $target_dir . basename($foto);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
    }

    // Insert into the database
    $query = "INSERT INTO siswa (nama, nisn, jumlah_bayar, sisa_bayar, total_bayar, status) 
              VALUES ('$nama', '$nisn', '$jumlah_bayar', '$sisa_bayar', '$total_bayar', '$status')";

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil ditambahkan!";
        header("Location: pembayaran.php"); // Redirect to the button page after success
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    // Close the connection
    mysqli_close($koneksi);
}
?>
