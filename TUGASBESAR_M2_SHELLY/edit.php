<?php

include "koneksi.php";

$id = (int) $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM buku WHERE id = $id");

$buku = mysqli_fetch_assoc($data);

if (!$buku) {
    die("Buku tidak ditemukan");
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Edit Buku</h1>

    <div class="form-buku">

        <form action="proses-edit.php" method="POST">

            <input type="hidden" name="id"
                   value="<?php echo $buku['id']; ?>">

            <label>Kode Buku</label>
            <input type="text" name="kode"
                   value="<?php echo htmlspecialchars($buku['kode']); ?>" required>

            <label>Nama Buku</label>
            <input type="text" name="nama"
                   value="<?php echo htmlspecialchars($buku['nama']); ?>" required>

            <label>Penerbit</label>
            <input type="text" name="penerbit"
                   value="<?php echo htmlspecialchars($buku['penerbit']); ?>" required>

            <label>Tahun Terbit</label>
            <input type="number" name="tahun"
                   value="<?php echo $buku['tahun']; ?>" min="1" required>

            <label>Kategori</label>
            <input type="text" name="kategori"
                   value="<?php echo htmlspecialchars($buku['kategori']); ?>" required>

            <label>Status</label>
            <select name="status">

                <option value="Tersedia"
                    <?php if ($buku['status'] == "Tersedia") echo "selected"; ?>>
                    Tersedia
                </option>

                <option value="Dipinjam"
                    <?php if ($buku['status'] == "Dipinjam") echo "selected"; ?>>
                    Dipinjam
                </option>

            </select>

            <button type="submit">Simpan Perubahan</button>

        </form>

    </div>

    <a href="katalog.php">Kembali ke Katalog</a>

</div>

</body>
</html>