    <?php
        include"../config/koneksi.php";

        if(isset($_POST['simpan'])){
            $username= $_POST['username'];
            $password= $_POST['password'];
            $nip= $_POST['nip'];
            $sekolah= $_POST['sekolah'];
            $nama_guru= $_POST['nama_guru'];
            $nik= $_POST['nik'];
            $pengawas_bidang_studi= $_POST['pengawas_bidang_studi'];
            $alamat= $_POST['alamat'];
            $hp= $_POST['hp'];

            $sql = "INSERT INTO mahasiswa(username,password,nip,sekolah,nama_guru,nik,pengawas_bidang_studi,alamat,hp) VALUES('$id','$username','$password','$nip','$sekolah','$nama_guru','$tempat_lahir','$tanggal_lahir','$nik','$pengawas_bidang_studi','$alamat','$hp')";
            if(mysqli_query($koneksi,$sql)){
                header('location:../../guru.php');
            }else{
                echo "Oupss....Maaf proses penyimpan data tidak berhasil";
            }
        }
    ?>