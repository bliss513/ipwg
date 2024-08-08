<?php

$host     = "localhost";
$username = "root";
$password = "";
$database = "dasar_php";

$koneksi = new mysqli($host, $username, $password, $database);
if ($koneksi){
    echo "";
}else{
	echo "database tidak terkoneksi";
}
?>