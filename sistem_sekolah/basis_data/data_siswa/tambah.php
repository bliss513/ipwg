<?php
        include"koneksi.php";

        if(isset($_POST['simpan'])){
            $id= $_POST['id'];
            $nama= $_POST['username'];
            $alamat= $_POST['password'];
            $logo= $_POST['nama'];
            $logo= $_POST['jenis_kelamin'];
            $logo= $_POST['nisn'];
            $logo= $_POST['tempat_lahir'];
            $logo= $_POST['tanggal_lahir'];
            $logo= $_POST['alamat'];
            $logo= $_POST['hp'];
            $logo= $_POST['email'];
            $logo= $_POST['foto'];
            $logo= $_POST['nama_wali'];
            $logo= $_POST['tahun_lahir_wali'];
            $logo= $_POST['pendidikan_wali'];
            $logo= $_POST['pekerjaan_wali'];
            $logo= $_POST['penghasilan_wali'];
            $logo= $_POST['angkatan'];
            $logo= $_POST['spp_nominal']; 

            $sql = "INSERT INTO mahasiswa(id,username,password,nama,jenis_kelamin,nisn,tempat_lahir,tanggal_lahir,alamat,hp,email,foto,nama_wali,tahun_lahir_wali,pendidikan_wali,perkerjaan_wali,penghasilan_wali,angkatan,spp_nominal)VALUES('$id','$username','$password','$nama','$jenis_kelamin','$nisn','$tempat_lahir','$tanggal_lahir','$alamat','$hp','$email','$foto','$nama_wali','$tahun_lahir_wali','$pendidikan_wali','$pekerjaan_wali','$penghasilan_wali','$angkatan','$spp_nominal)";
            if(mysqli_query($koneksi,$sql)){
                header('location:index.php');
            }else{
                echo "Oupss....Maaf proses penyimpan data tidak berhasil";
            }
        }
    ?>