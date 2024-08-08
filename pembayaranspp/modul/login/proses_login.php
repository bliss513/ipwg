<?php
session_start();

// Ganti dengan logika autentikasi yang sesuai
$validUsername = 'sifa';
$validPassword = 'sifa321';

$username = $_POST['username'];
$password = $_POST['password'];

// Validasi kredensial login
if ($username === $validUsername && $password === $validPassword) {
    $_SESSION['is_login'] = true;
    $_SESSION['username'] = $username;
    header('Location: ../../');
    exit();
} else {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Login Error</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color: cyan; /* Ganti latar belakang halaman menjadi cyan */
                font-family: Arial, sans-serif;
            }
            .error-container {
                background-color: #ffffff; /* Warna latar belakang container tetap putih */
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 20px;
                text-align: center;
            }
            .error-message {
                font-size: 20px;
                font-weight: bold;
                color: #721c24;
                margin-bottom: 20px;
            }
            .error-link {
                font-size: 16px;
                color: #0056b3;
                text-decoration: none;
                font-weight: bold;
            }
            .error-link:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class='error-container'>
            <p class='error-message'>Maaf, username atau password yang Anda masukkan salah.</p>
            <p><a href='login.php' class='error-link'>Coba lagi</a></p>
        </div>
    </body>
    </html>";
}
?>