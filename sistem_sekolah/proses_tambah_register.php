<?php
include"config/koneksi.php";

if(isset($_POST['simpan'])){
   
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nisn = $_POST['nisn'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $foto = $_POST['foto'];
    $nama_wali = $_POST['nama_wali'];
    $tahun_lahir_wali = $_POST['tahun_lahir_wali'];
    $pendidikan_wali = $_POST['pendidikan_wali'];
    $pekerjaan_wali = $_POST['pekerjaan_wali'];
    $penghasilan_wali = $_POST['penghasilan_wali'];
    $angkatan = $_POST['angkatan'];
    $spp_nominal = $_POST['spp_nominal'];
    $nomer_hp = $_POST['nomer_hp'];
   

    $sql = "INSERT INTO siswa( username, password, nama, jenis_kelamin, nisn, tempat_lahir, tanggal_lahir, alamat, email, foto, nama_wali, tahun_lahir_wali, pendidikan_wali, pekerjaan_wali, penghasilan_wali, angkatan, spp_nominal, nomer_hp) VALUES( '$username', '$password', '$nama', '$jenis_kelamin', '$nisn', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$email', '$foto', '$nama_wali', '$tahun_lahir_wali', '$pendidikan_wali', '$pekerjaan_wali', '$penghasilan_wali', '$angkatan', '$spp_nominal', '$nomer_hp')";

    $id_kelas = $_POST['id_kelas'];
   
    $tahun_akademik = $_POST['tahun_akademik'];
   

    $sql = "INSERT INTO anggota_kelas( id_kelas, tahun_akademik,) VALUES('$id_kelas', '$tahun_akademik',  )";
    
   
    $wajib_spp = $_POST['wajib_spp'];
    $tanggal_masuk = $_POST['tanggal_masuk'];


    $sql = "INSERT INTO rencana_spp( wajib_spp, tanggal_masuk ) VALUES( '$wajib_spp',  '$tanggal_masuk', )";

    if(mysqli_query($koneksi, $sql)){
        header('location:./button.php');
    } else {
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }


}
?>