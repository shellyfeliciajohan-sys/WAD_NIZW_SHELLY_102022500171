<?php

include "koneksi.php";

$kode = mysqli_real_escape_string($conn, $_POST['kode']);
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$penerbit = mysqli_real_escape_string($conn, $_POST['penerbit']);
$tahun = (int) $_POST['tahun'];
$kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
$status = mysqli_real_escape_string($conn, $_POST['status']);

$query = "INSERT INTO buku
(kode, nama, penerbit, tahun, kategori, status)
VALUES
('$kode', '$nama', '$penerbit', $tahun, '$kategori', '$status')";

if (mysqli_query($conn, $query)) {
    header("Location: katalog.php");
    exit;
} else {
    echo "Buku gagal ditambahkan";
}

?>