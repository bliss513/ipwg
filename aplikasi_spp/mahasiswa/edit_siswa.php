<?php
 include"koneksi.php";
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
		<input type="text" name="id" value="<?php echo $hasil ['id']?>" readonly><br>
		<label>nis</label><br>
		<input type="text" name="nis"value="<?php echo $hasil ['nis']?>"><br>
		<label>nama</label><br>
		<input type="text" name="nama"value="<?php echo $hasil ['nama']?>"><br>
		<label>kelas</label><br>
		<select name="kelas" id="kelas"><br>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
                </select><br>
                <label>jurusan</label><br>
		<select name="jurusan" id="jurusan"><br>
                <option value="PPLG">PPLG</option>
                <option value="BCF">BCF</option>
                <option value="MPLB A">MPLB A</option>
                <option value="MPLB B">MPLB B</option>
                </select><br>
		<label>jenis kelamin</label><br>
		<input type="radio" name="jenis_kelamin"value="laki-laki">
		<label for="laki-laki">laki-laki</label><br>
		<input type="radio" name="jenis_kelamin"value="perempuan">
		<label for="perempuan">perempuan</label><br>
		<label>tanggal bayar</label><br>
		<input type="date" name="tanggal bayar" value="<?php echo $hasil ['tanggal_bayar']?>"><br>
                <label>jumlah bayar</label><br>
		<input type="number" name="jumlah bayar" value="<?php echo $hasil ['jumlah_bayar']?>"><br>
		<label>keterangan</label><br>
		<input type="text" name="keterangan" value="<?php echo $hasil ['keterangan']?>"><br>
		<br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
	<?php } ?>
</body>
</html>
<?php
    include"koneksi.php";

    if(isset($_POST['simpan'])){
    	$id= $_POST['id'];
    	$nis= $_POST['nis'];
    	$nama= $_POST['nama'];
    	$kelas= $_POST['kelas'];
    	$jurusan= $_POST['jurusan'];
    	$jenis_kelamin= $_POST['jenis_kelamin'];
    	$tanggal_bayar = $_POST['tanggal_bayar'];
    	$jumlah_bayar= $_POST['jumlah_bayar'];
    	$keterangan = $_POST['keterangan'];
    	$sql = "UPDATE siswa SET id='$id', nis='$nis',  nama='$nama', kelas='$kelas', jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',tanggal_bayar='$tanggal_bayar',jumlah_bayar='$jumlah_bayar',keterangan='$keterangan' WHERE id='$id'"; 
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