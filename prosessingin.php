<?php
    //penyimpanan nilai/value pada variable baru berdasarkan name pada form
    $gmail=$_POST['gmail'];
    $password=$_POST['password'];
    


    //menghubungkan ke tabel yang dituju
    include "koneksi.php";
    mysqli_query($conn, "insert into akun(gmail, password)
    values(
            '$gmail',
            '$password')");

    //hasil luaran saat submit
    echo'<script> alert("Akun Berhasil dibuat") </script>';
?>