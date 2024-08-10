<!DOCTYPE html>
<html>
<head>
     <Title>Halaman admin</Title>
</head>
 <body>



<button style="background-color: skyblue;"><a href="form_tambah.php">Tambah</a></button>
 <br>
<!-- Table -->
<!-- <table d="table" table border="1"> -->
<table width="97%" border="1" align="center" cellpadding="3" cellspacing="0">
  <thead>
 <tr style="background-color: pink;">
    <th> No. </th>
    <th> Id</th>
    <th> id_buku</th>
    <th> id_siswa</th>
    <th> tanggal_pinjam</th>
    <th> tanggal_rencana_pengembalian</th>
    <th> tanggal_pengembalian </th>
    <th> status </th>
    <th> Keterangan </th>

    <th> aksi </th>

</tr>
  </thead>
  <tbody>
 <?php
    include"../config/koneksi.php";

    $no =1;
    $data= mysqli_query($koneksi,"SELECT * FROM siswa");
    while ($hasil= mysqli_fetch_array($data)) {
        ?>
    
    <tr> 
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['id'] ?></td>
        <td><?php echo $hasil['id_buku'] ?></td>
        <td><?php echo $hasil['id_siswa'] ?></td>
        <td><?php echo $hasil['tanggal_pinjam'] ?></td>
        <td><?php echo $hasil['tanggal_rencana_pengembalian'] ?></td>
        <td><?php echo $hasil['tanggal_pengembalian'] ?></td>
        <td><?php echo $hasil['status'] ?></td>
        <td><?php echo $hasil['keterangan'] ?></td>

        <td align="center">
            <a href="edit.php?id=<?php echo$hasil['id'] ?>"> Ubah </a> ||
            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')  " href="hapus.php?id=<?php echo$hasil['id'] ?>"> Hapus </a> 
        </td>
    </tr>
  </tbody>
  <?php } ?>
 
</table>

 </body>
 </html>