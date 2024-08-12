<!DOCTYPE html>
<html>
<head>
     <Title>Halaman admin</Title>
</head>
 <body>

<h1 style="text-align:center;"><strong>PEMBAYARAN SPP</strong></h1>

<button style="background-color: skyblue;"><a href="form_tambah.php">Tambah</a></button>
 <br>
<!-- Table -->
<!-- <table d="table" table border="1"> -->
<table width="97%" border="1" align="center" cellpadding="3" cellspacing="0">
  <thead>
 <tr style="background-color: pink;">
    <th> No. </th>
    <th> Id</th>
    <th> username</th>
    <th> password </th>
    <th> nama</th>
    <th> jenis kelamin</th>
    <th> nisn</th>
    <th> tempat lahir</th>
    <th> tanggal lahir</th>
    <th> alamat</th>
    <th> hp</th>
    <th> email</th>
    <th> foto</th>
    <th> nama_wali</th>
    <th> tahun_lahir_wali</th>
    <th> pendidikan_wali</th>
    <th> pekerjaan_wali</th>
    <th> penghasilan_wali</th>
    <th> angkatan</th>
    <th> spp_nominal</th>
</tr>
  </thead>
  <tbody>
 <?php
    include"koneksi.php";

    $no =1;
    $data= mysqli_query($koneksi,"SELECT * FROM mahasiswa");
    while ($hasil= mysqli_fetch_array($data)) {
        ?>
    
    <tr> 
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['id'] ?></td>
        <td><?php echo $hasil['username'] ?></td>
        <td><?php echo $hasil['password'] ?></td>
        <td><?php echo $hasil['nama'] ?></td>
        <td><?php echo $hasil['jenis_kelamin'] ?></td>
        <td><?php echo $hasil['nisn'] ?></td>
        <td><?php echo $hasil['tempat_lahir'] ?></td>
        <td><?php echo $hasil['tanggal_lahir'] ?></td>
        <td><?php echo $hasil['alamat'] ?></td>
        <td><?php echo $hasil['hp'] ?></td>
        <td><?php echo $hasil['email'] ?></td>
        <td><?php echo $hasil['foto'] ?></td>
        <td><?php echo $hasil['nama_wali'] ?></td>
        <td><?php echo $hasil['tahun_lahir_wali'] ?></td>
        <td><?php echo $hasil['pendidikan_wali'] ?></td>
        <td><?php echo $hasil['pekerjaan_wali'] ?></td>
        <td><?php echo $hasil['penghasilan_wali'] ?></td>
        <td><?php echo $hasil['angkatan'] ?></td>
        <td><?php echo $hasil['spp_nominal'] ?></td>
        <td align="center">
            <a href="ubah.php?id=<?php echo$hasil['id'] ?>"> Ubah </a> ||
            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')  " href="hapus.php?id=<?php echo$hasil['id'] ?>"> Hapus </a> 
        </td>
    </tr>
  </tbody>
  <?php } ?>
 
  <tfoot>
    <?php 
    $tampil = mysqli_query($koneksi, "SELECT SUM(jumlah_bayar) as total_siswa FROM mahasiswa");
    $row = mysqli_fetch_assoc($tampil);                
    $total = $row['total_siswa'];
?>
<!-- <tr>
    <td colspan="8" style="text-align:center;"><strong>Total</strong></td>
    <td colspan="3"><strong>Rp.<?php echo $total; ?></strong></td>
</tr> -->

    
</tfoot>


</table>

 </body>
 </html>