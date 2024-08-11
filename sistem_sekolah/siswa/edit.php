<?php
 include"../config/koneksi.php";
 $id= $_GET['id'];
 $data= mysqli_query($koneksi,"SELECT * FROM siswa where id='$id'");
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
		<label>Id</label><br>
		<input type="text" name="id" value="<?php echo $hasil ['id']?>"><br>
		<label>username</label><br>
		<input type="text" name="username"value="<?php echo $hasil ['username']?>"><br>
		<label>password</label><br>
		<input type="text" name="password"value="<?php echo $hasil ['password']?>"><br>
		<label>nama</label><br>
		<input type="text" name="nama"value="<?php echo $hasil ['nama']?>"><br>
		<label>jenis kelamin</label><br>
		<input type="radio" name="jenis_kelamin"value="laki-laki">
		<label for="laki-laki">laki-laki</label><br>
		<input type="radio" name="jenis_kelamin"value="perempuan">
		<label for="perempuan">perempuan</label><br>
		<label>nisn</label><br>
		<input type="text" name="nisn"value="<?php echo $hasil ['nisn']?>"><br>
		<label>tempat lahir</label><br>
		<input type="text" name="tempat_lahir"value="<?php echo $hasil ['tempat_lahir']?>"><br>
		<label>tanggal lahir</label><br>
		<input type="date" name="tanggal_lahir" value="<?php echo $hasil ['tanggal_lahir']?>"><br>
		<label>alamat</label><br>
		<input type="text" name="alamat"value="<?php echo $hasil ['alamat']?>"><br>
		<label>hp</label><br>
		<input type="text" name="hp"value="<?php echo $hasil ['hp']?>"><br>
		<label>email</label><br>
		<input type="text" name="email"value="<?php echo $hasil ['email']?>"><br>
		<label>foto</label><br>
		<input type="text" name="foto"value="<?php echo $hasil ['foto']?>"><br>
		<label>nama wali</label><br>
		<input type="text" name="nama_wali"value="<?php echo $hasil ['nama_wali']?>"><br>
		<label>tahun lahir wali</label><br>
		<input type="text" name="tahun_lahir_wali"value="<?php echo $hasil ['tahun_lahir_wali']?>"><br>
		<label>pendidikan wali</label><br>
		<input type="text" name="pendidikan_wali"value="<?php echo $hasil ['pendidikan_wali']?>"><br>
		<label>pekerjaan wali</label><br>
		<input type="text" name="pekerjaan_wali"value="<?php echo $hasil ['pekerjaan_wali']?>"><br>
		<label>penghasilan wali</label><br>
		<input type="text" name="penghasilan-wali"value="<?php echo $hasil ['penghasilan_wali']?>"><br>
		<label>angkatan</label><br>
		<input type="text" name="angkatan"value="<?php echo $hasil ['angkatan']?>"><br>
		<label>spp nominal</label><br>
		<input type="text" name="spp_nominal"value="<?php echo $hasil ['spp_nominal']?>"><br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
	<?php } ?>
</body>
</html>
<?php
    include"../config/koneksi.php";

    if(isset($_POST['simpan'])){
    	$id= $_POST['id'];
    	$username= $_POST['username'];
    	$password= $_POST['password'];
    	$nama= $_POST['nama'];
    	$jenis_kelamin= $_POST['jenis_kelamin'];
    	$nisn= $_POST['nisn'];
    	$tempat_lahir= $_POST['tempat_lahir'];
    	$tanggal_lahir = $_POST['tanggal_lahir'];
		$alamat= $_POST['alamat'];
    	$hp= $_POST['hp'];
    	$email= $_POST['email'];
    	$foto= $_POST['foto'];
    	$nama_wali= $_POST['nama_wali'];
    	$tahun_lahir_wali= $_POST['tahun_lahir_wali'];
    	$pendidikan_wali = $_POST['pendidikan_wali'];
    	$pekerjaan_wali= $_POST['pekerjaan_wali'];
    	$penghasilan_wali = $_POST['penghasilan_wali'];
		$angkatan= $_POST['angkatan'];
    	$spp_nominal = $_POST['spp_nominal'];
    	$sql = "UPDATE mahasiswa SET id='$id', username='$username', password='$password' nama='$nama', kelas='$kelas', jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',tanggal_bayar='$tanggal_bayar',jumlah_bayar='$jumlah_bayar',keterangan='$keterangan' WHERE id='$id'"; 
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