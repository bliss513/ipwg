<?php
include "../../config/koneksi.php";

if(isset($_POST['simpan'])) {
  $id = $_POST['id'];
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $jurusan = $_POST['jurusan'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $jumlah_bayar = $_POST['jumlah_bayar'];
  $tanggal_bayar = $_POST['tanggal_bayar'];
  $keterangan = $_POST['keterangan'];

  $query = "UPDATE siswa SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', jumlah_bayar='$jumlah_bayar', tanggal_bayar='$tanggal_bayar', keterangan='$keterangan' WHERE id='$id'";
  
  if(mysqli_query($koneksi, $query)) {
    echo "<script>alert('Data berhasil diupdate.');window.location='../../index_siswa.php';</script>";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
  }
}
?>