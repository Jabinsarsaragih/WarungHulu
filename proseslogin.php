<?php
session_start();
include 'koneksi.php';

if (isset($_POST['Login'])) {
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];

    // Prepared statement untuk menghindari SQL injection
    $stmt = $conn->prepare("SELECT * FROM akun WHERE gmail = ? AND password = ?");
    $stmt->bind_param("ss", $gmail, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah ada baris yang cocok
    if ($result->num_rows > 0) {
        // Jika ada, login berhasil
        echo '<script>alert("Login Berhasil");</script>';
        // Anda bisa menyimpan data user dalam session jika diperlukan
        $_SESSION['gmail'] = $gmail; // Simpan email dalam session
        // Redirect ke halaman lain jika perlu
        header("Location: src/home.php");

    } else {
        // Jika tidak ada, login gagal
        echo '<script>alert("Login Gagal");</script>';
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>

