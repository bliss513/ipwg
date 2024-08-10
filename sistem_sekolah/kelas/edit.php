<?php
 include"../config/koneksi.php";
 $id= $_GET['id'];
 $data= mysqli_query($koneksi,"SELECT * FROM kelas where id='$id'");
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
		<input type="text" name="id" value="<?php echo $hasil ['id']?>" readonly><br>
		<label>kd_kelas</label><br>
		<input type="text" name="kd_kelas" value="<?php echo $hasil ['kd_kelas']?>"><br>
		<label>tingkat</label><br>
		<input type="text" name="tingkat" value="<?php echo $hasil ['tingkat']?>"><br>
		<label>nama_kelas</label><br>
		<input type="text" name="nama_kelas" value="<?php echo $hasil ['nama_kelas']?>"><br>
		<br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index_siswa.php">kembali</a></button>
	</form>
	<?php } ?>
</body>
</html>
<?php
    include"../config/koneksi.php";

    if(isset($_POST['simpan']))
    	$id= $_POST['id'];
    	$username= $_POST['kd_kelas'];
    	$password= $_POST['tingkat'];
    	$nip= $_POST['nama_kelas'];
    	$sql = "UPDATE kelas SET id='$id',  kd_kelas='$kd_kelas',  tingkat='$tingkat',  nama_kelas='$nama_kelas',   
    	//cek apakah proses simpan berhasil
    	if(mysqli_query($koneksi,$sql)){
    	//jika berhasil, redirect ke index_siswa.php
    		header('location:index_siswa.php');
    	}else{
    		//jika tidak berhasil
    		echo "Oupss....Maaf proses penyimpan data tidak berhasil";
    	} 
    }
