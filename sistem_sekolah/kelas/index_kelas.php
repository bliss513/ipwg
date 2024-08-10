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
    <th> kd_kelas</th>
    <th> tingkat</th>
    <th> nama_kelas</th>
    <th> aksi</th>
  
   
</tr>
  </thead>
  <tbody>
 <?php
    include"../config/koneksi.php";

    $no =1;
    $data= mysqli_query($koneksi,"SELECT * FROM kelas");
    while ($hasil= mysqli_fetch_array($data)) {
        ?>
    
    <tr> 
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['id'] ?></td>
        <td><?php echo $hasil['kd_kelas'] ?></td>
        <td><?php echo $hasil['tingkat'] ?></td>
        <td><?php echo $hasil['nama_kelas'] ?></td>
      

        <td align="center">
            <a href="edit_siswa.php?id=<?php echo$hasil['id'] ?>"> Ubah </a> ||
            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')  " href="hapus.php?id=<?php echo$hasil['id'] ?>"> Hapus </a> 
        </td>
    </tr>
  </tbody>
  <?php } ?>
 
 

</table>

 </body>
 </html>