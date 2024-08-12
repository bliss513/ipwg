<?php

$halaman = $_GET['p']?? 0;

if($halaman=="dashboard"){
   include "modul/dashboard/dashboard.php";
}elseif($halaman=="data_siswa"){
   include "modul/siswa/tambah_siswa.php";
}else{
   include "404.php"
}
?>