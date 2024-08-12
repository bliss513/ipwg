<!DOCTYPE html>
<html>
<head>
	<title>Menambah Data Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data</h1>
	<form method="post" action="tambah.php">
		<label>Id</label><br>
		<input type="text" name="id"readonly><br>
		<label>nama</label><br>
		<input type="text" name="nama"><br>
		<label>alamat</label><br>
		<input type="text" name="alamat"><br>
		<label>logo</label><br>
		<input type="text" name="logo"><br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
</body>
</html>