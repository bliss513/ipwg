<?php
// Include database connection
include 'button.php';

// Fetch all students
$result = mysqli_query($conn, "SELECT * FROM siswa");
?>

<table id="dataTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>Username</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Nomor HP</th>
            <th>Email</th>
            <th>Foto</th>
            <th>Nama Wali</th>
            <th>Tahun Lahir Wali</th>
            <th>Pendidikan Wali</th>
            <th>Pekerjaan Wali</th>
            <th>Penghasilan Wali</th>
            <th>Angkatan</th>
            <th>SPP Nominal</th>
            <th>Kelas</th>
            <th>Tahun Akademik</th>
            <th>Tanggal Masuk</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nisn']; ?></td>
                <td><?= $row['username']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                <td><?= $row['tempat_lahir']; ?></td>
                <td><?= $row['tanggal_lahir']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['nomor_hp']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><img src="uploads/<?= $row['foto']; ?>" alt="Foto" style="width: 50px; height: 50px; object-fit: cover;"></td>
                <td><?= $row['nama_wali']; ?></td>
                <td><?= $row['tahun_lahir_wali']; ?></td>
                <td><?= $row['pendidikan_wali']; ?></td>
                <td><?= $row['pekerjaan_wali']; ?></td>
                <td><?= $row['penghasilan_wali']; ?></td>
                <td><?= $row['angkatan']; ?></td>
                <td><?= $row['spp_nominal']; ?></td>
                <td><?= $row['kelas']; ?></td>
                <td><?= $row['tahun_akademik']; ?></td>
                <td><?= $row['tanggal_masuk']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>