<?php
 include"../config/koneksi.php";
 $id= $_GET['id'];
 $data= mysqli_query($koneksi,"SELECT * FROM mahasiswa where id='$id'");
 while ($hasil= mysqli_fetch_array($data)){

?>
<!DOCTYPE html>
<html>
<head>
	<title>Mengubah Data Mahasiswa</title>
</head>
<body>
	<h1>Ubah Data</h1>
	<form method="post" action="">
		<label>username</label><br>
		<input type="text" name="username"value="<?php echo $hasil ['username']?>"><br>
        <label>password</label><br>
		<input type="text" name="password"value="<?php echo $hasil ['password']?>"><br>
		<label>nip</label><br>
		<input type="file" name="nip"value="<?php echo $hasil ['nip']?>"><br>
        <label>sekolah</label><br>
		<input type="text" name="sekolah"value="<?php echo $hasil ['sekolah']?>"><br>
        <label>nama guru</label><br>
		<input type="text" name="nama_guru"value="<?php echo $hasil ['nama_guru']?>"><br>
        <label>nik</label><br>
		<input type="text" name="nik"value="<?php echo $hasil ['nik']?>"><br>
        <label>pengawas bidang studi</label><br>
		<input type="text" name="pengawas_bidang_studi"value="<?php echo $hasil ['pengawas_bidang_studi']?>"><br>
        <label>alamat</label><br>
		<input type="text" name="alamat"value="<?php echo $hasil ['alamat']?>"><br>
        <label>hp</label><br>
		<input type="text" name="hp"value="<?php echo $hasil ['hp']?>"><br>
        <button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
	<?php } ?>
</body>
</html>
<?php
    include"../config/koneksi.php";

    if(isset($_POST['simpan'])){
    	$username= $_POST['username'];
        $password= $_POST['password'];
        $nip= $_POST['nip'];
        $sekolah= $_POST['sekolah'];
    	$nama_guru= $_POST['nama_guru'];
        $jenis_kelamin= $_POST['jenis_kelamin'];
    	$nik= $_POST['nik'];
        $pengawas_bidang_studi= $_POST['pengawas_bidang_studi'];
        $alamat= $_POST['alamat'];
        $hp= $_POST['hp'];
        $sql = "UPDATE mahasiswa SET username='$username', password='$password', nip='$nip', sekolah='$sekolah', nama_guru='$nama_guru', jenis_kelamin='$jenis_kelamin', nik='$nik', pengawas_bidang_studi='$pengawas_bidang_studi', alamat='$alamat', hp='$hp' WHERE id='$id'"; 
    	//cek apakah proses simpan berhasil
    	if(mysqli_query($koneksi,$sql)){
    	//jika berhasil, redirect ke index.php
    		header('location:index.php');
    	}else{
    		//jika tidak berhasil
    		echo "Oupss....Maaf proses penyimpan data tidak berhasil";
    	}
    }
?>