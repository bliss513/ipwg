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
		<label>nama</label><br>
		<input type="text" name="nama"><br>
        <label>jenis_kelamin</label><br>
		       <select name="jenis_kelamin" id="jenis_kelamin"><br>
                <option value="L">L</option>
                <option value="P">P</option>
                </select><br>
        <label>nisn</label><br>
		<input type="text" name="nisn"><br>
        <label>tempat_lahir</label><br>
		<input type="text" name="tempat_lahir"><br>
        <label>tanggal_lahir</label><br>
		<input type="date" name="tanggal_lahir"><br>
        <label>alamat</label><br>
		<input type="text" name="alamat"><br>
        <label>hp</label><br>
		<input type="text" name="hp"><br>
        <label>email</label><br>
		<input type="text" name="email"><br>
        <label>foto</label><br>
		<input type="file" name="foto"><br>
        <label>nama_wali</label><br>
		<input type="text" name="nama_wali"><br>
        <label>tahun_lahir_wali</label><br>
		<input type="text" name="tahun_lahir_wali"><br>
        <label>pendidikan_wali</label><br>
		<input type="text" name="pendidikan_wali"><br>
        <label>pekerjaan_wali</label><br>
		<input type="text" name="perkerjaan_wali"><br>
        <label>penghasilan_wali</label><br>
		<input type="text" name="penghasilan_wali"><br>
        <label>angkatan</label><br>
		<input type="text" name="angkatan"><br>
        <label>spp_nominal</label><br>
		<input type="text" name="spp_nominal"><br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
</body>
</html>