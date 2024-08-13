    <?php
        include"../config/koneksi.php";

        if(isset($_POST['simpan'])){
            $id= $_POST['id'];
            $username= $_POST['username'];
            $password= $_POST['password'];
            $nip= $_POST['nip'];
            $sekolah= $_POST['sekolah'];
            $nama_guru= $_POST['nama_guru'];
            $nik= $_POST['nik'];
            $pengawas_bidang_studi= $_POST['pengawas_bidang_studi'];
            $alamat= $_POST['alamat'];
            $hp= $_POST['hp'];

            $sql = "INSERT INTO mahasiswa(id,username,password,nip,sekolah,nama_guru,jenis_kelamin,nik,pengawas_bidang_studi,alamat,hp) VALUES('$id','$username','$password','$nip','$sekolah','$nama_guru','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$nik','$pengawas_bidang_studi','$alamat','$hp')";
            if(mysqli_query($koneksi,$sql)){
                header('location:index.php');
            }else{
                echo "Oupss....Maaf proses penyimpan data tidak berhasil";
            }
        }
    ?>