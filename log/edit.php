<?php
include "../koneksi.php";

// Ambil id dari URL
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $foto = $_FILES['foto']['name'];

    // Jika ada foto baru
    if ($foto) {
        // Pindahkan file ke folder uploads
        $targetDir = "../img/pegawai/";
        $targetFile = $targetDir . basename($foto);
        move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile);

        // Update foto dan nama ke database
        $query = "UPDATE data SET nama = '$nama', foto = '$foto' WHERE id = $id";
    } else {
        // Jika tidak ada foto baru
        $query = "UPDATE data SET nama = '$nama' WHERE id = $id";
    }

    if (mysqli_query($conn, $query)) {
        header("Location: ../src/home.php"); // Redirect ke home setelah berhasil
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #1b2a41;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .form-container {
        background-color: #24344d;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        width: 400px;
        animation: fadeIn 0.5s ease-in-out;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #f0f0f0;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
    }

    .form-container label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #b0c4de;
    }

    .form-container input[type="text"],
    .form-container input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #b0c4de;
        border-radius: 5px;
        background-color: #1e2e47;
        color: #fff;
    }

    .form-container button {
        width: 100%;
        padding: 10px;
        background-color: #3b5998;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    .form-container button:hover {
        background-color: #2e4a7e;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        transform: scale(1.05);
    }

    .cancel-button {
        width: 100%;
        padding: 10px;
        background-color: #d9534f;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        margin-top: 10px;
    }

    .cancel-button:hover {
        background-color: #c9302c;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        transform: scale(1.05);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    </style>
</head>

<body>

    <?php
    // Ambil data pegawai berdasarkan ID
    $query = "SELECT * FROM data WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="form-container">
        <h2>Edit Pegawai</h2>
        <form action="edit.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <div>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" required>
            </div>
            <div>
                <label for="foto">Foto:</label>
                <input type="file" name="foto">
            </div>
            <button type="submit">Simpan</button>
        </form>

        <!-- Tombol Batal -->
        <form action="../src/home.php" method="get">
            <button type="submit" class="cancel-button">Batal</button>
        </form>
    </div>

</body>

</html>