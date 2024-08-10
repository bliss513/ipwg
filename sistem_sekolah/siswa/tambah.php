<?php
        include"koneksi.php";

        if(isset($_POST['simpan'])){
            $id= $_POST['id'];
            $nis= $_POST['nis'];
            $nama= $_POST['nama'];
            $kelas= $_POST['kelas'];
            $jurusan= $_POST['jurusan'];
            $jenis_kelamin= $_POST['jenis_kelamin'];
            $tanggal_bayar= $_POST['tanggal_bayar'];
            $jumlah_bayar= $_POST['jumlah_bayar'];
            $keterangan= $_POST['keterangan'];

            $sql = "INSERT INTO mahasiswa(id,nis,nama,kelas,jurusan,jenis_kelamin,tanggal_bayar,jumlah_bayar,keterangan)VALUES('$id','$nis','$nama','$kelas','$jurusan','$jenis_kelamin', '$tanggal_bayar','$jumlah_bayar','$keterangan')";
            if(mysqli_query($koneksi,$sql)){
                header('location:index.php');
            }else{
                echo "Oupss....Maaf proses penyimpan data tidak berhasil";
            }
        }
    ?>