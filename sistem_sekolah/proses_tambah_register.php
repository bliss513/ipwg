<?php
include "config/koneksi.php"; // Include your database connection

if (isset($_POST['simpan'])) {
    // Retrieve form data
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $username = $_POST['username'];
    $password = $_POST['password']; // Consider hashing this
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_hp'];
    $email = $_POST['email'];
    $foto = $_FILES['foto']['name'];
    $nama_wali = $_POST['nama_wali'];
    $tahun_lahir_wali = $_POST['tahun_lahir_wali'];
    $pendidikan_wali = $_POST['pendidikan_wali'];
    $pekerjaan_wali = $_POST['pekerjaan_wali'];
    $penghasilan_wali = $_POST['penghasilan_wali'];
    $angkatan = $_POST['angkatan'];
    $spp_nominal = $_POST['spp_nominal'];

    // Handle file upload
    if (!empty($foto)) {
        $target_dir = "uploads/"; // Ensure this directory exists and is writable
        $target_file = $target_dir . basename($foto);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
    }

    // Insert into the database
    $query = "INSERT INTO siswa (nama, nisn, username, password, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, nomor_hp, email, foto, nama_wali, tahun_lahir_wali, pendidikan_wali, pekerjaan_wali, penghasilan_wali, angkatan, spp_nominal) 
              VALUES ('$nama', '$nisn', '$username', '$password', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$nomor_hp', '$email', '$foto', '$nama_wali', '$tahun_lahir_wali', '$pendidikan_wali', '$pekerjaan_wali', '$penghasilan_wali', '$angkatan', '$spp_nominal')";

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil ditambahkan!";
        header("Location: button.php"); // Redirect to the button page after success
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    // Close the connection
    mysqli_close($koneksi);
}
?>
