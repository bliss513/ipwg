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
		<label>nis</label><br>
		<input type="text" name="nis"><br>
		<label>nama</label><br>
		<input type="text" name="nama"><br>
		<label for="kelas">kelas</label><br>
<select name="kelas" id="kelas" >
  <option value="X">X</option>
  <option value="XI">XI</option>
  <option value="XII">XII</option>
</select><br>
<label for="jurusan">jurusan</label><br>
<select name="jurusan" id="jurusan" >
  <option value="PPLG">PPLG</option>
  <option value="BCF">BCF</option>
  <option value="MPLB A">MPLB A</option>
  <option value="MPLB B">MPLB B</option>
</select><br>
		<label>jenis kelamin</label><br>
		<input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="laki-laki">
		<label for="P">L</label><br>
		<input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="perempuan">
		<label for="P">P</label><br>
		<label>tanggal bayar</label><br>
		<input type="date" name="tanggal_bayar"><br>
  <label>jumlah bayar</label><br>
		<input type="number" name="jumlah_bayar"><br>
		<label>keterangan</label><br>
		<input type="text" name="keterangan"><br><br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
</body>
</html>