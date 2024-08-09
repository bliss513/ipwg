<?php 
session_start();
if (!isset($_SESSION['is_login'])) {
    header('Location: ./modul/login/');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
<?php
include 'sidebar.php';
?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>
                    <?php
                    include 'header.php';
                    ?>

                        <!-- Begin Page Content -->
                        <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <a href="tambah_siswa.php" class="btn btn-success">Tambah</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
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
                                            include"config/koneksi.php";

                                            $no =1;
                                            $data= mysqli_query($koneksi,"SELECT * FROM mahasiswa");
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
                                                    <a href="ubah.php?id=<?php echo$hasil['id'] ?>" class="btn btn-primary" > Ubah </a> || 
                                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')  " href="hapus.php?id=<?php echo$hasil['id'] ?>" class="btn btn-danger" > Hapus </a> 
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
                                <tr>
                                    <td colspan="8" style="text-align:center;"><strong>Total</strong></td>
                                    <td colspan="3"><strong>Rp.<?php echo $total; ?></strong></td>
                                </tr>
                                </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        </div>
                        <!-- /.container-fluid -->
                         <?php
                         include 'footer.php';
                         ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>