<?php

include "koneksi.php";

$data = mysqli_query($conn, "SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Buku</title>
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

    <h1>Detail Buku</h1>

    <?php while ($buku = mysqli_fetch_assoc($data)) { ?>

        <div class="buku">

            <h2><?php echo htmlspecialchars($buku['nama']); ?></h2>

            <p>
                <b>Kode Buku:</b>
                <?php echo htmlspecialchars($buku['kode']); ?>
            </p>

            <p>
                <b>Penerbit:</b>
                <?php echo htmlspecialchars($buku['penerbit']); ?>
            </p>

            <p>
                <b>Tahun Terbit:</b>
                <?php echo $buku['tahun']; ?>
            </p>

            <p>
                <b>Kategori:</b>
                <?php echo htmlspecialchars($buku['kategori']); ?>
            </p>

            <p>
                <b>Status:</b>
                <?php echo htmlspecialchars($buku['status']); ?>
            </p>

            <a href="edit.php?id=<?php echo $buku['id']; ?>">Edit Buku</a>

        </div>

    <?php } ?>

    <a class="tombol" href="katalog.php">Kembali ke Katalog</a>

</div>

</body>
</html>