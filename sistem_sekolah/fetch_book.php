<?php
include '../config/koneksi.php';

$sql = "SELECT id, judul, pengarang, id_genre, tentang_buku, status FROM buku";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['judul'] . "</td>";
        echo "<td>" . $row['pengarang'] . "</td>";
        echo "<td>" . $row['id_genre'] . "</td>";
        echo "<td>" . $row['tentang_buku'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td><button class='btn btn-danger btn-delete' data-id='" . $row['id'] . "'>Hapus</button></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>Tidak ada buku yang tersedia</td></tr>";
}

$conn->close();
?>
