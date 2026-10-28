<html>
<head>
    <title>Katalog Buku</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="navbar">
        <h2>Digital Library</h2>

        <p>
            Katalog
            Detail Buku
            Anggota
            Penerbit
        </p>
    </div>

    <div class="container">

        <h1>Katalog Buku</h1>

        <p>
            Temukan berbagai koleksi buku yang tersedia
            di perpustakaan.
        </p>

        <div class="search">

            <input type="text" placeholder="Cari judul buku...">

            <button>+ Tambah Buku</button>

        </div>

        <div class="buku-container">

            <table>

                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun</th>
                    <th>Kategori</th>
                    <th>Status</th>
                </tr>

                <?php

                $buku1 = [
                    "judul" => "Pengembangan Aplikasi Website",
                    "pengarang" => "Shelly Felicia",
                    "tahun" => 2025,
                    "kategori" => "Teknologi",
                    "status" => "Tersedia"
                ];

                $buku2 = [
                    "judul" => "Basis Data",
                    "pengarang" => "Kayla Mersyan",
                    "tahun" => 2024,
                    "kategori" => "Teknologi",
                    "status" => "Tersedia"
                ];

                $buku3 = [
                    "judul" => "Dasar UI/UX",
                    "pengarang" => "Nugraha",
                    "tahun" => 2025,
                    "kategori" => "Desain",
                    "status" => "Dipinjam"
                ];

                $buku4 = [
                    "judul" => "Algoritma Pemrograman",
                    "pengarang" => "Fairuz",
                    "tahun" => 2023,
                    "kategori" => "Teknologi",
                    "status" => "Tersedia"
                ];

                $daftarBuku = [$buku1, $buku2, $buku3, $buku4];

                $no = 1;

                foreach ($daftarBuku as $buku) {

                ?>

                <tr>

                    <td><?php echo $no; ?></td>

                    <td><?php echo $buku["judul"]; ?></td>

                    <td><?php echo $buku["pengarang"]; ?></td>

                    <td><?php echo $buku["tahun"]; ?></td>

                    <td><?php echo $buku["kategori"]; ?></td>

                    <td>
                        <?php
                        if ($buku["status"] == "Tersedia") {
                            echo "<span class='tersedia'>Tersedia</span>";
                        } else {
                            echo "<span class='dipinjam'>Dipinjam</span>";
                        }
                        ?>
                    </td>

                </tr>

                <?php

                    $no++;

                }

                ?>

            </table>

        </div>

        <p>
            <a href="buku.php">
                Lihat Detail Semua Buku
            </a>
        </p>

    </div>

</body>
</html>
