<?php
        include"koneksi.php";

        if(isset($_POST['simpan'])){
            $logo= $_POST['nama'];
            $logo= $_POST['nisn'];

            $sql = "INSERT INTO mahasiswa(nama,nisn)VALUES('$nama','$nisn')";
            if(mysqli_query($koneksi,$sql)){
                header('location:index.php');
            }else{
                echo "Oupss....Maaf proses penyimpan data tidak berhasil";
            }
        }
    ?>