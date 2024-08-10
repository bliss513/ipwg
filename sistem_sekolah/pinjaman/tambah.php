<?php
        include"../config/koneksi.php";

        if(isset($_POST['simpan'])){
            $id= $_POST['id'];
            $nis= $_POST['id_buku'];
            $nama= $_POST['id_siswa'];
            $kelas= $_POST['tanggal_pinjam'];
            $jurusan= $_POST['tanggal_rencana_pengembalian'];
            $jenis_kelamin= $_POST['tanggal_pengembalian'];
            $tanggal_bayar= $_POST['status'];
            $keterangan= $_POST['keterangan'];

            $sql = "INSERT INTO siswa(id,id_buku,nama,id_siswa,tanggal_pinjam,tanggal_rencana_pengembalian,tanggal_pengembalian,keterangan)VALUES('$id','$id_buku','$id_siswa','$tanggal_pinjam','$tanggal_rencana_pengembalian','$tanggal_pengembalian', '$status','$keterangan')";
            if(mysqli_query($koneksi,$sql)){
                header('location:index.php');
            }else{
                echo "Oupss....Maaf proses penyimpan data tidak berhasil";
            }
        }
    ?>