    <?php
        include"../../config/koneksi.php";

        if(isset($_POST['simpan'])){
            $nip= $_POST['nip'];
            $nama_guru= $_POST['nama_guru'];

            $sql = "INSERT INTO guru(id,nip,nama_guru) VALUES('$id', '$nip','$nama_guru')";
           if(mysqli_query($koneksi,$sql)){
                header('location:../../guru.php');
            }else{
                echo "Oupss....Maaf poses penyimpan data tidak berhasil";
            }
        }
    ?>