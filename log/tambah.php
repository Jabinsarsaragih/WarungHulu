<?php
include "../koneksi.php";

// Ambil data dari form
$nama = $_POST['nama'];
$foto = $_FILES['foto']['name'];

// Pindahkan file ke folder uploads
$targetDir = "../img/pegawai/";
$targetFile = $targetDir . basename($foto);

if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
    // Simpan nama file dan nama ke database
    $query = "INSERT INTO data (nama, foto) VALUES ('$nama', '$foto')";
    if (mysqli_query($conn, $query)) {
        // Redirect ke index.php setelah sukses menyimpan
        header("Location: ../src/home.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "File gagal di-upload.";
}
?>