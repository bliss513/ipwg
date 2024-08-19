<?php
 include"../../config/koneksi.php";
 $id= $_GET['id'];
 $data= mysqli_query($koneksi,"SELECT * FROM guru where id='$id'");
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
		<label>nip</label><br>
		<input type="file" name="nip"value="<?php echo $hasil ['nip']?>"><br>
        <label>nama guru</label><br>
		<input type="text" name="nama_guru"value="<?php echo $hasil ['nama_guru']?>"><br>
        <button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
	<?php } ?>
</body>
</html>
<?php
    include"../../config/koneksi.php";

    if(isset($_POST['simpan'])){
        $nip= $_POST['nip'];
    	$nama_guru= $_POST['nama_guru'];
        $sql = "UPDATE mahasiswa SET  nip='$nip', nama_guru='$nama_guru' WHERE id='$id'"; 
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