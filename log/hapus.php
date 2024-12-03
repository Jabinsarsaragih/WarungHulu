<?php
include "../koneksi.php";

// Ambil id dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data dari database
    $query = "DELETE FROM data WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: ../src/home.php"); // Redirect ke home setelah berhasil
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak ditemukan.";
}
?>