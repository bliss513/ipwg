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
		<label>username</label><br>
		<input type="text" name="username"><br>
		<label>password</label><br>
		<input type="text" name="password"><br>
		<label>nip</label><br>
		<input type="text" name="nip"><br>
        <label>sekolah</label><br>
		<input type="text" name="sekolah"><br>
        <label>nama guru</label><br>
		<input type="text" name="nama_guru"><br>
        <label>nik</label><br>
		<input type="text" name="nik"><br>
        <label>pengawas bidang studi</label><br>
		<input type="text" name="pengawas_bidang_studi"><br>
        <label>alamat</label><br>
		<input type="text" name="alamat"><br>
        <label>hp</label><br>
		<input type="text" name="hp"><br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
</body>
</html>