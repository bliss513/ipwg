<?php
include"../../config/koneksi.php";

if(isset($_POST['simpan'])){
    $Id = $_POST['Id'];
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
   

    $sql = "INSERT INTO siswa(id, username, password, nama, jenis_kelamin, nisn, tempat_lahir, tanggal_lahir, alamat, email, foto, nama_wali, tahun_lahir_wali, pendidikan_wali, pekerjaan_wali, penghasilan_wali, angkatan, spp_nominal, nomer_hp) VALUES('$id', '$username', '$password', '$nama', '$jenis_kelamin', '$nisn', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$email', '$foto', '$nama_wali', '$tahun_lahir_wali', '$pendidikan_wali', '$pekerjaan_wali', '$penghasilan_wali', '$angkatan', '$spp_nominal', '$nomer_hp')";

    $Id = $_POST['Id'];
    $id_kelas = $_POST['id_kelas'];
    $id_siswa = $_POST['id_siswa'];
    $tahun_akademik = $_POST['tahun_akademik'];
    $status_anggota = $_POST['status_anggota'];

    $sql = "INSERT INTO anggota_kelas(id, id_kelas, id_siswa, tahun_akademik, status_anggota, ) VALUES('$id', '$id_kelas', '$id_siswa', '$tahun_akademik', '$status_anggota', )";
    
    $Id = $_POST['Id'];
    $id_siswa = $_POST['id_siswa'];
    $pembayaran_ke= $_POST['pembayaran_ke'];
    $bulan_pembayaran = $_POST['bulan_pembayaran'];
    $wajib_spp = $_POST['wajib_spp'];
    $id_user = $_POST['id_user'];
    $tanggal_masuk = $_POST['tanggal_masuk'];


    $sql = "INSERT INTO rencana_spp(id, id_siswa, pembayaran_ke, bulan_pembayaran, wajib_spp, id_user, tanggal_masuk ) VALUES('$id', '$id_siswa', '$pembayaran_ke', '$bulan_pembayaran', '$wajib_spp', '$id_user', '$tanggal_masuk', )";

    if(mysqli_query($koneksi, $sql)){
        header('location:../../button.php');
    } else {
        echo "Oupss....Maaf proses penyimpanan data tidak berhasil";
    }


}
?>