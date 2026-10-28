<?php

include "koneksi.php";

$id = (int) $_POST['id'];

$kode = mysqli_real_escape_string($conn, $_POST['kode']);
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$penerbit = mysqli_real_escape_string($conn, $_POST['penerbit']);
$tahun = (int) $_POST['tahun'];
$kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
$status = mysqli_real_escape_string($conn, $_POST['status']);

$query = "UPDATE buku SET
kode = '$kode',
nama = '$nama',
penerbit = '$penerbit',
tahun = $tahun,
kategori = '$kategori',
status = '$status'
WHERE id = $id";

if (mysqli_query($conn, $query)) {
    header("Location: katalog.php");
    exit;
} else {
    echo "Buku gagal diedit";
}

?>