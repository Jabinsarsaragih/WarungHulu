<?php
// Penyimpanan nilai/value pada variabel baru berdasarkan name pada form
$gmail = $_POST['gmail'];
$password = $_POST['password'];

// Menghubungkan ke tabel yang dituju
include "../koneksi.php";

// Simpan data ke tabel `akun`
mysqli_query($conn, "INSERT INTO akun(gmail, password) VALUES ('$gmail', '$password')");

// Tampilkan pesan sukses
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin Success</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Estonia&family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Potta+One&display=swap');

    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background: linear-gradient(155deg, #c3a35f, #c0a56b);
        color: #ecf1d4;
        font-family: "Fira Sans Condensed", sans-serif;
    }

    .success-box {
        text-align: center;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        animation: slide-in 0.5s ease-out;
    }

    .success-box h1 {
        font-size: 3rem;
        margin-bottom: 10px;
    }

    .success-box img {
        width: 120px;
    }

    .success-box p {
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .success-box button {
        background: #67666b;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        transition: background 0.3s;
        font-size: 1.5rem;
    }

    .success-box button:hover {
        background: #67666b;
    }

    @keyframes slide-in {
        from {
            transform: translateY(50px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    </style>
</head>

<body>
    <div class="success-box">
        <h1>Signin Berhasil!</h1>
        <img src="../img/ceklis.png" alt="ceklis">
        <p>Selamat, akun Anda telah berhasil didaftarkan.</p>
        <button onclick="window.location.href='../index.php';">Login Sekarang</button>
    </div>
</body>

</html>