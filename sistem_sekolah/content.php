<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "config/koneksi.php";

$mod = $_GET['p']??'pE081';

if ($mod=='pE081'){
include "pusat.php";
}

elseif ($mod=='pEh82'){
include "modul/dashboard/index_dashboard.php";
}

elseif ($mod=='pE093'){
include "modul/siswa/index_siswa.php";
}

else{
echo "<h2>Maaf, halaman belum tersedia!</h2>";
}
?>