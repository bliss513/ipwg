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
        <label>jenis kelamin</label><br>
		<input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="laki-laki">
		<label for="laki-laki">laki-laki</label><br>
		<input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="perempuan">
		<label for="perempuan">perempuan</label><br>
        <label>tempat lahir</label><br>
		<input type="text" name="tempat_lahir"><br>
        <label>tanggal lahir</label><br>
		<input type="text" name="tanggal_lahir"><br>
        <label>nik</label><br>
		<input type="text" name="nik"><br>
        <label>pengawas bidang studi</label><br>
		<input type="text" name="pengawas_bidang_studi"><br>
        <label>alamat</label><br>
		<input type="text" name="alamat"><br>
        <label>hp</label><br>
		<input type="text" name="hp"><br>
        <label>foto</label><br>
		<input type="text" name="foto"><br>

		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
</body>
</html>