<?php
        include"../config/koneksi.php";

        if(isset($_POST['simpan'])){
            $id= $_POST['id'];
            $kd_kelas= $_POST['kd_kelas'];
            $tingkat= $_POST['tingkat'];
            $nama_kelas= $_POST['nama_kelas'];
           
            $sql = "INSERT INTO kelas(id, kd_kelas, tingkat, nama_kelas, )VALUES('$id','$kd_kelas','$tingkat','$nama_kelas',)";
            if(mysqli_query($koneksi,$sql)){
                header('location:index_siswa.php');
            }else{
                echo "Oupss....Maaf proses penyimpan data tidak berhasil";
            }
        }
    ?>