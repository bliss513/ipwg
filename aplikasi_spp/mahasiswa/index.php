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
    <th> NIS</th>
    <th> Nama</th>
    <th> Kelas </th>
    <th> Jurusan</th>
    <th> Jenis Kelamin </th>
    <th> Tanggal Bayar </th>
    <th> Jumlah Bayar </th>
    <th> Keterangan </th>

    <th> aksi </th>

</tr>
  </thead>
  <tbody>
 <?php
    include"koneksi.php";

    $no =1;
    $data= mysqli_query($koneksi,"SELECT * FROM siswa");
    while ($hasil= mysqli_fetch_array($data)) {
        ?>
    
    <tr> 
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['id'] ?></td>
        <td><?php echo $hasil['nis'] ?></td>
        <td><?php echo $hasil['nama'] ?></td>
        <td><?php echo $hasil['kelas'] ?></td>
        <td><?php echo $hasil['jurusan'] ?></td>
        <td><?php echo $hasil['jenis_kelamin'] ?></td>
        <td><?php echo $hasil['tanggal_bayar'] ?></td>
        <td><strong><?php echo $hasil['jumlah_bayar'] ?></strong></td>
        <td><?php echo $hasil['keterangan'] ?></td>

        <td align="center">
            <a href="edit_siswa.php?id=<?php echo$hasil['id'] ?>"> Ubah </a> ||
            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')  " href="hapus.php?id=<?php echo$hasil['id'] ?>"> Hapus </a> 
        </td>
    </tr>
  </tbody>
  <?php } ?>
 
  <tfoot>
    <?php 
    $tampil = mysqli_query($koneksi, "SELECT SUM(jumlah_bayar) as total_siswa FROM siswa");
    $row = mysqli_fetch_assoc($tampil);                
    $total = $row['total_siswa'];
?>
<tr>
    <td colspan="8" style="text-align:center;"><strong>Total</strong></td>
    <td colspan="3"><strong>Rp.<?php echo $total; ?></strong></td>
</tr>

    
</tfoot>


</table>

 </body>
 </html>