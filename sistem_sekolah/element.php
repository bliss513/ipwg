<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <?php
        include 'sidebar.php'
        ?>


        <!-- Content Start -->
        <div class="content">
        <?php
            include 'header.php';
            ?>


            <!-- Other Elements Start -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Dashboard Perpustakaan</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
         }
        table {
            width: 640%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 130px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Dashboard Perpustakaan</h1>
        <h2>Daftar Buku</h2>
        <table id="book-table" class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>judul</th>
                    <th>pengarang</th>
                    <th>id_genre</th>
                    <th>tentang_buku</th>
                    <th>status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data buku akan dimuat di sini melalui AJAX -->
            </tbody>
        </table>

        <!-- Tombol untuk menambah buku baru -->
        <button class="btn btn-primary" data-toggle="modal" data-target="#addBookModal">Tambah Buku Baru</button>
    </div>

    <!-- Modal untuk menambah buku baru -->
    <div class="modal fade" id="addBookModal" tabindex="-1" role="dialog" aria-labelledby="addBookModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBookModalLabel">Tambah Buku Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add-book-form">
                        <div class="form-group">
                            <label for="book-id">id:</label>
                            <input type="text" class="form-control" id="book-id" name="id" required>
                        </div>
                        <div class="form-group">
                            <label for="book-judul">judul:</label>
                            <input type="text" class="form-control" id="book-judul" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="book-pengarang">pengarang:</label>
                            <input type="text" class="form-control" id="book-pengarang" name="pengarang" required>
                        </div>
                        <div class="form-group">
                            <label for="book-id_genre">id_genre:</label>
                            <input type="text" class="form-control" id="book-id_genre" name="id_genre" required>
                        </div>
                        <div class="form-group">
                            <label for="book-tentang_buku">tentang_buku:</label>
                            <input type="text" class="form-control" id="book-tentang_buku" name="tentang_buku" required>
                        </div>
                        <div class="form-group">
                            <label for="book-status">status:</label>
                            <input type="text" class="form-control" id="book-status" name="status" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Buku</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
   $(document).ready(function() {
    // Fungsi untuk memuat data buku
    function loadBooks() {
        $.ajax({
            url: 'fetch_books.php',
            type: 'GET',
            success: function(data) {
                $('#book-table tbody').html(data);
            }
        });
    }

    loadBooks(); // Load books on page load

    // Fungsi untuk menambah buku
    $('#add-book-form').submit(function(e) {
        e.preventDefault();

        var id = $('#book-id').val();
        var judul = $('#book-judul').val();
        var pengarang = $('#book-pengarang').val();
        var id_genre = $('#book-id_genre').val();
        var tentang_buku = $('#book-tentang_buku').val();
        var status = $('#book-status').val();

        if (id && judul && pengarang && id_genre && tentang_buku && status) {
            $.ajax({
                url: 'tambah.php',
                type: 'POST',
                data: {
                    id: id,
                    judul: judul,
                    pengarang: pengarang,
                    id_genre: id_genre,
                    tentang_buku: tentang_buku,
                    status: status
                },
                success: function(response) {
                    if (response.trim() === 'success') {
                        $('#addBookModal').modal('hide');
                        loadBooks();
                    } else {
                        alert('Gagal menambah buku: ' + response);
                    }
                }
            });
        } else {
            alert('Harap isi semua kolom');
        }
    });

    // Fungsi untuk menghapus buku
    $('#book-table').on('click', '.btn-delete', function() {
        var id = $(this).data('id');

        if (confirm('Apakah Anda yakin ingin menghapus buku ini?')) {
            $.ajax({
                url: 'delete_book.php',
                type: 'GET',
                data: { id: id },
                success: function(response) {
                    if (response.trim() === 'success') {
                        loadBooks();
                    } else {
                        alert('Gagal menghapus buku: ' + response);
                    }
                }
            });
        }
    });
});
</script>
</body>

                    <?php
                    include 'footer.php';
                    ?>


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>