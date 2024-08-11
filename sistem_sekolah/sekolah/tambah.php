<?php
        include"../config/koneksi.php";

        if(isset($_POST['simpan'])){
            $id= $_POST['id'];
            $nama= $_POST['nama'];
            $alamat= $_POST['alamat'];
            $logo= $_POST['logo'];

            $sql = "INSERT INTO mahasiswa(id,nama,alamat,logo)VALUES('$id','$nama','$alamat','$logo')";
            if(mysqli_query($koneksi,$sql)){
                header('location:index.php');
            }else{
                echo "Oupss....Maaf proses penyimpan data tidak berhasil";
            }
        }
    ?>