<?php

$host     = "localhost";
$username = "root";
$password = "";
$database = "sistem_sekolah";

$koneksi = new mysqli($host, $username, $password, $database);
if ($koneksi){
    echo "";
}else{
	echo "database tidak terkoneksi";
}
?>