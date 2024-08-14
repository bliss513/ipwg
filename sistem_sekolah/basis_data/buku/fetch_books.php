<?php
include '../buku/config.php';

// Query untuk mengambil data buku
$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["ID"] . "</td>
                <td>" . $row["judul"] . "</td>
                <td>" . $row["pengarang"] . "</td>
                <td>" . $row["id_genre"] . "</td>
                <td>" . $row["tentang_buku"] . "</td>
                <td>" . $row["status"] . "</td>
                <td><button class='btn btn-danger btn-delete' data-ID='" . $row["ID"] . "'>Hapus</button></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>Tidak ada buku</td></tr>";
}

$conn->close();
?>
