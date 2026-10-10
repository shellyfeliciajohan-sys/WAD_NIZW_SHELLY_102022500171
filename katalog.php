<?php

include "koneksi.php";

$data = mysqli_query($conn, "SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Katalog Buku</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="navbar">
    <h2>Digital Library</h2>

    <div>
        <a href="katalog.php">Katalog</a>
        <a href="buku.php">Detail Buku</a>
    </div>
</div>

<div class="container">

    <h1>Katalog Buku</h1>

    <p>Temukan berbagai koleksi buku yang tersedia di perpustakaan.</p>

    <div class="form-buku">

        <h2>Tambah Buku</h2>

        <form action="proses-tambah.php" method="POST">

            <label>Kode Buku</label>
            <input type="text" name="kode" placeholder="Contoh: BK005" required>

            <label>Nama Buku</label>
            <input type="text" name="nama" placeholder="Masukkan nama buku" required>

            <label>Penerbit</label>
            <input type="text" name="penerbit" placeholder="Masukkan penerbit" required>

            <label>Tahun Terbit</label>
            <input type="number" name="tahun" placeholder="Masukkan tahun" min="1" required>

            <label>Kategori</label>
            <input type="text" name="kategori" placeholder="Contoh: Teknologi" required>

            <label>Status</label>
            <select name="status">
                <option value="Tersedia">Tersedia</option>
                <option value="Dipinjam">Dipinjam</option>
            </select>

            <button type="submit">+ Tambah Buku</button>

        </form>

    </div>

    <table>

        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Nama Buku</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;

        while ($buku = mysqli_fetch_assoc($data)) {
        ?>

        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo htmlspecialchars($buku['kode']); ?></td>
            <td><?php echo htmlspecialchars($buku['nama']); ?></td>
            <td><?php echo htmlspecialchars($buku['penerbit']); ?></td>
            <td><?php echo $buku['tahun']; ?></td>
            <td><?php echo htmlspecialchars($buku['kategori']); ?></td>
            <td><?php echo htmlspecialchars($buku['status']); ?></td>

            <td>
                <a href="edit.php?id=<?php echo $buku['id']; ?>">Edit</a>

                <a href="hapus.php?id=<?php echo $buku['id']; ?>"
                   onclick="return confirm('Yakin ingin menghapus buku ini?')">
                    Hapus
                </a>
            </td>
        </tr>

        <?php
            $no++;
        }
        ?>

    </table>

    <a class="tombol" href="buku.php">Lihat Detail Buku</a>

</div>

</body>
</html>