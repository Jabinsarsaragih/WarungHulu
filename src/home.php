<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | </title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/tambah.css">
    <link rel="stylesheet" href="../css/edit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <div class="logoHeader">
            <img src="../img/hulu store.png" alt="logoHeader">
        </div>
        <nav>
            <a href="#pegawai"><i class="fa-solid fa-users"></i></a>
            <a href="#produk"><i class="fa-solid fa-store"></i></a>
        </nav>
    </header>

    <section>
        <aside class="left">
            <div class="deskripsi">
                <?php
                session_start();
                include '../koneksi.php';

                // Periksa apakah user sudah login
                if (!isset($_SESSION['gmail'])) {
                    header("Location: ../src/login.php"); // Jika belum login, arahkan ke login
                    exit();
                }

                $gmail = $_SESSION['gmail']; // Ambil Gmail dari session
                ?>
                <div class="deskripsiPegawai">
                    <h2><?php echo htmlspecialchars($gmail); ?></h2>
                </div>
                <h3>CEO</h3>
                <p>"Memimpin dengan Visi, Membangun dengan Aksi."</p>
            </div>
            <div class="icon">
                <?php
                    include "../koneksi.php";

                    // Ambil data dari tabel `data`
                    $result = mysqli_query($conn, "SELECT * FROM data");
                ?>
                <div class="iconPegawai">
                    <a href="#"><i class="fa-solid fa-users"></i></a>
                    <div class="memberPegawai">
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="pegawai">
                            <div class="imgPegawai">
                                <img src="../img/pegawai/<?php echo htmlspecialchars($row['foto']); ?>"
                                    alt="Foto Pegawai">
                            </div>
                            <div class="keteranganPegawai">
                                <h3><?php echo htmlspecialchars($row['nama']); ?></h3>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="iconProduk">
                    <a href="#"><i class="fa-solid fa-store"></i></a>
                    <div class="memberProduk">
                        <div class="produk" id="pegawaiOne">
                            <div class="imgProduk">
                                <img src="../img/iconBarang.png" alt="gambarProduk">
                            </div>
                            <div class="keteranganProduk">
                                <h3>Nama Produk</h3>
                                <p>Lorem, ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <aside class="right">
            <div class="imgRight">
                <img src="../img/logoHome.png" alt="imgHome" id="depan">
                <img src="../img/kakak02.jpeg" alt="" id="belakang">
            </div>
        </aside>
    </section>

    <div class="memberPegawaiLengkap" id="pegawai">
        <h1 id="title">Pegawai Grosir</h1>
        <div class="fullPegawai">
            <h1>Pegawai </h1>
            <div class="pegawai">
                <?php
                            include "../koneksi.php";

                            // Cek koneksi
                            if (!$conn) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            // Ambil data dari tabel
                            $result = mysqli_query($conn, "SELECT * FROM data");

                            // Cek apakah ada data
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Gunakan heredoc untuk output HTML
                                    echo <<<HTML
                                    <div class='ketPegawai'>
                                        <div class='gambarPegawai'>
                                            <img src="../img/pegawai/{$row['foto']}" alt='gambarPegawai'>
                                        </div>
                                        <div class='deskripsiPegawai'>
                                            <h2>{$row['nama']}</h2>
                                        </div>
                                        <div class='iconPegawai'>
                                            <a href="../log/edit.php?id={$row['id']}"><i class='fa-solid fa-user-pen'></i></a>
                                            <a href="../log/hapus.php?id={$row['id']}"><i class='fa-solid fa-user-minus'></i></a>
            </div>
        </div>
        HTML;
        }
        } else {
        echo "Tidak ada data pegawai ditemukan.";
        }

        // Tutup koneksi jika sudah selesai
        mysqli_close($conn);
        ?>
            </div>



            <?php
                    // Koneksi ke database
                    include "../koneksi.php";

                    // Ambil data dari tabel
                    $result = mysqli_query($conn, "SELECT * FROM data");
                    ?>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Tambah Data</title>
                <link rel="stylesheet" href="style.css">
            </head>

            <body>
                <!-- Tombol Tambah -->
                <button id="openForm"><i class="fa-solid fa-user-plus"></i></button>

                <!-- Form Tambah -->
                <div id="overlay"></div>

                <div id="formTambah">
                    <div class="form-container">
                        <div class="close" id="closeForm">×</div>
                        <form action="../log/tambah.php" method="POST" enctype="multipart/form-data">
                            <h2>Tambah Data</h2>
                            <div>
                                <label for="nama">Nama:</label>
                                <input type="text" name="nama" id="nama" required>
                            </div>
                            <div>
                                <label for="foto">Foto:</label>
                                <input type="file" name="foto" id="foto" required>
                            </div>
                            <button type="submit">Simpan</button>
                        </form>
                    </div>
                </div>


                <script src="script.js"></script>
            </body>

            </html>
        </div>
        <div class="deskripsiLainnyaPegawai">
            <img src="../img/gambarHome.png" alt="gambarDeskripsiPegawai">
            <div class="textDeskripsiPegawai">
                <p>
                    "Selamat datang di Grosir Hulu, tempat di mana kualitas, kepercayaan, dan kepuasan pelanggan
                    menjadi prioritas utama. Kami menyediakan beragam produk berkualitas dengan harga yang kompetitif,
                    dirancang untuk memenuhi kebutuhan Anda dengan mudah dan nyaman. Dengan layanan yang cepat, aman,
                    dan terpercaya, kami berkomitmen untuk memberikan pengalaman belanja yang menyenangkan. Mari temukan
                    apa yang Anda cari, karena kepuasan Anda adalah kebahagiaan kami. Belanja bersama kami sekarang dan
                    rasakan pelayanan terbaik yang telah kami siapkan khusus untuk Anda!"
                </p>
            </div>
        </div>
    </div>

    <div class="memberProdukLengkap" id="produk">
        <h1 id="title">Produk Grosir</h1>
        <div class="fullProduk">
            <h1>Produk</h1>
            <div class="produk">
                <div class="ketProduk">
                    <div class="gambarProduk">
                        <img src="../img/kirey.jpg" alt="gambarProduk">
                    </div>
                    <div class="deskripsiProduk">
                        <h2>Chitato</h2>
                    </div>
                    <div class="iconProduk">
                        <a href="#">Edit</a>
                    </div>
                </div>
                <div class="ketProduk">
                    <div class="gambarProduk">
                        <img src="../img/kirey.jpg" alt="gambarProduk">
                    </div>
                    <div class="deskripsiProduk">
                        <h2>Chitato</h2>
                    </div>
                    <div class="iconProduk">
                        <a href="#">Edit</a>
                    </div>
                </div>
                <div class="ketProduk">
                    <div class="gambarProduk">
                        <img src="../img/kirey.jpg" alt="gambarProduk">
                    </div>
                    <div class="deskripsiProduk">
                        <h2>Chitato</h2>
                    </div>
                    <div class="iconProduk">
                        <a href="#">Edit</a>
                    </div>
                </div>
                <div class="ketProduk">
                    <div class="gambarProduk">
                        <img src="../img/kirey.jpg" alt="gambarProduk">
                    </div>
                    <div class="deskripsiProduk">
                        <h2>Chitato</h2>
                    </div>
                    <div class="iconProduk">
                        <a href="#">Edit</a>
                    </div>
                </div>
                <div class="ketProduk">
                    <div class="gambarProduk">
                        <img src="../img/kirey.jpg" alt="gambarProduk">
                    </div>
                    <div class="deskripsiProduk">
                        <h2>Chitato</h2>
                    </div>
                    <div class="iconProduk">
                        <a href="#">Edit</a>
                    </div>
                </div>
                <div class="ketProduk">
                    <div class="gambarProduk">
                        <img src="../img/kirey.jpg" alt="gambarProduk">
                    </div>
                    <div class="deskripsiProduk">
                        <h2>Chitato</h2>
                    </div>
                    <div class="iconProduk">
                        <a href="#">Edit</a>
                    </div>
                </div>
                <div class="ketProduk">
                    <div class="gambarProduk">
                        <img src="../img/kirey.jpg" alt="gambarProduk">
                    </div>
                    <div class="deskripsiProduk">
                        <h2>Chitato</h2>
                    </div>
                    <div class="iconProduk">
                        <a href="#">Edit</a>
                    </div>
                </div>
            </div>

            <div class="iconLengkapProduk">
                <a href="#">Tambah</a>
                <a href="#">Hapus</a>
            </div>
        </div>
        <div class="deskripsiLainnyaProduk">
            <img src="../img/gambarHome.png" alt="gambarDeskripsiProduk">
            <div class="textDeskripsiProduk">
                <p>
                    "Selamat datang di Grosir Hulu, tempat di mana kualitas, kepercayaan, dan kepuasan pelanggan
                    menjadi prioritas utama. Kami menyediakan beragam produk berkualitas dengan harga yang kompetitif,
                    dirancang untuk memenuhi kebutuhan Anda dengan mudah dan nyaman. Dengan layanan yang cepat, aman,
                    dan terpercaya, kami berkomitmen untuk memberikan pengalaman belanja yang menyenangkan. Mari temukan
                    apa yang Anda cari, karena kepuasan Anda adalah kebahagiaan kami. Belanja bersama kami sekarang dan
                    rasakan pelayanan terbaik yang telah kami siapkan khusus untuk Anda!"
                </p>
            </div>
        </div>
    </div>

</body>
<script src="../js/edit.js"></script>
<script src="../js/tambah.js"></script>

</html>