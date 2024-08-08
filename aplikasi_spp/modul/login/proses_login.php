<?php
session_start();
require '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Mencegah SQL Injection
    $user = $koneksi->query("SELECT id, username, password FROM users WHERE username = '$username'");
    if ($user->num_rows > 0) {
        $user = $user->fetch_assoc();
        // Verifikasi password
        if ($password === $user['password']) {
            // Set session dan redirect ke halaman lain
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['is_login'] = true;
            header("Location: ../../index_siswa.php");
            exit();
        } else {
            echo "Username atau password salah.";
        }
    } else {
        echo "Username tidak ditemukan.";
    }
}

$koneksi->close();
?>
