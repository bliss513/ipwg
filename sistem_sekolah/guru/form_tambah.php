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
		<label>username</label><br>
		<input type="text" name="username" value="<?php echo $hasil ['username']?>"><br>
		<label>password</label><br>
		<input type="text" name="password" value="<?php echo $hasil ['password']?>"><br>
		<label>nip</label><br>
		<input type="text" name="nip" value="<?php echo $hasil ['nip']?>"><br>
		<label>sekolah</label><br>
		<input type="text" name="sekolah" value="<?php echo $hasil ['sekolah']?>"><br>
		<label>nama guru</label><br>
		<input type="text" name="nama_guru" value="<?php echo $hasil ['nama_guru']?>"><br>
		<label>jenis kelamin</label><br>
		<input type="text" name="jenis_kelamin" value="<?php echo $hasil ['jenis_kelamin']?>"><br>
		<label>tempat lahir</label><br>
		<input type="text" name="tempat_lahir" value="<?php echo $hasil ['tempat_lahir']?>"><br>
		<label>tanggal lahir</label><br>
		<input type="text" name="tanggal_lahir" value="<?php echo $hasil ['tanggal_lahir']?>"><br>
	   <label>nik</label><br>
		<input type="text" name="nik" value="<?php echo $hasil ['nik']?>"><br>
		<label>pengawasbidang studi</label><br>
		<input type="text" name="pengawas_bidang_studi" value="<?php echo $hasil ['pengawas_bidang_studi']?>"><br>
		<label>alamat</label><br>
		<input type="text" name="alamat" value="<?php echo $hasil ['alamat']?>"><br>
		<label>hp</label><br>
		<input type="text" name="hp" value="<?php echo $hasil ['hp']?>"><br>
		<label>foto</label><br>
		<input type="text" name="foto" value="<?php echo $hasil ['foto']?>"><br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
</body>
</html>