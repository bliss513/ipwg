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
		<label>status</label><br>
		<input type="text" name="status" value="<?php echo $hasil ['status']?>"><br>
       <label>keterangan</label><br>
		<input type="text" name="keterangan" value="<?php echo $hasil ['keterangan']?>"><br>
		<br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index_pinjaman.php">kembali</a></button>
	</form>
	<?php } ?>
</body>
</html>
<?php
    include"../config/koneksi.php";

    if(isset($_POST['simpan'])){
    	$id= $_POST['id'];
    	$nis= $_POST['id_buku'];
    	$nama= $_POST['id_siswa'];
    	$kelas= $_POST['tanggal_pinjam'];
    	$jurusan= $_POST['tanggal_rencana_pegembalian'];
    	$jenis_kelamin= $_POST['tanggal_pengembalian'];
    	$tanggal_bayar = $_POST['status'];
    	$jumlah_bayar= $_POST['keterangan'];
    	
    	$sql = "UPDATE siswa SET id='$id', id_buku='$id_buku',  id_siswa='$id_siswa', tanggal_pinjam='$tanggal_pinjam', tanggal_rencana_pengembalian='$tanggal_rencana_pengembalian',tanggal_pengembalian='$tanggal_pengembalian',status='$status',keterangan='$keterangan', WHERE id='$id'"; 
    	//cek apakah proses simpan berhasil
    	if(mysqli_query($koneksi,$sql)){
    	//jika berhasil, redirect ke index_pinjaman.php
    		header('location:index_pinjaman.php');
    	}else{
    		//jika tidak berhasil
    		echo "Oupss....Maaf proses penyimpan data tidak berhasil";
    	}
    }
?>