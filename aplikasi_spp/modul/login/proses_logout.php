<?php
// Mulai sesi
session_start();

// Hapus semua variabel sesi
session_unset();

// Hapus sesi
session_destroy();

// Redirect ke halaman login atau halaman lain
header("Location:/ipwg/aplikasi_spp");
exit();
?>