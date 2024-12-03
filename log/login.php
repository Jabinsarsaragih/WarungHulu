<?php
session_start();
include '../koneksi.php';

if (isset($_POST['login'])) {
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];

    // Prepared statement untuk menghindari SQL injection
    $stmt = $conn->prepare("SELECT * FROM akun WHERE gmail = ? AND password = ?");
    $stmt->bind_param("ss", $gmail, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah ada baris yang cocok
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Ambil data pengguna
        $_SESSION['gmail'] = $row['gmail']; // Simpan Gmail ke sesi
        echo '<script>alert("Login Berhasil");</script>';
        header("Location: ../src/home.php"); // Redirect ke halaman home
    } else {
        echo '<script>alert("Login Gagal");</script>';
    }

    $stmt->close();
    $conn->close();
}
?>