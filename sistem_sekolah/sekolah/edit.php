<?php
 include"../config/koneksi.php";
 $id= $_GET['id'];
 $data= mysqli_query($koneksi,"SELECT * FROM sekolah where id='$id'");
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
		<label>nama</label><br>
		<input type="text" name="nama"value="<?php echo $hasil ['nama']?>"><br>
        <label>alamat</label><br>
		<input type="text" name="alamat"value="<?php echo $hasil ['alamat']?>"><br>
		<label>logo</label><br>
		<input type="file" name="logo"value="<?php echo $hasil ['logo']?>"><br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
	<?php } ?>
</body>
</html>
<?php
    include"../config/koneksi.php";

    if(isset($_POST['simpan'])){
    	$id= $_POST['id'];
    	$nama= $_POST['nama'];
        $alamat= $_POST['alamat'];
        $logo= $_POST['logo'];
    	$sql = "UPDATE mahasiswa SET id='$id', nama='$nama', alamat='$alamat', logo='$logo' WHERE id='$id'"; 
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