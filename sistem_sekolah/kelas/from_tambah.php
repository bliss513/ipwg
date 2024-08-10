<!DOCTYPE html>
<html>
<head>
	<title>Menambah Data Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data</h1>
	<form method="post" action="tambah.php">
	<label>Id</label><br>
		<input type="text" name="id" value="<?php echo $hasil ['id']?>" readonly><br>
		<label>kd_kelas</label><br>
		<input type="text" name="kd_kelas" value="<?php echo $hasil ['kd_kelas']?>"><br>
		<label>tingkat</label><br>
		<input type="text" name="tingkat" value="<?php echo $hasil ['tingkat']?>"><br>
		<label>nama_kelas</label><br>
		<input type="text" name="nama_kelas" value="<?php echo $hasil ['nama_kelas']?>"><br>
		
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
</body>
</html>