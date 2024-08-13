<?php

$host     = "localhost";
$username = "root";
$password = "";
$database = "mahasiswa";

$koneksi = new mysqli($host, $username, $password, $database);
if ($koneksi){
    echo "";
}else{
	echo "database tidak terkoneksi";
}
?>