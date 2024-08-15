<?php
 include"../../config/koneksi.php";
 $data= mysqli_query($koneksi,"SELECT * FROM siswa where ");
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
              <label>nama</label><br>
		      <input type="text" name="nama"value="<?php echo $hasil ['nama']?>"><br>
                <label>nisn</label><br>
                <input type="text" name="nisn"value="<?php echo $hasil ['nisn']?>"><br>
		<br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="button.php">kembali</a></button>
	</form>
	<?php } ?>
</body>
</html>
<?php
    include"../../config/koneksi.php";

    if(isset($_POST['simpan'])){
    	$nama= $_POST['nama'];
    	$nisn= $_POST['nisn'];
    	$sql = "UPDATE siswa SET nama='$nama', nisn='$nisn' WHERE id='$id'"; 
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